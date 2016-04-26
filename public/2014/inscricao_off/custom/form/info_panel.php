<?php
    $usuario = Structure::verifyAdminSession();
    Structure::header();
?>
            <script>
            </script>
            <style>
                .giant_numbers{
                    font-size: 50px;
                    font-weight: bolder;
                }
                .free td,
                .free th {
                    border: none;
                    margin: 0;
                    padding: 0;
                }
                .notfree td,
                .notfree th {
                    border: 1px solid #000000;
                }
                .noright td,
                .noright th {
                    border-bottom: 1px solid #000000;
                    border-left: 1px solid #000000;
                    border-top: 1px solid #000000;
                    border-right: none;
                }
            </style>

            <h1>Info Panel</h1>

            
            <h2>Transações</h2>
            <?php
                $transacaoItemDAO = new TransacaoItemDAO;
                $countInscricaoBasica = $transacaoItemDAO->getCountTransacaoItemByPacote(0);
                $countAlojamento = $transacaoItemDAO->getCountTransacaoItemByPacote(1);
                $countAlimentacao = $transacaoItemDAO->getCountTransacaoItemByPacote(2);
                $countFestas = $transacaoItemDAO->getCountTransacaoItemByPacote(3);
            ?>
            <table class="tac">
                <thead>
                    <th style="width:25%;">Inscrição Básica</th>
                    <th style="width:25%;">Alojamento</th>
                    <th style="width:25%;">Alimentação</th>
                    <th style="width:25%;">Festas</th>
                </thead>
                <tr class="giant_numbers">
                    <td><?=$countInscricaoBasica?></td>
                    <td><?=$countAlojamento?></td>
                    <td><?=$countAlimentacao?></td>
                    <td><?=$countFestas?></td>
                </tr>
            </table>

            <h2>Transações (apenas confirmadas)</h2>
            <?php
                $transacaoItemDAO = new TransacaoItemDAO;
                $countInscricaoBasica = $transacaoItemDAO->getCountTransacaoItemConfirmedByPacote(0);
                $countAlojamento = $transacaoItemDAO->getCountTransacaoItemConfirmedByPacote(1);
                $countAlimentacao = $transacaoItemDAO->getCountTransacaoItemConfirmedByPacote(2);
                $countFestas = $transacaoItemDAO->getCountTransacaoItemConfirmedByPacote(3);
            ?>
            <table class="tac">
                <thead>
                    <th style="width:25%;">Inscrição Básica</th>
                    <th style="width:25%;">Alojamento</th>
                    <th style="width:25%;">Alimentação</th>
                    <th style="width:25%;">Festas</th>
                </thead>
                <tr class="giant_numbers">
                    <td><?=$countInscricaoBasica?></td>
                    <td><?=$countAlojamento?></td>
                    <td><?=$countAlimentacao?></td>
                    <td><?=$countFestas?></td>
                </tr>
            </table>

            <?php
                $usuarioDAO = new UsuarioDAO;
                $countUsuarios = $usuarioDAO->selectCount("Usuario", "id", NULL);
                
                $pay_bol = 0;
                $pay_ppl = 0;
                $pay_pgs = 0;
                $pay_dep = 0;
                $pay_fail = 0;

                $transacaoDAO = new TransacaoDAO;
                $transacoes = $transacaoDAO->selectAll("Transacao", NULL);

                $pagamentoDAO = new PagamentoDAO;

                foreach ($transacoes as $transacao) {
                    $pagamento = $pagamentoDAO->getLastPagamentoByTransacaoId($transacao->get('id'));

                    if ($pagamento) {
                        switch ($pagamento->get('metodo_pagto')) {
                            case "BOL": 
                                $pay_bol++; break;
                            case "PPL": 
                                $pay_ppl++; break;
                            case "PPL": 
                                $pay_pgs++; break;
                            case "PPL": 
                                $pay_dep++; break;
                        }
                    } else {
                        $pay_fail++;
                    }
                }
            ?>
            <table class="free">
               <tr>
                    <td style="width:20%;">
                        <h2>Usuários</h2>
                        <table class="tac noright">
                            <thead>
                                <th>Cadastrados</th>
                            </thead>
                            <tr class="giant_numbers">
                                <td><?=$countUsuarios?></td>
                            </tr>
                        </table>
                    </td>
                    <td style="width:80%;">
                        <h2>Pagamento</h2>
                        <table class="tac notfree">
                            <thead>
                                <th>BOL*</th>
                                <th>PPL*</th>
                                <th>PGS*</th>
                                <th>DEP*</th>
                                <th>FAIL*</th>
                            </thead>
                            <tr class="giant_numbers">
                                <td><?=$pay_bol?></td>
                                <td><?=$pay_ppl?></td>
                                <td><?=$pay_pgs?></td>
                                <td><?=$pay_dep?></td>
                                <td><?=$pay_fail?></td>
                            </tr>
                        </table>
                    </td>
            </table>


            <h2>Últimas 200 transações</h2>
            <table style="font-size:12px;">
                <thead>
                    <th style="width:5%;">ID</th>
                    <th style="width:14%;">Status</th>
                    <th style="width:14%;">Data de Criação</th>
                    <th style="width:6%;">Valor Total</th>
                    <th style="width:6%;">Isenção</th>
                    <th style="width:6%;">Pgto.*</th>
                    <th style="width:6%;">Usuário</th>
                    <th style="width:23%;">Nome</th>
                    <th style="width:20%;">E-mail</th>
                </thead>
            <?php
                $genericDAO = new GenericDAO;
                $transacaoDAO = new TransacaoDAO;
                $ultimasTransacoes = $genericDAO->select(
                    'Transacao', 
                    array(
                        'id',
                        'status',
                        'data_criacao',
                        'valor_total',
                        'isencao',
                        'id_user'
                    ),
                    '1=1 ORDER BY data_criacao DESC LIMIT 0, 200'
                );

                if (!is_array($ultimasTransacoes)) $ultimasTransacoes = array($ultimasTransacoes);

                $usuarioDAO = new UsuarioDAO;
                $pagamentoDAO = new PagamentoDAO;
                foreach ($ultimasTransacoes as $transacao){
                    $user = $usuarioDAO->getUserById($transacao->get('id_user'));
                    $pagamento = $pagamentoDAO->getLastPagamentoByTransacaoId($transacao->get('id'));
            ?>
                <tr>
                    <td class="right"><?=$transacao->get('id')?></td>
                    <td><?=$transacaoDAO->getTransacaoTextStatus($transacao->get('id'))?></td>
                    <td><?=$transacao->get('data_criacao')?></td>
                    <td>R$ <?=$transacao->get('valor_total')?></td>
                    <td>R$ <?=$transacao->get('isencao')?></td>
                    <td><?=($pagamento ? $pagamento->get('metodo_pagto') : "FAIL")?></td>
                    <td class="right"><?=$transacao->get('id_user')?></td>
                    <td><?=$user->get('nome')?></td>
                    <td><?=$user->get('email')?></td>
                </tr>
            <?php
                }
            ?>
            </table>
            <p class="note">* BOL = Boleto BB (nativo do sistema); PPL = PayPal; PGS = PagSeguro; DEP = Depósito Bancário; FAIL = Usuário chegou na tela de Método de Pagamento mas não prosseguiu</p>
<?php Structure::footer(); ?>
