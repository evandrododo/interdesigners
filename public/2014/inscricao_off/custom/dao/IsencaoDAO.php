<?php

class IsencaoDAO extends GenericDAO {

    function __contruct() {
    }
    
    public function getIsencoes($user_email) {
        if (!isset($user_email) || is_null($user_email))
            return false;

        $valor_dao = new ValorDAO;
        $isencoes = array();
        
        $result = $this->selectAll('Isencao',"user_email = '$user_email'");
        if ($result) {
            if (!is_array($result)) {
                $result = array($result);
            }
            
            foreach ($result as $isencao) {
                $pacote = $isencao->get('pacote');
                $isencoes[$pacote] = $valor_dao->getValorAtual($pacote) * $this->getIsencaoModifier($user_email, $pacote);
            }
        }
        
        if (sizeof($isencoes) > 0) {
            return $isencoes;
        }
        
        return false;
    }
    
    public function getIsencaoTotal($user_email) {
        $isencao_total = 0;
        
        $isencoes = $this->getIsencoes($user_email);
        if ($isencoes) {
            foreach ($isencoes as $pacote => $valor) {
                $isencao_total += $valor;
            }
        }
        
        return $isencao_total;
    }
    
    public function hasIsencao($user_email, $pacote) {
        $result = $this->selectAll('Isencao',"user_email = '$user_email' AND pacote = $pacote");
        
        if ($result) return true;
        
        return false;
    }


    public function getIsencaoModifier($user_email, $pacote) {
        $result = $this->selectAll("Isencao", "user_email = '$user_email' AND pacote = $pacote");
        
        if (!$result) return false;

        $modificador = -1;
        if (is_array($result)) {
            foreach ($result as $isencao) {
                if ($isencao->get('modificador') > $modificador) {
                    $modificador = $isencao->get('modificador');
                }
            }
        } else {
            if ($result->get('modificador') > $modificador) {
                $modificador = $result->get('modificador');
            }
        }

        if ($modificador == -1) {
            return false;
        }

        return $modificador;
    }
}

?>