<?php

class Isencao extends GenericClass{

    protected static $sys_tablename = "isencao";
    
    protected $id;
    protected $user_email;
    protected $pacote;
    protected $modificador;

    protected $sys_type = array(
        'id' => 'int',
        'user_email' => 'str',
        'pacote' => 'int',
        'modificador' => 'float'
    );

    public static function tablename() {
        return self::$sys_tablename;
    }
}

?>