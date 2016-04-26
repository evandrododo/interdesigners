<?php
    $usuario = Structure::verifyAdminSession();
    $return = array();

    $id = $_POST['id'];

    $dao = new GenericDAO;

    if ($dao->delete("Valor", "id = $id")) :
        $return[] = array(
            "Action" => "Message",
            "Message" => "Valor excluido com sucesso." //TODO: Adicionar acento
        );

        $return[] = array(
            "Action" => "Redir",
            "Redir" => "/admin/valor/listar"
        );
    else :
        $return[] = array(
            "Action" => "Message",
            "Message" => "Problemas ao excluir o valor." //TODO: Adicionar acento
        );
    endif;

    echo json_encode($return);
?>