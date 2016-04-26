<?php
    $usuario = Structure::verifyAdminSession();

    $cancelamento = "P5D";

    $transacaoDAO = new TransacaoDAO;

    $transacoes = $transacaoDAO->selectAll('Transacao', 'status = 0');
    if ($transacoes && !is_array($transacoes)) {
        echo "<Nao eh array.";
        $transacoes = array($transacoes);
    }
    echo "<p>Tamanho: ".sizeof($transacoes)."</p>";

    foreach ($transacoes as $transacao) {
        $limitDate = new DateTime('now');

        $transactionStrDate = $transacao->get('data_criacao');
        $transactionDate = new DateTime();

        $transactionDate->setDate(substr($transactionStrDate, 0, 4), substr($transactionStrDate, 5, 2), substr($transactionStrDate, 8 ,2));
        $transactionDate->setTime(substr($transactionStrDate, 11, 2), substr($transactionStrDate, 14, 2), substr($transactionStrDate, 17 ,2));

        $transactionDate->add(new DateInterval($cancelamento));

        if ($transactionDate < $limitDate) {
            $transacao->set('status', 3);

            if ($transacaoDAO->updateWithFields($transacao, array('status'), 'id = '.$transacao->get('id'))) {
                echo "<p>Transacao ID ".$transacao->get('id')." (".$transacao->get('data_criacao')."): Cancelada</p>";
            }
        }
    }
?>