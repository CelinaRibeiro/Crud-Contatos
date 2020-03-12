<?php
//namespace models;

class Contatos extends Model {
    
    public function getAll(){
        
        $array = array();
        
        $sql = "SELECT * FROM contatos";
        $sql = $this->db->query($sql);
        
        if ($sql->rowCount() > 0) {
            $array = $sql->fetchAll();
        }
        
        return $array;
    }
}

