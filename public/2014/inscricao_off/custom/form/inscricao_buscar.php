<?php
    $usuario = Structure::verifyAdminSession();
    Structure::header();
?>
    <h1>Inscrição > Buscar</h1>
    <h2>Ordem de busca: <em>Número do Boleto, ID da Transação, E-mail e CPF</em></h2>

    <form method="POST" action="<?=APP_URL?>/admin/action/inscricao/buscar">
        <label for="email">E-mail</label>
        <input type="email" name="email" placeholder="usuario@servidor.com.br">

        <label for="cpf">CPF</label>
        <input name="cpf" type="text" id="cpf" placeholder="999.999.999-99">
        <script>$('#cpf').mask("999.999.999-99");</script>

        <label for="id_transacao">ID da Transação</label>
        <input type="text" name="id_transacao" placeholder="90000">

        <label for="nr_boleto">Número do Boleto</label>
        <input type="text" name="nr_boleto">

        <p><input type="submit" name="buscar" value="Buscar">
    </form>

<?php Structure::footer(); ?>
