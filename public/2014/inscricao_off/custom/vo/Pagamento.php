<?php

class Pagamento extends GenericClass{

    protected static $sys_tablename = "pagamento";
    
    protected $id;
    protected $id_transacao;
    protected $data_criacao;
    protected $metodo_pagto;
    protected $info;
    protected $obs;
    
    protected $sys_type = array(
        'id' => 'int',
        'id_transacao' => 'int',
        'data_criacao' => 'int',
        'metodo_pagto' => 'str',
        'info' => 'str',
        'obs' => 'str'
    );

    public static function tablename() {
        return self::$sys_tablename;
    }
   
}

?>