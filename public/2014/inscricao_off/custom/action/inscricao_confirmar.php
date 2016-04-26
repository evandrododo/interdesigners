<?php
    include_once("app.php");
    $usuario = Structure::verifyAdminSession();
    $return = array();

    // verifica se o ID tá setado

    $idTransacao = $_POST['id'];

    $transacaoDAO = new TransacaoDAO;

    $transacao = $transacaoDAO->selectAll("Transacao", "id = $idTransacao");
    $transacao->set('status', 1);

    $resultUpdate = $transacaoDAO->updateWithFields($transacao, array("status"), "id = $idTransacao");

    if ($resultUpdate) {
        $return[] = array(
            "Action" => "Message",
            "Message" => "Inscrição confirmada com sucesso."
        );

        $return[] = array(
            "Action" => "Redir",
            "Redir" => "/dashboard"
        );
    } else {
        $return[] = array(
            "Action" => "Error",
            "Error" => "Problemas ao confirmar inscrição. Tente novamente mais tarde."
        );
    }

    echo json_encode($return);
?>