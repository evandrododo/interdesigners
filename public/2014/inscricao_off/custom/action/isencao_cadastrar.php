<?php
    include_once("app.php");
    $usuario = Structure::verifyAdminSession();
    $return = array();
    
    $isencaoDAO = new IsencaoDAO;
    $isencaoBase = new Isencao;
    $isencaoBase->set('user_email', $_POST['Isencao-user_email']);
    $isencaoBase->set('modificador', 1);

    $allfine = true;

    $pacotes = $_POST['pacotes'];
    var_dump($pacotes);

    foreach($pacotes as $pacote) {
        $novaIsencao = $isencaoBase;
        $novaIsencao->setPacote($pacote);
        
        $result = $isencaoDAO->insert($novaIsencao);

        if (!$result) {
            $allfine = false;
        }
    }

    if (!$allfine) {
        $isencaoDAO->delete("Isencao", "user_email = '".$isencaoBase->get('user_email')."'");

        $return[] = array(
            "Action" => "Error",
            "Error" => "Problemas ao inserir as isencoes." //TODO: Adicionar acento
        );
    } else {
        if (sizeof($_POST['pacotes']) > 0) {
            $return[] = array(
                "Action" => "Message",
                "Message" => "Isenções inseridas."
            );
        }

        $return[] = array(
            "Action" => "Redir",
            "Redir" => "/dashboard"
        );
    }

    echo json_encode($return);
?>