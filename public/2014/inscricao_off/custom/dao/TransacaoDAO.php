<?php

class TransacaoDAO extends GenericDAO {

    function __contruct() {
    }
    
    public function getCountTransacao() {
        $result = $this->selectCount("Transacao", "id", "isencao = 0");
        
        $count = 0;
        
        if (!$result)
            return 0;

        $count = $result;
        
        return $count;
    }
    
    public function getTransacaoByUser($id_user) {
        $result = $this->selectAll("Transacao", "id_user = $id_user");
        
        if (!$result) return false;
        
        if (!is_array($result)) return array($result);
        
        return $result;
    }

    public function getTransacaoTextStatus($id_transacao) {
        $result = $this->select("Transacao", array('status'), "id = $id_transacao");

        if (!$result || sizeof($result) > 1) return false;

        switch ($result->get('status')) {
            case 0: return "Aguardando Confirmação Pgto.";
            case 1: return "Pgto. Confirmado";
            case 2: return "Credenciado";
            case 3: return "Cancelada";
        }
    }

    public function transacaoHasPacote($id_transacao, $id_pacote) {
        $result = $this->selectAll("TransacaoItem", "id_transacao = $id_transacao AND id_item = $id_pacote");

        if (!$result || sizeof($result) == 0) return false;
        
        if (is_array($result)) $result = $result[0];

        return $result;
    }

    public function getTransacaoById($id_transacao) {
        return $this->selectAll("Transacao", "id = $id_transacao");
    }

    public function deleteTransacaoById($id_transacao) {
        return $this->delete('Transacao', "id = $id_transacao");
    }

    public function getIsencaoTransacaoByUser($id_usuario) {
        $result = $this->selectSum("Transacao", "isencao", "id_user = $id_usuario AND status != 3");

        return $result;
    }
}

?>
