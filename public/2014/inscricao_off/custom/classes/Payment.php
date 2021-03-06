<?php

// use "OpenBoleto\Banco\BancoDoBrasil";
// use "OpenBoleto\Agente";

class Payment {

    private function rollbackTransacaoAndItems($transacao) {
        $transacao_dao = new TransacaoDAO;
        $transacao_item_dao = new TransacaoItemDAO;
        $transacao_item_dao->deleteTransacaoItemByTransacaoId($transacao->get('id')); // Rollback TransacaoItem
        $transacao_dao->deleteTransacaoById($transacao->get('id')); // Rollback Transacao
    }
    
    public function pay($usuario_id, $transacao_id, $payment, $valor_final) {
        if ($payment == "BOL") {
            return $this->payWithBoleto($usuario_id, $transacao_id, $valor_final);
        } elseif ($payment == "PPL") {
            return $this->payWithPayPal($usuario_id, $transacao_id, $valor_final);
        } elseif ($payment == "PGS") {
            return $this->payWithPagSeguro($usuario_id, $transacao_id, $valor_final);
        } elseif ($payment == "DEP") {
            return $this->payWithDeposito($usuario_id, $transacao_id, $valor_final);
        } else {
            return false;
        }
    }

    private function payWithBoleto($usuario_id, $transacao_id, $valor_final) {
        $usuarioDAO = new UsuarioDAO;
        $usuario = $usuarioDAO->getUserById($usuario_id);

        $transacaoDAO = new TransacaoDAO;
        $transacao = $transacaoDAO->getTransacaoById($transacao_id);

        $sacado = new Agente(
            $usuario->get('nome'),
            $usuario->get('cpf'),
            $usuario->get('end_logradouro')." ".$usuario->get('end_numero')." ".$usuario->get('end_complemento')." ".$usuario->get('end_bairro'),
            $usuario->get('end_cep'),
            $usuario->get('end_cidade'),
            $usuario->get('end_estado')
        );

        $cedente = new Agente(
            CEDENTE_NOME,
            CEDENTE_NR_DOCUMENTO,
            CEDENTE_ENDERECO,
            CEDENTE_CEP,
            CEDENTE_CIDADE,
            CEDENTE_ESTADO
        );

        $venc = new DateTime('now');
        $venc->add(new DateInterval(VENCIMENTO));

        $boleto = new BancoDoBrasil(array(
            // Parâmetros obrigatórios
            'dataVencimento' => $venc,
            'valor' => $valor_final,
            'sequencial' => $transacao->get('id'), // Para gerar o nosso número
            'sacado' => $sacado,
            'cedente' => $cedente,
            'agencia' => AGENCIA, // Até 4 dígitos
            'carteira' => CARTEIRA,
            'conta' => CONTA, // Até 8 dígitos
            'convenio' => CONVENIO, // 4, 6 ou 7 dígitos
        ));

        $boleto_output = $boleto->getOutput();

        $pattern2find = '<div class="linha-digitavel">';
        $strpos_start = strpos($boleto_output, $pattern2find) + strlen($pattern2find);
        $linha_digitavel = substr($boleto_output, $strpos_start, 54);

        $pattern2find = '<div class="titulo">Nosso número</div>\n            <div class="conteudo rtl">';
        $strpos_start = strpos($boleto_output, $pattern2find) + strlen($pattern2find);
        $nosso_numero = substr($boleto_output, $strpos_start, 17);

        $obs = str_replace(".", "", str_replace(" ", "", $linha_digitavel));

        $boleto_path = NULL;
        /*
        try {
            $boleto_input = new TempFile($boleto->getOutput());
            $boleto_output = new TempFile();
            $instance = new Converter(new PhantomJS(), $boleto_input, $boleto_output);
            $instance->convert();
            $boleto_path = FILES_DIR.md5(($usuario->get('id').$transacao->get('id'))).".pdf"; 
            $boleto_output->save($boleto_path);
        } catch (Exception $e) {
        */
            $datahora = new DateTime('now');
            $failsafe_boleto_name = md5(($usuario->get('id').$transacao->get('id').$datahora->format('Y-m-d H:i:s'))).".html";
            $failsafe_boleto_path = FILES_DIR_FAILSAFE.$failsafe_boleto_name;
            file_put_contents($failsafe_boleto_path, $boleto->getOutput());
            $boleto_path = FILES_URL_FAILSAFE.$failsafe_boleto_name;
        /*
        }
        */

        $pagamento = new Pagamento;
        $pagamento->set('id_transacao', $transacao->get('id'));
        $pagamento->set('metodo_pagto', 'BOL');
        $pagamento->set('info', $boleto_path);
        $pagamento->set('obs', $obs);

        $pagamento_dao = new PagamentoDAO;
        if (!$pagamento_dao->insert($pagamento)) {
            $this->rollbackTransacaoAndItems($transacao);
            Structure::redirWithMessage("Erro304\nProblemas ao criar pagamento. Tente novamente, por favor.", "/dashboard");        
        }

        $to = $usuario->get('email');
        $subject = DEFAULT_EMAIL_SUBJECT;
        $message = DEFAULT_EMAIL_GREETING;
        $message .= "<p>Sua inscrição no N_Goiânia foi realizada.</p>";
        $message .= "<p>O seu boleto vencerá em 3 dias corridos. Após 4 dias, seu pagamento será computado.</p>";
        $message .= "<p>Clique <a href=\"".$boleto_path."\">aqui</a> para visualizar seu boleto.</p>";
        $message .= DEFAULT_EMAIL_SIGN;
        
        $additional_headers = "MIME-Version: 1.0\n";
        $additional_headers .= "Content-type: text/html; utf8";
        $additional_headers .= "From:".DEFAULT_EMAIL_FROM;
        
        mail($to, $subject, $message, $additional_headers);

        return $pagamento;
    }

    private function payWithPayPal($usuario_id, $transacao_id, $valor_final) {
        $valor_final = $valor_final * 1.1;

        $usuarioDAO = new UsuarioDAO;
        $usuario = $usuarioDAO->getUserByID($usuario_id);

        $transacaoDAO = new TransacaoDAO;
        $transacao = $transacaoDAO->getTransacaoById($transacao_id);

        $paypal_btn = '<form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top" style="margin-top:20px;">';
        $paypal_btn .=  '<input type="hidden" name="cmd" value="_xclick">';
        $paypal_btn .=  '<input type="hidden" name="business" value="'.PAYPAL_EMAIL.'">';
        $paypal_btn .=  '<input type="hidden" name="lc" value="BR">';
        $paypal_btn .=  '<input type="hidden" name="item_name" value="'.PAYPAL_ITEM_NAME.'">';
        $paypal_btn .=  '<input type="hidden" name="item_number" value="'.$transacao->get('id').'">';
        $paypal_btn .=  '<input type="hidden" name="amount" value="'.$valor_final.'">';
        $paypal_btn .=  '<input type="hidden" name="currency_code" value="BRL">';
        $paypal_btn .=  '<input type="hidden" name="button_subtype" value="services">';
        $paypal_btn .=  '<input type="hidden" name="no_note" value="0">';
        $paypal_btn .=  '<input type="hidden" name="tax_rate" value="0.000">';
        $paypal_btn .=  '<input type="hidden" name="shipping" value="0.00">';
        $paypal_btn .=  '<input type="hidden" name="bn" value="PP-BuyNowBF:btn_paynowCC_LG.gif:NonHostedGuest">';
        $paypal_btn .=  '<input type="image" style="width:auto;" src="https://www.paypalobjects.com/pt_BR/BR/i/btn/btn_paynowCC_LG.gif" border="0" name="submit" alt="PayPal - A maneira fácil e segura de enviar pagamentos online!">';
        $paypal_btn .=  '<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">';
        $paypal_btn .=  '</form>';

        $pagamento = new Pagamento;
        $pagamento->set('id_transacao', $transacao->get('id'));
        $pagamento->set('metodo_pagto', 'PPL');
        $pagamento->set('info', "");
        $pagamento->set('obs', $paypal_btn);

        $pagamento_dao = new PagamentoDAO;
        if (!$pagamento_dao->insert($pagamento)) {
            $this->rollbackTransacaoAndItems($transacao);
            Structure::redirWithMessage("Erro 304\nProblemas ao criar pagamento. Tente novamente, por favor.", "/dashboard");       
        }

        $to = $usuario->get('email');
        $subject = DEFAULT_EMAIL_SUBJECT;
        $message = DEFAULT_EMAIL_GREETING;
        $message .= "<p>Sua inscrição no ".APP_TITLE." foi realizada.</p>";
        $message .= "<p>Você escolheu pagar utilizando o PayPal. Por favor, aguarde a confirmação da sua incrição via e-mail nos próximos dias.</p>";
        $message .= DEFAULT_EMAIL_SIGN;
        
        $additional_headers = "MIME-Version: 1.0\n";
        $additional_headers .= "Content-type: text/html; utf8";
        $additional_headers .= "From:".DEFAULT_EMAIL_FROM;
        
        mail($to, $subject, $message, $additional_headers);
        
        $paypal_html = '<h1>PayPal</h1>';
        $paypal_html .= '<h2>Clique no botão abaixo para realizar o pagamento de sua inscrição.</h2>';
        $paypal_html .= '<h3>Utilize o mesmo e-mail que você utilizou em seu cadastro.</h3>';
        $paypal_html .= '<h3>'.PAYPAL_ITEM_NAME.'</h3>';
        $paypal_html .= '<h3>Valor Total: R$ '.$valor_final.'</h3>';

        return $pagamento;
    }

    private function payWithDeposito($usuario_id, $transacao_id, $valor_final) {
        $usuarioDAO = new UsuarioDAO;
        $usuario = $usuarioDAO->getUserByID($usuario_id);

        $transacaoDAO = new TransacaoDAO;
        $transacao = $transacaoDAO->getTransacaoById($transacao_id);

        $pagamento = new Pagamento;
        $pagamento->set('id_transacao', $transacao->get('id'));
        $pagamento->set('metodo_pagto', 'DEP');
        $pagamento->set('info', "");
        $pagamento->set('obs', "");

        $pagamento_dao = new PagamentoDAO;
        if (!$pagamento_dao->insert($pagamento)) {
            $this->rollbackTransacaoAndItems($transacao);
            Structure::redirWithMessage("Erro 304\nProblemas ao criar pagamento. Tente novamente, por favor.", "/dashboard");       
        }

        $to = $usuario->get('email');
        $subject = DEFAULT_EMAIL_SUBJECT;
        $message = DEFAULT_EMAIL_GREETING;
        $message .= "<p>Sua inscrição no ".APP_TITLE." foi realizada.</p>";
        $message .= "<p>Você escolheu pagar utilizando Depósito Bancário. Por favor, realize o depósito para a conta abaixo e o comprovante para ".DEPOSITO_EMAIL.".</p>";
        $message .= "<p>".DEPOSITO_BANCO."<br />";
        $message .= DEPOSITO_NOME."<br />";
        $message .= "CPF ".DEPOSITO_CPF."<br />";
        $message .= "Agência ".DEPOSITO_AGENCIA."<br />";
        $message .= "Conta ".DEPOSITO_CONTA."<br />";

        $message .= DEFAULT_EMAIL_SIGN;
        
        $additional_headers = "MIME-Version: 1.0\n";
        $additional_headers .= "Content-type: text/html; utf8";
        $additional_headers .= "From:".DEFAULT_EMAIL_FROM;
        
        mail($to, $subject, $message, $additional_headers);
        
        $html = '<h1>Depósito Bancário</h1>';
        $html .= "<p><strong>Você escolheu pagar utilizando Depósito Bancário. Por favor, realize o depósito para a conta abaixo e o comprovante para <em>".DEPOSITO_EMAIL."</em>.</strong></h2>";
        $html .= "<h2>Dados Bancários</h2>";
        $html .= "<p>".DEPOSITO_BANCO."<br />";
        $html .= DEPOSITO_NOME."<br />";
        $html .= "CPF ".DEPOSITO_CPF."<br />";
        $html .= "Agência ".DEPOSITO_AGENCIA."<br />";
        $html .= "Conta ".DEPOSITO_CONTA."<br />";
        $html .= '<h3>Valor Total: R$ '.$valor_final.'</h3>';

        return $pagamento;
    }

    private function payWithPagSeguro($usuario_id, $transacao_id, $valor_final) {
        $usuarioDAO = new UsuarioDAO;
        $usuario = $usuarioDAO->getUserByID($usuario_id);

        $transacaoDAO = new TransacaoDAO;
        $transacao = $transacaoDAO->getTransacaoById($transacao_id);

        $transacaoItemDAO = new TransacaoItemDAO;
        $itens = $transacaoItemDAO->getItensByTransacao($transacao_id);

        $paymentRequest = new PagSeguroPaymentRequest();
        $paymentRequest->setCurrency("BRL");
        
        if (is_array($itens)) {
            foreach ($itens as $item) {
                if ($item->get('isencao') == 0) {
                    $valor_item = $item->get('valor_item');
                    $valor_item *= PAGSEGURO_MULTIPLIER;
                    $valor_item = number_format($valor_item, 2, '.', '');
                    $paymentRequest->addItem($item->get('id_item'), $item->get('desc_item'), 1, $valor_item);   
                }
            }
        } else {
            $item = $itens;
            if ($item->get('isencao') == 0) {
                $valor_item = $item->get('valor_item');
                $valor_item *= PAGSEGURO_MULTIPLIER;
                $valor_item = number_format($valor_item, 2, '.', '');
                $paymentRequest->addItem($item->get('id_item'), $item->get('desc_item'), 1, $valor_item);   
            }           
        }
        
        $paymentRequest->setReference($transacao_id);
        $paymentRequest->setMaxAge(259200);
        $paymentRequest->setMaxUses(15);
        $paymentRequest->setSender($usuario->get('nome'), $usuario->get('email'), '41', '98623286');
        
        $paymentRequest->setRedirectUrl(APP_URL."/dashboard");
        
        try {
            $credentials = new PagSeguroAccountCredentials(PAGSEGURO_EMAIL, PAGSEGURO_TOKEN);
            $url = $paymentRequest->register($credentials);
            if ($url) {
                $pagamento = new Pagamento;
                $pagamento->set('id_transacao', $transacao->get('id'));
                $pagamento->set('metodo_pagto', 'PGS');
                $pagamento->set('info', $url);
                $pagamento->set('obs', "");

                $pagamento_dao = new PagamentoDAO;
                if (!$pagamento_dao->insert($pagamento)) {
                    $this->rollbackTransacaoAndItems($transacao);
                    Structure::redirWithMessage("Erro 304\nProblemas ao criar pagamento. Tente novamente, por favor.", "/dashboard");       
                }

                $to = $usuario->get('email');
                $subject = DEFAULT_EMAIL_SUBJECT;
                $message = DEFAULT_EMAIL_GREETING;
                $message .= "<p>Sua inscrição no ".APP_TITLE." foi realizada.</p>";
                $message .= "<p>Você escolheu pagar utilizando o PagSeguro. Por favor, aguarde a confirmação da sua incrição via e-mail nos próximos dias.</p>";
                $message .= "<p><a href='$url'>PagSeguro</a></p>";
                $message .= DEFAULT_EMAIL_SIGN;
                
                $additional_headers = "MIME-Version: 1.0\n";
                $additional_headers .= "Content-type: text/html; utf8";
                $additional_headers .= "From:".DEFAULT_EMAIL_FROM;
                
                mail($to, $subject, $message, $additional_headers);

                return $pagamento;

            } else {
                return false;
            }
        }  catch (PagSeguroServiceException $e) {
                $log = new LogEngine;
                $log->logIt("Transacao".$transacao_id." PagSeguro ERROR: ".$e->getMessage());
                return false;
        }
    }

}

?>