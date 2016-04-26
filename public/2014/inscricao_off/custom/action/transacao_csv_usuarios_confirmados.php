<?php
    $usuario = Structure::verifyAdminSession();
    Structure::header();

    echo "<h1>Transações > CSV dos Usuários Confirmados</h1>";

    $transacaoDAO = new TransacaoDAO;
    $transacoes = $transacaoDAO->selectAll("Transacao", "status = 2");

    $usuarioDAO = new UsuarioDAO;
    foreach ($transacoes as $transacao) {
        $usuario = $usuarioDAO->getUserById($transacao->get('id_user'));
        echo "<p>\"".$usuario->get('nome')."\",\"".$usuario->get('email')."\"</p>";
    }

    Structure::footer();
?>