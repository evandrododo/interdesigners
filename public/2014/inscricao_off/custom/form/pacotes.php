<?php

    $usuario = Structure::verifySession();
    $usu_email = $usuario->get('email');
    $usu_id = $usuario->get('id');
    
    $val_dao = new ValorDAO;
    if ($val_dao->isMaxReached(0) &&
        ($val_dao->isMaxReached(1) &&
        $val_dao->isMaxReached(2) &&
        $val_dao->isMaxReached(3))) {
        Structure::redirWithMessage("Lote finalizado. Inscricoes encerradas.", "/dashboard"); //TODO: Adicionar acento
    }

    $ise_dao = new IsencaoDAO;
    $tra_dao = new TransacaoDAO;
    $tra_ite_dao = new TransacaoItemDAO;

    function getValorAtual($pacote) {
        $val_dao = new ValorDAO;
        $result = $val_dao->getValorAtual($pacote);
        if (!$result) {
            Structure::redirWithMessage("Ocorreram problemas. Por favor, tente novamente","/dashboard");
        }
        return $result;
    }
    
    function getValorDescricaoAtual($pacote) {
        $val_dao = new ValorDAO;
        $result = $val_dao->getValorDescricaoAtual($pacote);
        if (!$result) {
            Structure::redirWithMessage("Ocorreram problemas. Por favor, tente novamente","/dashboard");
        }
        return $result;
    }
    
    Structure::header();
    
?>
                <h1>Inscrições</h1>
                <?php if ($tra_ite_dao->usuarioHasPacote($usu_id, 0) && $tra_ite_dao->usuarioHasPacote($usu_id, 1) && $tra_ite_dao->usuarioHasPacote($usu_id, 2) && $tra_ite_dao->usuarioHasPacote($usu_id, 3)) : ?>
                    <h3>Você já possui transações ativas de todos os pacotes.</h3>
                <?php else : ?>

                <p><strong>Caros encontristras</strong>,<br />Informamos que o não comparecimento ao evento, após quitado o valor da inscrição, não implica na devolução desse valor, em qualquer hipótese.</p>
                <form onsubmit="return validateStep3();" action="<?=APP_URL?>/metodo_pagamento" method="POST">
                    <ul id="package_selection">
                    <?php $pelomenosum = false; //TODO: Resolver essa variável (usada antigamente para saber se tinha pacotes a serem comprados ?>
                    <?php $pre_checked_value = 0; ?>
                        <?php //TODO: Criar checkboxes por iteração ?>
                        <!-- ------------------------------------------------- -->
                        <?php if (($ise_dao->hasIsencao($usu_email, 0) && !$tra_ite_dao->usuarioHasPacote($usu_id, 0)) || (!$val_dao->isMaxReached(0) && !$tra_ite_dao->usuarioHasPacote($usu_id, 0))) : $pelomenosum = true; ?>
                        <?php     if ($ise_dao->hasIsencao($usu_email, 0)) $pre_checked_value += (getValorAtual(0) * (1 - $ise_dao->getIsencaoModifier($usu_email, 0))); ?>
                        <li>
                            <input type="checkbox" name="pacotes[]" id="inscricao_basica" value="0" package_value="<?=getValorAtual(0)?>" <?=($ise_dao->hasIsencao($usu_email, 0) ? 'checked="true" disabled="true"' : '')?>>
                            <!-- <label for="inscricao_basica">Inscrição básica - <?=getValorDescricaoAtual(0)?> - R$ <strong><?=getValorAtual(0);?></strong></label> -->
                            <label for="inscricao_basica"><?=getValorDescricaoAtual(0)?> - R$ <strong><?=getValorAtual(0);?></strong></label>
                        </li>
                        <?php endif; ?>
                        <!-- ------------------------------------------------- -->
                        <?php if (($ise_dao->hasIsencao($usu_email, 1) && !$tra_ite_dao->usuarioHasPacote($usu_id, 1)) || (!$val_dao->isMaxReached(1) && !$tra_ite_dao->usuarioHasPacote($usu_id, 1))) : $pelomenosum = true; ?>
                        <?php     if ($ise_dao->hasIsencao($usu_email, 1)) $pre_checked_value += (getValorAtual(1) * (1 - $ise_dao->getIsencaoModifier($usu_email, 1))); ?>
                        <li>
                            <input type="checkbox" name="pacotes[]" id="alojamento" value="1" package_value="<?=getValorAtual(1)?>" <?=($ise_dao->hasIsencao($usu_email, 1) ? 'checked="true" disabled="true"' : ($tra_ite_dao->usuarioHasPacote($usu_id, 1) ? 'disabled = "true"' : '')) ?>>
                            <label for="alojamento">Alojamento - R$ <strong><?=getValorAtual(1)?></strong></label>
                        </li>
                        <?php endif; ?>
                        <!-- ------------------------------------------------- -->
                        <?php if (($ise_dao->hasIsencao($usu_email, 2) && !$tra_ite_dao->usuarioHasPacote($usu_id, 2)) || (!$val_dao->isMaxReached(2) && !$tra_ite_dao->usuarioHasPacote($usu_id, 2))) : $pelomenosum = true; ?>
                        <?php     if ($ise_dao->hasIsencao($usu_email, 2)) $pre_checked_value += (getValorAtual(2) * (1 - $ise_dao->getIsencaoModifier($usu_email, 2))); ?>
                        <li>
                            <input type="checkbox" name="pacotes[]" id="alimentacao" value="2" package_value="<?=getValorAtual(2)?>" <?=($ise_dao->hasIsencao($usu_email, 2) ? 'checked="true" disabled="true"' : ($tra_ite_dao->usuarioHasPacote($usu_id, 2) ? 'disabled = "true"' : '')) ?>>
                            <label for="alimentacao">Alimentação - R$ <strong><?=getValorAtual(2)?></strong></label>
                        </li>
                        <?php endif; ?>
                        <!-- ------------------------------------------------- -->
                        <?php if (($ise_dao->hasIsencao($usu_email, 3) && !$tra_ite_dao->usuarioHasPacote($usu_id, 3)) || (!$val_dao->isMaxReached(3) && !$tra_ite_dao->usuarioHasPacote($usu_id, 3))) : $pelomenosum = true; ?>
                        <?php     if ($ise_dao->hasIsencao($usu_email, 3)) $pre_checked_value += (getValorAtual(3) * (1 - $ise_dao->getIsencaoModifier($usu_email, 3))); ?>
                        <li>
                            <input type="checkbox" name="pacotes[]" id="festas" value="3" package_value="<?=getValorAtual(3)?>" <?=($ise_dao->hasIsencao($usu_email, 3) ? 'checked="true" disabled="true"' : ($tra_ite_dao->usuarioHasPacote($usu_id, 3) ? 'disabled = "true"' : '')) ?>>
                            <label for="festas">Festas - R$ <strong><?=getValorAtual(3)?></strong></label>
                        </li>
                        <?php endif; ?>
                    </ul>
                    <script>
                        $('ul#package_selection li input[type="checkbox"]').change(function(){
                            var package_value = parseFloat($(this).attr('package_value'));
                            var final_value = parseFloat($('#valor_final').html());
                            
                            <?php if (!$tra_ite_dao->usuarioHasPacote($usu_id, 0)) : ?>
                            if (!$('#inscricao_basica').is(':checked')) {
                                $('#alojamento').attr('disabled', 'true');
                                $('#alojamento').removeAttr('checked');
                                $('#alimentacao').attr('disabled', 'true');
                                $('#alimentacao').removeAttr('checked');
                                $('#festas').attr('disabled', 'true');
                                $('#festas').removeAttr('checked');
                                package_value = 0;
                                final_value = 0;
                            } else {
                                $('#alojamento').removeAttr('disabled');
                                $('#alimentacao').removeAttr('disabled');
                                $('#festas').removeAttr('disabled');
                            }
                            <?php endif; ?>

                            if ($(this).is(':checked')) {
                                final_value += package_value;
                            } else {
                                final_value -= package_value;
                            }

                            $('#valor_final').html(final_value);
                        });
                    </script>
                                        
                    <?php
                         $isencao_total = $ise_dao->getIsencaoTotal($usuario->get('email'));
                         $isencao_already_used =  $tra_dao->getIsencaoTransacaoByUser($usuario->get('id'));

                         if ($isencao_already_used) {
                            $isencao_total -= $isencao_already_used;
                         }

                         if ($isencao_total > 0) {
                            echo "<h3>Isenção: R$ <strong><span id=\"isencao\">$isencao_total</span></strong></h3>";
                            echo "<p class='isencao' style=\"color: #ff0000;\">Você possui isenção!</br>No dia do credenciamento, leve um cheque-caução no valor R$ $isencao_total</p>";
                        }
                        
                    ?>
                     <h3>Total: R$ <strong id="_value"><span id="valor_final"><?=$pre_checked_value?></span></strong></h3>
                    <p><input type="submit" id="submit" value="Comprar"></p>
                </form>
                <?php endif; ?>
<?php Structure::footer(); ?>
