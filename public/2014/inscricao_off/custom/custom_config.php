<?php
    
    // Defines if blacklist is going to work as blacklist or if it's going to work as whitelist
    define('BLACKLIST', 1);

    // PAYMENTS
    define('PAY_BOLETO', false);
    define('PAY_PAYPAL', false);
    define('PAY_PAGSEGURO', true);
    define('PAY_DEPOSITO', false);
    

    // BOLETO
    define('BANCO', '');
    define('VENCIMENTO', '');
    define('AGENCIA', '');
    define('CARTEIRA', '');
    define('CONTA', '');
    define('CONVENIO', '');
    define('CEDENTE_NOME', '');
    define('CEDENTE_NR_DOCUMENTO', '');
    define('CEDENTE_ENDERECO', '');
    define('CEDENTE_CEP', '');
    define('CEDENTE_CIDADE', '');
    define('CEDENTE_ESTADO', '');
    
    // PAYPAL
    define('PAYPAL_EMAIL', '');
    define('PAYPAL_ITEM_NAME', '');

    // PAGSEGURO
    define('PAGSEGURO_EMAIL', 'interdesignersunesp@gmail.com');
    define('PAGSEGURO_TOKEN', '7AA9E6C0AFE0474EB2C18F5B8D941095');
    define('PAGSEGURO_MULTIPLIER', 1.00);
    define('PAGSEGURO_MULTIPLIER_LABEL', "0%");

    // DEPOSITO
    define('DEPOSITO_EMAIL', '');
    define('DEPOSITO_BANCO', '');
    define('DEPOSITO_NOME', '');
    define('DEPOSITO_CPF', '');
    define('DEPOSITO_AGENCIA', '');
    define('DEPOSITO_CONTA', '');    


?>
