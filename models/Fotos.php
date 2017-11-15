<?php

class Fotos extends Model {

    public function getFotos(){
        $array = array();

        $sql = "SELECT * FROM fotos";
        $sql = $this->db->query($sql);

        if($sql->rowCount() >= 1){
            $array = $sql->fetchAll();
        }

        return $array;
    }


}