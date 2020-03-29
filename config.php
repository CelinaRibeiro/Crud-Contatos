<?php
require 'environment.php';

$config = array();
if (ENVIRONMENT == 'development') {
    define("BASE_URL", "http://localhost/workspace/mod16ProjCrudOoMvc/");
    $config['dbname'] = 'projeto_crud_oo_mvc';
    $config['host'] = 'localhost';
    $config['dbuser'] = 'root';
    $config['dbpass'] = '';
}else{
    define("BASE_URL", "http://meusite.com.br/");
    $config['dbname'] = 'projeto_crud_oo_mvc';
    $config['host'] = 'localhost';
    $config['dbuser'] = 'root';
    $config['dbpass'] = '';
}

global $db;
try {
    $db = new PDO("mysql:dbname=".$config['dbname'].";host=".$config['host'], $config['dbuser'], $config['dbpass']);
} catch (PDOException $e) {
    echo "ERRO ".$e->getMessage();
    exit();
}
?>