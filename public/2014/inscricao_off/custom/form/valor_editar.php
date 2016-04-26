<?php
    $usuario = Structure::verifyAdminSession();
    Structure::header();

    if (!array_key_exists('id', $_GET)) {
        Structure::redirWithMessage("Tenho que saber qual valor editar, né?", "/valor/listar");
    }

    $valor_dao = new ValorDAO;
    $valor = $valor_dao->getValorById($_GET['id']);
?>

                <form method="POST" action="<?=APP_URL?>/admin/action/valor/editar" class="new_submit">
                    <h1>Valor > Cadastrar</h1>

                    <input type="hidden" name="Valor-id" id="id" value="<?=$valor->get('id')?>">

                    <label for="Valor-pacote">Pacote</label>
                    <select name="Valor-pacote" id="pacote">
                        <option value="0"<?=$valor->get('pacote') == 0 ? " selected" : ""?>>Inscrição Básica</option>
                        <option value="1"<?=$valor->get('pacote') == 1 ? " selected" : ""?>>Alojamento</option>
                        <option value="2"<?=$valor->get('pacote') == 2 ? " selected" : ""?>>Alimentação</option>
                        <option value="3"<?=$valor->get('pacote') == 3 ? " selected" : ""?>>Festas</option>
                    </select>
                                            
                    <label for="Valor-descricao">Descrição</label>
                    <input name="Valor-descricao" type="text" id="descricao" placeholder="1o lote" required="required" value="<?=$valor->get('descricao')?>">
                
                    <label for="Valor-data_inicio">Data Início</label>
                    <input name="Valor-data_inicio" type="text" id="data_inicio" placeholder="9999-99-99 99:99:99" required="required" value="<?=$valor->get('data_inicio')?>">

                    <label for="Valor-data_limite">Data Limite</label>
                    <input name="Valor-data_limite" type="text" id="data_limite" placeholder="9999-99-99 99:99:99" required="required" value="<?=$valor->get('data_limite')?>">

                    <label for="Valor-qtde_maxima">Quantidade Máxima</label>
                    <input name="Valor-qtde_maxima" type="number" id="qtde_maxima" required="required" value="<?=$valor->get('qtde_maxima')?>">

                    <label for="Valor-valor">Valor (em R$)</label>
                    <input name="Valor-valor" type="number" id="valor" required="required" value="<?=$valor->get('valor')?>">

                    <p><input type="submit" value="Salvar" /></p>

                </form>
<?php Structure::footer(); ?>
