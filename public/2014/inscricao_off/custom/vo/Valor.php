<?php

class Valor extends GenericClass{

    protected static $sys_tablename = "valor";
    
    protected $id;
    protected $pacote;
    protected $descricao;
    protected $data_inicio;
    protected $data_limite;
    protected $qtde_maxima;
    protected $valor;
    
    protected $sys_type = array(
        'id' => 'int',
        'pacote' => 'int',
        'descricao' => 'str',
        'data_inicio' => 'str',
        'data_limite' => 'str',
        'qtde_maxima' => 'int',
        'valor' => 'float'
    );

    public static function tablename() {
        return self::$sys_tablename;
    }
}

?>
