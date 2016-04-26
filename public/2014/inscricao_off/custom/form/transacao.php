<?php
    $usuario = Structure::verifyAdminSession();
    Structure::header();

    if (empty($_GET) || !isset($_GET['id']) || is_null($_GET['id']) || "" == $_GET['id']) {
        Structure::redirWithMessage("Preciso saber qual transacao mostrar, ne?", "/dashboard"); //TODO: Adicionar acento
    }

    $idTransacao = $_GET['id'];
    $transacaoDAO = new TransacaoDAO;
    $transacao = $transacaoDAO->getTransacaoById($idTransacao);

    if (!$transacao) {
        Structure::redirWithMessage("Transacao nao encontrada.", "/dashboard"); //TODO: Adicionar acento
    }

    $usuarioDAO = new UsuarioDAO;
    $transacaoUsuario = $usuarioDAO->getUserById($transacao->get('id_user'));

    if (!$transacaoUsuario) {
        Structure::redirWithMessage("Usuario nao encontrada.", "/dashboard"); //TODO: Adicionar acento
    }

    $transacaoItemDAO = new TransacaoItemDAO;
    $transacaoItems = $transacaoItemDAO->getItensByTransacaO($transacao->get('id'));
?>
    <!--h1>Transação</h1-->
    
    <article id="transacao" class="detail">
        <label class="macro">inscrito</label>
        <h1><?=$transacaoUsuario->get('nome')?></h1>
        <h2><?=$transacaoUsuario->get('email')?></h2>
        <h2><?=$transacaoUsuario->get('telefone_celular')?></h2>
        <h2><?=$transacaoUsuario->get('telefone_residencial')?></h2>
        <label class="micro">Responsável</label>
        <h3><?=$transacaoUsuario->get('responsavel_nome')?></h3>
        <h3><?=$transacaoUsuario->get('responsavel_telefone')?></h3>
        <label class="micro">Saúde</label>
        <h3><em>Deficiência:</em> <?=$transacaoUsuario->get('deficiencia')?></h3>
        <h3><em>Medicação contínua:</em> <?=$transacaoUsuario->get('medicacao_continua')?></h3>
        <h3><em>Alergias:</em> <?=$transacaoUsuario->get('alergias')?></h3>
        <h3><em>Plano de Saúde:</em> <?=$transacaoUsuario->get('plano_saude')?></h3>

        <label class="macro">inscrição</label>
        <table class="bn">
            <tr>
                <td><h2><?=$transacao->get('id')?></h2></td>
                <td><h2><?=substr($transacao->get('data_criacao'), 0, 10)?></h2></td>
                <td><h2><?=substr($transacao->get('data_criacao'), 11, 8)?></h2></td>
                <td><h2>R$ <?=$transacao->get('valor_total')?></h2></td>
                <td><h2 class="isencao">R$ <?=$transacao->get('isencao')?></h2></td>
                <td><h2 class="red"><?=$transacaoDAO->getTransacaoTextStatus($transacao->get('id'))?></h2></td>
            </tr>
            <tr>
                <td><label>nr. inscrição</label></td>
                <td><label>data</label></td>
                <td><label>hora</label></td>
                <td><label>valor total</label></td>
                <td><label>isenção</label></td>
                <td><label>status</label></td>
            </tr>
        </table>
        <label class="macro">pacotes</label>
        <table class="bn">
            <tr>
                <?php foreach ($transacaoItems as $transacaoItem) { ?>
                <?php     $isencao = $transacaoItem->get('isencao'); ?>
                <td><h2>R$ <?=$transacaoItem->get('valor_item')?><?=($isencao > 0 ? "<span class=\"isencao\"> - R$ ".$isencao."</span>" : "")?></h2></td>
                <?php } ?>
            </tr>
            <tr>
                <?php foreach ($transacaoItems as $transacaoItem) { ?>
                <td><label><?=$transacaoItem->get('desc_item')?></label></td>
                <?php } ?>
            </tr>
        </table>
        <?php if ($transacao->get('status') == 1) : ?>
        <form method="POST" action="<?=APP_URL?>/admin/action/inscricao/credenciar" class="new_submit">
            <input type="hidden" name="id" value="<?=$transacao->get('id')?>" />
            <input type="submit" name="crendeciar" value="Credenciar" />
        </form>
        <?php endif; ?>
    </article>
<?php Structure::footer(); ?>
