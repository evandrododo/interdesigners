<?php
    $usuario = Structure::verifyAdminSession();
    Structure::header();
    
    echo "<h1>Inscrição > Buscar</h1>";

    $pagamentoDAO = new PagamentoDAO;
    $transacaoDAO = new TransacaoDAO;
    $transacoes = array();
    
    if (isset($_POST['nr_boleto']) && !is_null($_POST['nr_boleto']) && $_POST['nr_boleto'] != "") {
        $nr_boleto = $_POST['nr_boleto'];

        $pagamentos = $pagamentoDAO->getPagamentoByInfo($nr_boleto);

        if ($pagamentos) {
            if (!is_array($pagamantos)) $pagamentos = array($pagamentos);
            foreach ($pagamentos as $pagamento) {
                $transacoesPag = $transacaoDAO->selectAll("Transacao", "id = ".$pagamento->get('id_transacao'));
                if ($transacoesPag) {
                    if (!is_array($transacoesPag)) {
                        $transacoesPag = array($transacoesPag);
                    }
                    foreach ($transacoesPag as $transacao) {
                        $transacoes[] = $transacao;
                    }
                } else {
                    echo "<h3>Transação originária do pagamento não encontrada.</h3>";
                }
            }
        } else {
            echo "<h3>Nenhum pagamento encontrado com esse código.</h3>";
        }
    }

    if (isset($_POST['id_transacao']) && !is_null($_POST['id_transacao']) && $_POST['id_transacao'] != "") {
        $idTransacao = $_POST['id_transacao'];

        $transacoesLocal = $transacaoDAO->selectAll("Transacao", "id = $idTransacao");

        if ($transacoesLocal) {
            if (!is_array($transacoesLocal)) {
                $transacoesLocal = array($transacoesLocal);
            }

            if (sizeof($transacoesLocal) > 0) {
                $transacoes = $transacoesLocal;
            }
        } else {
            echo "<h3>Nenhuma transação encontrada pra esse número.</h3>";
        }
    }

    if (isset($_POST['email']) && !is_null($_POST['email']) && $_POST['email'] != "") {
        $email = $_POST['email'];
        $usuarioDAO = new UsuarioDAO;

        $usuario = $usuarioDAO->getUserByEmail($email);

        if ($usuario) {
            $transacoesLocal = $transacaoDAO->getTransacaoByUser($usuario->get('id'));
            if (sizeof($transacoesLocal) > 0) {
                $transacoes = $transacoesLocal;
            } else {
                echo "<h3>Nenhuma transação encontrada pra esse e-mail.</h3>";
            }
        } else {
            echo "<h3>E-mail não encontrado</h3>";
        }
    }

    if (isset($_POST['cpf']) && !is_null($_POST['cpf']) && $_POST['cpf'] != "") {
        $cpf = $_POST['cpf'];
        $usuarioDAO = new UsuarioDAO;

        $usuario = $usuarioDAO->getUserByCPF($cpf);

        if ($usuario) {
            $transacoesLocal = $transacaoDAO->getTransacaoByUser($usuario->get('id'));
            if (sizeof($transacoesLocal) > 0) {
                $transacoes = $transacoesLocal;
            } else {
                echo "<h3>Nenhuma transação encontrada pra esse CPF.</h3>";
            }
        } else {
            echo "<h3>CPF não encontrado</h3>";
        }
    }

    if (sizeof($transacoes) == 0) {
        echo "<h3>Nenhuma transação com essas informações encontrada.</h3>";
    } else {
?>
        <table style="font-size:9px;">
            <thead>
                <th style="width:5%;" class="right">ID</th>
                <th style="width:8.5%">Status</th>
                <th style="width:10%;">Data de Criação</th>
                <th style="width:5.3%;">Valor Total</th>
                <th style="width:5.7%;">Isenção</th>
                <th style="width:10%;">Pagamento</th>
                <th style="width:6%;" class="right">Usuário</th>
                <th style="width:14%;">Nome</th>
                <th style="width:13.5%;">E-mail</th>
                <th style="width:6.5%;" class="center">Confirmar</th>
                <th style="width:5.5%;" class="center">Cancelar</th>
                <th style="width:6.5%;" class="center">Credenciar</th>
            </thead>
<?php
            foreach ($transacoes as $transacao){
                $pagamentoDAO = new PagamentoDAO;
                $usuarioDAO = new UsuarioDAO;
                $user = $usuarioDAO->getUserById($transacao->get('id_user'));
                $pagamento = $pagamentoDAO->getLastPagamentoByTransacaoId($transacao->get('id'));
?>
            <tr>
                <td class="right"><?=$transacao->get('id')?></td>
                <td><?=$transacaoDAO->getTransacaoTextStatus($transacao->get('id'))?></td>
                <td><?=$transacao->get('data_criacao')?></td>
                <td>R$ <?=$transacao->get('valor_total')?></td>
                <td>R$ <?=$transacao->get('isencao')?></td>
                <td><?=($pagamento ? $pagamento->get('metodo_pagto')." ".$pagamento->get('obs') : "")?></td>
                <td class="right"><?=$transacao->get('id_user')?></td>
                <td><?=$user->get('nome')?></td>
                <td><?=$user->get('email')?></td>
                <td class="center"><?php if ($transacao->get('status') != 1 && $transacao->get('status') != 2) : ?>
                    <a class="post" href="<?=APP_URL?>/admin/action/inscricao/confirmar" id="<?=$transacao->get('id')?>">Confirmar</a>
                    <?php endif; ?>
                </td>
                <td class="center"><?php if ($transacao->get('status') != 3 && $transacao->get('status') != 2) : ?>
                    <a class="post" href="<?=APP_URL?>/admin/action/inscricao/cancelar" id="<?=$transacao->get('id')?>">Cancelar</a>
                    <?php endif; ?>
                </td>
                <td class="center"><?php if ($transacao->get('status') == 1) : ?>
                    <a href="<?=APP_URL?>/admin/transacao?id=<?=$transacao->get('id')?>">Credenciar</a>
                    <?php endif; ?>
                </td>

            </tr>
<?php
        }
?>
        </table>
<?php
    }

    echo '<p style="margin-top:20px;"><a href="'.APP_URL.'/admin/inscricao/buscar">Buscar novamente</a></p>';
    Structure::footer();
?>