<?php
    $usuario = Structure::verifyAdminSession();
    Structure::header();

    if (!isset($_POST['all_letters']) || is_null($_POST['all_letters']) || $_POST['all_letters'] == "") {
        // Error
    }
    $letter = $_POST['letter'];

    if (!isset($_POST['all_status']) || is_null($_POST['all_status']) || $_POST['all_status'] == "") {
        // Error
    }
    $allStatus = $_POST['all_status'];

    $usuarioDAO = new UsuarioDAO;
    $transacaoDAO = new TransacaoDAO;
    $transacaoItemDAO = new TransacaoItemDAO;

    $usuario = false;
    if ($_POST['all_letters'] == "NAO") {
        $usuarios = $usuarioDAO->selectAll(
            "Usuario", 
            "nome LIKE '$letter%' AND id IN (SELECT id_user FROM transacao WHERE status <> 0 AND status <> 3) ORDER BY nome"
        );
    } else {
        $usuarios = $usuarioDAO->selectAll(
            "Usuario", 
            "id IN (SELECT id_user FROM transacao WHERE status <> 0 AND status <> 3) ORDER BY nome"
        );
    }

    if ($usuarios) {
?>
        <h1>Listagem - <?=($_POST['all_letters'] == "SIM" ? "Todas as Letras" : $_POST['letter'])?></h1>
        <a onclick="window.print();" href="#">Imprimir</a>
        <table style="font-size:12px;">
            <thead>
                <td style="width:5%; text-align:center;">&nbsp;</td>
                <td style="width:7%; text-align:right;">Nr. Insc.</td>
                <td style="width:25%; text-align:left;">Nome</td>
                <td style="width:15%; text-align:left;">CPF</td>
                <td style="width:23%; text-align:left;">Inscrição</td>
                <td style="width:7%; text-align:center;">Aloj.</td>
                <td style="width:7%; text-align:center;">Alim.</td>
                <td style="width:7%; text-align:center;">Festa</td>
                <td style="width:14%; text-align:left;">Status</td>
            </thead>
<?php
        $count = 0;
        foreach ($usuarios as $usuario) {
            $transacoes = $transacaoDAO->selectAll(
                "Transacao", 
                "id_user = ".
                    $usuario->get('id').
                    " AND (status <> 0 OR status <> 3)"
            );

            if ($transacoes) {
                if (!is_array($transacoes)) {
                    $transacoes = array($transacoes);
                }

                foreach ($transacoes as $transacao) {
                    if ($transacao->get('status') == 1 || ($allStatus == "SIM" && $transacao->get('status') == 2)){
                        $info = $transacaoItemDAO->getInfoToPanel($transacao->get('id'));
?>                            
            <tr <?php if ($count % 2 == 0) { echo 'style="background-color: #CCCCCC;"'; } ?>>
                <td style="text-align:center;"><?=$count?></td>
                <td style="text-align:right;"><?=$transacao->get('id')?></td>
                <td style="text-align:left;"><?=$usuario->get('nome')?></td>
                <td style="text-align:left;"><?=$usuario->get('cpf')?></td>
                <td style="text-align:left;"><?=$info['nome']?></td>
                <td style="text-align:center;"><?=$info['alojamento']?></td>
                <td style="text-align:center;"><?=$info['alimentacao']?></td>
                <td style="text-align:center;"><?=$info['festas']?></td>
                <td style="text-align:left;"><?=$transacaoDAO->getTransacaoTextStatus($transacao->get('id'))?></td>
            </tr>
<?php
                        $count++;
                    }
                }
            } else {
                // Error
            }
        }
?>
            </table>
<?php
    } else {
        // Error
    }

    Structure::footer();
?>