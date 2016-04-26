<?php

class PagamentoDAO extends GenericDAO {

    function __contruct() {
    }
    
    public function getPagamentoByTransacaoId($id_transacao) {
        $result = $this->selectAll("Pagamento", "id_transacao = $id_transacao");
        
        if (!$result) return false;
        
        if (!is_array($result)) return array($result);
        
        return $result;
    }

    public function getLastPagamentoByTransacaoId($id_transacao) {
        $pagamento = $this->getPagamentoByTransacaoId($id_transacao);

        if ($pagamento) {
            $pagamento = $pagamento[sizeof($pagamento) - 1];
        }

        return $pagamento;
    }
    public function getPagamentoByInfo($info) {
        $pagamentos = $this->selectAll("Pagamento", "obs LIKE '%$info%'");

        return $pagamentos;
    }
}

?>
