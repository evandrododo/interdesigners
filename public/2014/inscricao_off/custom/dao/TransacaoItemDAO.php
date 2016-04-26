<?php

class TransacaoItemDAO extends GenericDAO {

    function __contruct() {
    }
    
    public function getItensByTransacao($id_transacao) {
        $result = $this->selectAll('TransacaoItem', "id_transacao = $id_transacao");
        
        if (!$result) return false;
        
        return $result;
    }
    
    public function getInfoToPanel($id_transacao) {
        $result = $this->selectAll('TransacaoItem', "id_transacao = $id_transacao");
        if ($result && !is_array($result)) {
            $result = array($result);
        }
        
        $infos = array();
        
        $infos['alojamento'] = '';
        $infos['alimentacao'] = '';
        $infos['festas'] = '';
        
        foreach ($result as $item) {
            if ($item->get('id_item') == 0) {
                $infos['nome'] = $item->get('desc_item');
            }
            
            if ($item->get('id_item') == 1) {
                $infos['alojamento'] = 'X';
            }
            
            if ($item->get('id_item') == 2) {
                $infos['alimentacao'] = 'X';
            }
            
            if ($item->get('id_item') == 3) {
                $infos['festas'] = 'X';
            }
        }
        
        if (!isset($infos['nome'])) {
            $infos['nome'] = "Pacote(s) Avulso(s)";
        }

        $infos['id_transacao'] = $id_transacao;
        
        return $infos;
    }
    
    public function getCountTransacaoItemByPacote($pacote) {
        $sql = "SELECT COUNT(*) FROM transacao_item tranItem
                JOIN transacao tran ON tran.id = tranItem.id_transacao
                WHERE
                    tran.status != 3 AND
                    tranItem.id_item = $pacote";

        $dbstuff = new DBStuff;
        
        $rs = $dbstuff->execute($sql); //executa a string
        
        if ($rs) { //se nao der erro
            $row = mysql_fetch_row($rs); //pega a linha
            return $row[0]; //retorna a soma
        }

        return 0;
    }

    public function getCountTransacaoItemConfirmedByPacote($pacote) {
        $sql = "SELECT COUNT(*) FROM transacao_item tranItem
                JOIN transacao tran ON tran.id = tranItem.id_transacao
                WHERE
                    (tran.status = 1 OR tran.status = 2) AND
                    tranItem.id_item = $pacote";

        $dbstuff = new DBStuff;
        
        $rs = $dbstuff->execute($sql); //executa a string
        
        if ($rs) { //se nao der erro
            $row = mysql_fetch_row($rs); //pega a linha
            return $row[0]; //retorna a soma
        }

        return 0;
    }

    public function usuarioHasPacote($usuario_id, $pacote) {
        $sql = "SELECT COUNT(traIte.id) FROM transacao_item traIte
                JOIN transacao tra ON tra.id = traIte.id_transacao
                WHERE
                    tra.status != 3 AND
                    tra.id_user = $usuario_id AND
                    traIte.id_item = $pacote";
        
        $dbstuff = new DBStuff;
        $rs = $dbstuff->execute($sql);

        if ($rs) {
            $row = mysql_fetch_row($rs);
            if ($row[0] > 0) {
                return true;
            }
        }
        return false;
    }

    public function deleteTransacaoItemByTransacaoId($id_transacao) {
        return $this->delete('TransacaoItem', "id_transacao = $id_transacao");
    }
}

?>
