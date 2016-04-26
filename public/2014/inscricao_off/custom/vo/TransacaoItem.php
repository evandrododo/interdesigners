<?php

class TransacaoItem extends GenericClass{

    protected static $sys_tablename = "transacao_item";
    
    protected $id;
    protected $id_transacao;
    protected $id_item;
    protected $desc_item;
    protected $valor_item;
    protected $isencao;

    protected $sys_type = array(
        'id' => 'int',
        'id_transacao' => 'int',
        'id_item' => 'int',
        'desc_item' => 'str',
        'valor_item' => 'float',
        'isencao' => 'int'
    );

    public static function tablename() {
        return self::$sys_tablename;
    }
}

?>