<?php
    $usuario = Structure::verifyAdminSession();
    
    $return = array();
    
    $valor = DataBinder::bind($_POST, "Valor");

    $valor_dao = new ValorDAO;

    if ($valor_dao->update($valor, NULL, "id = ".$valor->get('id'))) :
        $return[] = array(
            "Action" => "Message",
            "Message" => "Valor editado com sucesso."
        );

        $return[] = array(
            "Action" => "Redir",
            "Redir" => "/admin/valor/listar"
        );
    else :
        $return[] = array(
            "Action" => "Error",
            "Error" => "Problemas ocorreram ao editar o valor."
        );

        $return[] = array(
            "Action" => "Redir",
            "Redir" => "/admin/valor/listar"
        );

    endif;

    echo json_encode($return);
?>