<?php

class Transacao extends GenericClass{

    protected static $sys_tablename = "transacao";
    
    protected $id;
    protected $id_user;
    protected $valor_total;
    protected $data_criacao;
    protected $isencao;
    protected $status;
    
    protected $sys_type = array(
        'id' => 'int',
        'id_user' => 'int',
        'valor_total' => 'float',
        'data_criacao' => 'str',
        'isencao' => 'int',
        'status' => 'int'
    );

    public static function tablename() {
        return self::$sys_tablename;
    }
   
}

?>