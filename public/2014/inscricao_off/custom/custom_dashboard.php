<?php
    $usuario = Structure::verifySession();  
    Structure::header();

    $usu_id = $usuario->get('id');
    $tra_ite_dao = new TransacaoItemDAO;
?>

                <p><strong>Caros encontristras</strong>,<br />Informamos que o não comparecimento ao evento, após quitado o valor da inscrição, não implica na devolução desse valor, em qualquer hipótese.</p>

                <h2>Inscrições</h2>
                <?php
                    $transacao_dao = new TransacaoDAO;
                    $transacao_item_dao = new TransacaoItemDAO;

                    $transacoes = $transacao_dao->getTransacaoByUser($usuario->get('id'));

                    if ($transacoes) :
                        $apareceu_pagamento = false;
                ?>
                <table id="transacoes">
                    <thead>
                        <th class="right" style="width:10%;">Nr. Inscr.</th>
                        <th class="left" style="width:25%;">Inscrição</th>
                        <th class="center" style="width:12%;">Alojamento</th>
                        <th class="center" style="width:12%;">Alimentação</th>
                        <th class="center" style="width:10%;">Festas</th>
                        <th class="left" style="width:20%;">Status</th>
                        <th class="left" style="width:11%;">Pagamento</th>
                    </thead>
                <?php foreach ($transacoes as $transacao) { 
                    $insc_basica_item = $transacao_dao->transacaoHasPacote($transacao->get('id'), 0);
                    
                    $pagamento_metodo = NULL;
                    $pagamento_info = NULL;
                    $pagamento_dao = new PagamentoDAO;
                    $pagamento = $pagamento_dao->getLastPagamentoByTransacaoId($transacao->get('id'));
                    
                    if($pagamento) {
                        $pagamento_metodo = $pagamento->get('metodo_pagto');
                        $pagamento_info = $pagamento->get('info');
                    }
                ?>
                    
                    <tr>
                        <td class="right"><?=$transacao->get('id')?></td>
                        <td><?=(!$insc_basica_item ? "Pacote(s) Avulso(s)" : $insc_basica_item->get('desc_item'))?></td>
                        <td class="center"><?=($transacao_dao->transacaoHasPacote($transacao->get('id'), 1) ? "X" : "")?></td>
                        <td class="center"><?=($transacao_dao->transacaoHasPacote($transacao->get('id'), 2) ? "X" : "")?></td>
                        <td class="center"><?=($transacao_dao->transacaoHasPacote($transacao->get('id'), 3) ? "X" : "")?></td>
                        <td><?=$transacao_dao->getTransacaoTextStatus($transacao->get('id'))?></td>
                        <td><?php 
                            if ($transacao->get('status') == 0) {
                                if ($pagamento_metodo == 'BOL') {
                                    echo '<a target="_blank" href="'.$pagamento->get('info').'">Boleto</a>';
                                    echo '<br /><a style="font-size:9px;" href="'.APP_URL.'/metodo_pagamento?late=1&id='.$transacao->get('id').'">Mudar pagamento*</a>';
                                    $apareceu_pagamento = true;
                                } else if ($pagamento_metodo == 'PPL') {
                                    echo 'PayPal';
                                    echo '<br /><a style="font-size:9px;" href="'.APP_URL.'/metodo_pagamento?late=1&id='.$transacao->get('id').'">Mudar pagamento*</a>';
                                    $apareceu_pagamento = true;
                                } else if ($pagamento_metodo == 'PGS') {
                                    echo '<a target="_blank" href="'.$pagamento->get('info').'">PagSeguro</a>';
                                    echo '<br /><a style="font-size:9px;" href="'.APP_URL.'/metodo_pagamento?late=1&id='.$transacao->get('id').'">Mudar pagamento*</a>';
                                    $apareceu_pagamento = true;
                                } else if ($pagamento_metodo == 'DEP') {
                                    echo 'Depósito';
                                    echo '<br /><a style="font-size:9px;" href="'.APP_URL.'/metodo_pagamento?late=1&id='.$transacao->get('id').'">Mudar pagamento*</a>';
                                    $apareceu_pagamento = true;
                                } else if ($transacao->get('valor_total') != $transacao->get('isencao')){
                                    echo '<a href="'.APP_URL.'/metodo_pagamento?late=1&id='.$transacao->get('id').'">Pagar</a>';
                                }
                            }
                        ?></td>
                    </tr>
                <?php } ?>
                </table>
                    <?php if ($apareceu_pagamento) : ?>
                    <p class="note">* Caso você já tenha efetuado o pagamento, aguarde a confirmação do mesmo. Utilize esse link apenas caso necessite mudar o método de pagamento.
                    <br />Caso haja duplo (ou múltiplos) pagamento(s), o fato deverá ser comprovado no credenciamento e será devolvido o valor dos pagamentos excedentes, subitraídas as taxas de manutenção.</p>
                    <?php endif; ?>
                <?php endif; ?>

                <?php 
                    $valor_dao = new ValorDAO;

                    if ($valor_dao->isMaxReached(0) &&
                        ($valor_dao->isMaxReached(1) &&
                        $valor_dao->isMaxReached(2) &&
                        $valor_dao->isMaxReached(3))) :
                 ?>
                    <p class="inscrevase">As inscrições estão fechadas no momento</p>
                <?php elseif ($tra_ite_dao->usuarioHasPacote($usu_id, 0) || $tra_ite_dao->usuarioHasPacote($usu_id, 1) && $tra_ite_dao->usuarioHasPacote($usu_id, 2) && $tra_ite_dao->usuarioHasPacote($usu_id, 3)) : ?>
                <?php //elseif ($tra_ite_dao->usuarioHasPacote($usu_id, 0) && $tra_ite_dao->usuarioHasPacote($usu_id, 1) && $tra_ite_dao->usuarioHasPacote($usu_id, 2) && $tra_ite_dao->usuarioHasPacote($usu_id, 3)) : ?>
                    <h3>Você já possui transações ativas de todos os pacotes.</h3>
                <?php // elseif ($tra_ite_dao->usuarioHasPacote($usu_id, 0) && (!$tra_ite_dao->usuarioHasPacote($usu_id, 1) || !$tra_ite_dao->usuarioHasPacote($usu_id, 2) && !$tra_ite_dao->usuarioHasPacote($usu_id, 3))): ?>
                    <!--p class="inscrevase"><a href="<?=APP_URL?>/pacotes">Adquirir pacotes</a-->
                <?php else : ?>
                    <p class="inscrevase"><a href="<?=APP_URL?>/pacotes">Faça sua inscrição</a>
                <?php endif; ?>
