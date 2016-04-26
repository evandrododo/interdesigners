<?php

class ValorDAO extends GenericDAO {

    function __contruct() {
    }
    
    public function getValorAtual($pacote) {
        
        if (!isset($pacote) || is_null($pacote)) return false;
    
        $datetime_agora = date('Y-m-d H:i:s');
        $valores = array();
        
        $result = $this->selectAll('Valor', "pacote = $pacote AND 
                                             data_limite > '$datetime_agora' AND
                                             data_inicio < '$datetime_agora'");
        
        if (!$result) return false;

        // Contagem de itens até o momento
        $transacao_item_dao = new TransacaoItemDAO;
        $count = $transacao_item_dao->getCountTransacaoItemByPacote($pacote);
        // /Contagem de itens até o momento
    
        if (!is_array($result)) {
            return $result->get('valor');
        } else {                    
            $max = 0;
            foreach ($result as $valor) {
                $max += $valor->get('qtde_maxima');
                if ($count < $max) return $valor->get('valor');
            }
        }
        
        return false;
    }
    
    public function getValorDescricaoAtual($pacote) {
    
        if (!isset($pacote) || is_null($pacote)) return false;
    
        $datetime_agora = date('Y-m-d H:i:s');
        $valores = array();
        
        $result = $this->selectAll('Valor', "pacote = $pacote AND 
                                             data_limite > '$datetime_agora' AND
                                             data_inicio < '$datetime_agora'
                                             ORDER BY id");
        
        if (!$result) return false;
        
        // Contagem de itens até o momento
        $transacao_item_dao = new TransacaoItemDAO;
        $count = $transacao_item_dao->getCountTransacaoItemByPacote($pacote);
        // /Contagem de itens até o momento
        
        if (!is_array($result)) {
            return $result->get('descricao');
        } else {
            $max = 0;
            foreach ($result as $valor) {
                $max += $valor->get('qtde_maxima');
                if ($count < $max) return $valor->get('descricao');
            }
        }
        
        return false;
    }
    
    public function isMaxReached($pacote) {
    
        if (!isset($pacote) || is_null($pacote)) return false;
    
        $datetime_agora = date('Y-m-d H:i:s');

        $valores = array();

        $result = $this->selectAll('Valor', "pacote = $pacote AND 
                                             data_limite > '$datetime_agora' AND
                                             data_inicio < '$datetime_agora'");

        if (!$result) return true;

        $max = 0;
        
        if (!is_array($result)) {
            $max += $result->get('qtde_maxima');
        } else {                    
            foreach ($result as $valor) {
                $max += $valor->get('qtde_maxima');
            }
        }

        if ($max == 0) return true;
        
        $transacao_item_dao = new TransacaoItemDAO;
        $count = $transacao_item_dao->getCountTransacaoItemByPacote($pacote);

        if ($count < $max) return false;
        
        return true;                                             
    }

    public function getValorById($id) {
        $result = $this->selectAll("Valor", "id = $id");

        if (!$result || sizeof($result) > 1) {
            return false;
        }

        return $result;
    }
}

?>
