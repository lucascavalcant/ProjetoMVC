<?php

class Model {

    protected $db;

    public function __construct(){
        try {
            global $config;
            $this->db = new PDO("mysql:dbname=".$config['dbName'].";host=".$config['hostName'], $config['dbUser'], $config['dbPass']);
        }catch (PDOException $e){
            echo "Ocorreu um erro! <br> ERROR MESSAGE: ".$e->getMessage();
        }
    }

}