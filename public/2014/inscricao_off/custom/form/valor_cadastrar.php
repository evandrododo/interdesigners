<?php
    $usuario = Structure::verifyAdminSession();
    Structure::header();
?>

                <form method="POST" action="<?=APP_URL?>/admin/action/valor/cadastrar" class="new_submit">
                    <h1>Valor > Cadastrar</h1>

                    <label for="Valor-pacote">Pacote</label>
                    <select name="Valor-pacote" id="pacote">
                        <option value="0">Inscrição Básica</option>
                        <option value="1">Alojamento</option>
                        <option value="2">Alimentação</option>
                        <option value="3">Festas</option>
                    </select>
                                            
                    <label for="Valor-descricao">Descrição</label>
                    <input name="Valor-descricao" type="text" id="descricao" placeholder="1o lote" required="required">
                
                    <label for="Valor-data_inicio">Data Início</label>
                    <input name="Valor-data_inicio" type="text" id="data_inicio" placeholder="9999-99-99 99:99:99" required="required">

                    <label for="Valor-data_limite">Data Limite</label>
                    <input name="Valor-data_limite" type="text" id="data_limite" placeholder="9999-99-99 99:99:99" required="required">

                    <label for="Valor-qtde_maxima">Quantidade Máxima</label>
                    <input name="Valor-qtde_maxima" type="number" id="qtde_maxima" required="required">

                    <label for="Valor-valor">Valor (em R$)</label>
                    <input name="Valor-valor" type="number" id="valor" required="required">

                    <p><input type="submit" value="Cadastrar" /></p>

                </form>
<?php Structure::footer(); ?>
