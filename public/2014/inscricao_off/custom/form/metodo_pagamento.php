<?php

/* FUNCTIONS PRA FACILITAR ****************************************************/
    function getNome($pacote) {
        $valor_dao = new ValorDAO;
        
        $result = $valor_dao->getValorDescricaoAtual($pacote);
        
        if (!$result) {
            Structure::redirWithMessage("Ocorreram problemas. Por favor, tente novamente.", "/");
    }
    
        switch($pacote) {
            // case 0: return "Inscricao Basica - ".$result;
            case 0: return $result;
            case 1: return $result;
            case 2: return $result;
            case 3: return $result;
        }
    }

    function rollbackTransacaoAndItems($transacao) {
        $transacao_dao = new TransacaoDAO;
        $transacao_item_dao = new TransacaoItemDAO;
        $transacao_item_dao->deleteTransacaoItemByTransacaoId($transacao->get('id')); // Rollback TransacaoItem
        $transacao_dao->deleteTransacaoById($transacao->get('id')); // Rollback Transacao
    }

    function createTransacao($usuario, $pacotes) {
        $datetime_agora = date('Y-m-d H:i:s');

        $isencao_dao = new IsencaoDAO;
        $transacao_dao = new TransacaoDAO;
        $transacao_item_dao = new TransacaoItemDAO;
        $valor_dao = new ValorDAO;

        $valor_total = 0;
        foreach ($pacotes as $pacote) {
            if ($transacao_item_dao->usuarioHasPacote($usuario->get('id'), $pacote)) {
                Structure::redirWithMessage("Voce ja possui transacoes ativas em pelo menos um dos pacotes que escolheu.", "/dashboard"); // TODO: Adicionar acento
            }

            $valor_total += $valor_dao->getValorAtual($pacote);
        }


        $transacao = new Transacao;

        $transacao->set('id_user', $usuario->get('id'));
        $transacao->set('valor_total', $valor_total);
        $transacao->set('data_criacao', $datetime_agora);
        $transacao->set('status', 0);
        $transacao->set('isencao', $isencao_dao->getIsencaoTotal($usuario->get('email')) - $transacao_dao->getIsencaoTransacaoByUser($usuario->get('id')));
        // Talvez remover essa linha se o IF embaixo funciona
        // $result = $dao->insert($transacao)
        
        if (!$transacao_dao->insert($transacao)) {
            Structure::redirWithMessage("301 - Problemas ao criar transacao. Tente novamente, por favor.", "/dashboard"); // TODO: Adicionar acento
        }
        
        $transacao = $transacao_dao->selectAll('Transacao',"id_user = ".$usuario->get('id')." AND valor_total = $valor_total AND data_criacao = '$datetime_agora' AND status = 0");

        return $transacao;
    }

    function createTransacaoItems($transacao, $pacotes) {
        // DAOs
        $isencao_dao = new IsencaoDAO;
        $transacao_item_dao = new TransacaoItemDAO;
        $usuario_dao = new UsuarioDAO;
        $valor_dao = new ValorDAO;

        $usuario = $usuario_dao->getUserById($transacao->get('id_user'));

        $items = array();

        // Iterate the selection and create the items for the transaction
        foreach ($pacotes as $pacote) {
                $transacao_item = new TransacaoItem;
                $transacao_item->set('id_transacao', $transacao->get('id'));
                $transacao_item->set('id_item', $pacote);
                $transacao_item->set('desc_item', getNome($pacote));
                $transacao_item->set('valor_item',$valor_dao->getValorAtual($pacote));
                
                if ($isencao_dao->hasIsencao($usuario->get('email'), $pacote)) {
                    $transacao_item->set('isencao', $valor_dao->getValorAtual($pacote) * $isencao_dao->getIsencaoModifier($usuario->get('email'), $pacote));
                }
                
                $items[] = $transacao_item;
        }
        
        $problem_insert_items = false;
        
        // Iterate the items created and try to insert them all
        foreach ($items as $item) {
            //TODO: Talvez remover essa linha se o IF embaixo funcionar
            //$result = $dao->insert($item);
            
            if (!$transacao_item_dao->insert($item)) {
                $problem_insert_items = true;
            }
        }
        
        // If there's any problem with items' insertion
        if ($problem_insert_items) {
            rollbackTransacaoAndItems($transacao);
            Structure::redirWithMessage("302 - Problemas ao criar itens transacao. Tente novamente, por favor.", "/dashboard"); //TODO: Adicionar acento
        }
        
        // Get the inserted items, now with the ID inside
        $items = $transacao_item_dao->selectAll('TransacaoItem',"id_transacao = ".$transacao->get('id'));
        
        // If there's any problem getting the items
        if (!$items) {
            rollbackTransacaoAndItems($transacao);
            Structure::redirWithMessage("303 - Problemas ao encontrar itens da transacao. Tente novamente, por favor.", "/dashboard"); //TODO: Adicionar acento
        }

        return $items;
    }
/* /FUNCTIONS PRA FACILITAR ***************************************************/
    $usuario = Structure::verifySession();

    if (array_key_exists('late', $_GET)) :
        $transacao_dao = new TransacaoDAO;
        $transacao = $transacao_dao->selectAll("Transacao", "id = ".$_GET['id']);

        $valor_final = $transacao->get('valor_total') - $transacao->get('isencao');
?>
        <?php Structure::header(); ?>
        <h1>Pagamento</h1>
        <h2>Escolha seu método de pagamento.</h2>
        <form method="POST" action="<?=APP_URL?>/pagamento">
            <input type="hidden" name="id_transacao" id="id_transacao" value="<?=$transacao->get('id')?>">
            <input type="hidden" name="valor_final" id="valor_final" value="<?=$valor_final?>">
            <h3>Valor Total: R$ <?=$valor_final?></h3>

            <ul id="package_selection">
                <?php if (PAY_BOLETO) : ?>
                <li>
                    <input type="radio" name="payment" id="boleto" value="BOL">
                    <label for="boleto">Boleto</label>
                </li>
                <?php endif; ?>
                
                <?php if (PAY_PAYPAL): ?>
                <li>
                    <input type="radio" name="payment" id="paypal" value="PPL">
                    <label for="paypal">PayPal <em>(Acréscimo de 10% no Valor Total.)</em></label>
                </li>
                <?php endif; ?>

                <?php if (PAY_PAGSEGURO): ?>
                <li>
                    <input type="radio" name="payment" id="pagseguro" value="PGS">
                    <label for="paypal">PagSeguro <em>(Acréscimo de <?=PAGSEGURO_MULTIPLIER_LABEL?> no Valor Total.)</em></label>
                </li>
                <?php endif; ?>

                <?php if (PAY_DEPOSITO): ?>
                <li>
                    <input type="radio" name="payment" id="deposito" value="DEP">
                    <label for="deposito">Depósito</label>
                </li>
                <?php endif; ?>
            </ul>

            <p><input type="submit" name="Pagar" id="pagar" value="Pagar">
        </form>
        <?php Structure::footer(); ?>

<?php else :
    
        $isencao_dao = new IsencaoDAO;
        $valor_dao = new ValorDAO;
        if ($valor_dao->isMaxReached(0)) {
            Structure::redirWithMessage("Lote finalizado. Inscricoes encerradas.", "/dashboard"); //TODO: Adicionar acento
        }

        // Verify if at least one package was selected
        if (!isset($_POST['pacotes'])) {
            var_dump($_POST);
            Structure::redirWithMessage("Selecione ao menos um pacote.", "/pacotes");
        }
        $pacotes = $_POST['pacotes'];
        
        $transacao = createTransacao($usuario, $pacotes);
        $itens = createTransacaoItems($transacao, $pacotes);
        
        $valor_final = $transacao->get('valor_total') - $transacao->get('isencao');
        if ($valor_final == 0) : // If there's nothing to be paid

            $dao = new GenericDAO;

            Structure::header();
            echo "<h1>Inscrições</h1>";
            echo "<p>Você possui total isenção.</p>";
            echo "<p>Sua incrição está <strong>CONFIRMADA.</strong>";
            Structure::footer();

            $transacao = $dao->selectAll('Transacao',"id = ".$transacao->get('id'));
            $transacao->set('status',1);
            
            $result = $dao->updateWithFields($transacao, array('status'), "id = $transacao->get('id')");
            
            if (!$result) {
                $to = ADMIN_EMAIL;
                $subject = APP_TITLE." - Problema na alteração de status.";
                $message = "Problema na alteração do status da Transação id = ".$transacao->get('id');
                
                $additional_headers = "MIME-Version: 1.0\n";
                $additional_headers .= "Content-type: text/html; charset=utf8";
                $additional_headers .= "From:".FREE_SUBSCRIBERS_EMAIL;
                
                mail($to, $subject, $message, $additional_headers);
            } else {
                $to = $usuario->get('email');
                $subject = DEFAULT_EMAIL_SUBJECT;
                $message = DEFAULT_EMAIL_GREETING;
                $message .= "<p>Sua inscrição no ".APP_TITLE." foi realizada.</p>";
                $message .= "<p>Você está isento de qualquer pagamento. Sua inscrição está confirmada.</p>";
                $message .= DEFAULT_EMAIL_SIGN;
                
                $additional_headers = "MIME-Version: 1.0\n";
                $additional_headers .= "Content-type: text/html; charset=utf8";
                $additional_headers .= "From:".FREE_SUBSCRIBERS_EMAIL;
                
                mail($to, $subject, $message, $additional_headers);
            }
                    
        else : // There's something to be paid ?>
            <?php Structure::header(); ?>
            <h1>Pagamento</h1>
            <h2>Escolha seu método de pagamento.</h2>
            <form method="POST" action="<?=APP_URL?>/pagamento">
                <input type="hidden" name="id_transacao" id="id_transacao" value="<?=$transacao->get('id')?>">
                <input type="hidden" name="valor_final" id="valor_final" value="<?=$valor_final?>">
                <h3>Valor Total: R$ <?=$valor_final?></h3>

                <ul id="package_selection">
                    <?php if (PAY_BOLETO) : ?>
                    <li>
                        <input type="radio" name="payment" id="boleto" value="BOL">
                        <label for="boleto">Boleto</label>
                    </li>
                    <?php endif; ?>
                    
                    <?php if (PAY_PAYPAL): ?>
                    <li>
                        <input type="radio" name="payment" id="paypal" value="PPL">
                        <label for="paypal">PayPal <em>(Acréscimo de 10% no Valor Total.)</em></label>
                    </li>
                    <?php endif; ?>

                    <?php if (PAY_PAGSEGURO): ?>
                    <li>
                        <input type="radio" name="payment" id="pagseguro" value="PGS">
                        <label for="paypal">PagSeguro <em>(Acréscimo de <?=PAGSEGURO_MULTIPLIER_LABEL?> no Valor Total.)</em></label>
                    </li>
                    <?php endif; ?>

                    <?php if (PAY_DEPOSITO): ?>
                    <li>
                        <input type="radio" name="payment" id="deposito" value="DEP">
                        <label for="deposito">Depósito</label>
                    </li>
                    <?php endif; ?>
                </ul>

                <p><input type="submit" name="Pagar" id="pagar" value="Pagar">
            </form>
            <?php Structure::footer(); ?>
        <?php endif; ?>
    <?php endif; ?>