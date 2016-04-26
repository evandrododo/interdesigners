<?php

// Include your customized DAOs, VOs etc. here.

    include_once("custom/vo/Isencao.php");
    include_once("custom/vo/Pagamento.php");
    include_once("custom/vo/Transacao.php");
    include_once("custom/vo/TransacaoItem.php");
    include_once("custom/vo/Usuario.php");
    include_once("custom/vo/Valor.php");

    include_once("custom/dao/IsencaoDAO.php");
    include_once("custom/dao/PagamentoDAO.php");
    include_once("custom/dao/TransacaoDAO.php");
    include_once("custom/dao/TransacaoItemDAO.php");
    include_once("custom/dao/ValorDAO.php");

    include_once("custom/classes/inscricoesNotification.php");
    include_once("custom/classes/Payment.php");

    include_once("custom/libs/openboleto/autoloader.php");
    include_once("custom/libs/PagSeguroPHPLibrary-2.2.4/PagSeguroLibrary.php");
?>