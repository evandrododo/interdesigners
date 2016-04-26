<?php
    $usuario = Structure::verifyAdminSession();
    
    $return = array();
    
    $valor = DataBinder::bind($_POST, "Valor");

    $valor_dao = new ValorDAO;

    if ($valor_dao->insert($valor)) :
        $return[] = array(
            "Action" => "Message",
            "Message" => "Valor cadastrado com sucesso."
        );

        $return[] = array(
            "Action" => "Redir",
            "Redir" => "/admin/valor/listar"
        );
    else :
        $return[] = array(
            "Action" => "Error",
            "Error" => "Problemas ocorreram ao cadastrar o valor."
        );

        $return[] = array(
            "Action" => "Redir",
            "Redir" => "/admin/valor/listar"
        );

    endif;

    echo json_encode($return);
?>