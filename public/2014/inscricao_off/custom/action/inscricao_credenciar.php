<?php
    include_once("app.php");
    $usuario = Structure::verifyAdminSession();
    $return = array();

    if (!isset($_POST['id']) || is_null($_POST['id']) || $_POST['id'] == "") {
        $return[] = array(
            "Action" => "Error",
            "Error" => "Problemas ao credenciar a inscrição. Tente novamente mais tarde."
        );
    } else {
        $idTransacao = $_POST['id'];

        $transacaoDAO = new TransacaoDAO;

        $transacao = $transacaoDAO->selectAll("Transacao", "id = $idTransacao");
        $transacao->set('status', 2);

        $resultUpdate = $transacaoDAO->updateWithFields($transacao, array("status"), "id = $idTransacao");

        if ($resultUpdate) {
            $return[] = array(
                "Action" => "Message",
                "Message" => "Inscrição credenciada com sucesso."
            );

            $return[] = array(
                "Action" => "Redir",
                "Redir" => "/admin/inscricao/buscar"
            );
        } else {
            $return[] = array(
                "Action" => "Error",
                "Error" => "Problemas ao credenciar a inscrição. Tente novamente mais tarde."
            );
        }
    }

    echo json_encode($return);
?>