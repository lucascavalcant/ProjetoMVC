<?php

require 'environment.php';

define("BASE_URL", "http://localhost/ProjetoMVC");

global $config;
$config = array();

if(ENVIRONMENT == "development"){
    $config['dbName'] = 'galeria';
    $config['hostName'] = 'localhost';
    $config['dbUser'] = 'root';
    $config['dbPass'] = 'root';
}else{
    $config['dbName'] = 'galeria';
    $config['hostName'] = 'localhost';
    $config['dbUser'] = 'root';
    $config['dbPass'] = 'root';
}