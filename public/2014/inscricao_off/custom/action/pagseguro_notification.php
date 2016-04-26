<?php

    $txtFile = new TxtFile("pagseguro.txt");

    foreach ($_POST as $key => $value) {
        $txtFile->appendNewLine("------");
        $txtFile->appendNewLine("key: ".$key);
        $txtFile->appendNewLine("value: ".$value);
        $txtFile->write(1);
    }

?>