<?php
require 'environment.php';

$config = array();
if (ENVIRONMENT == 'development') {
    $config['dbname'] = 'projeto_crud_oo_mvc';
    $config['host'] = 'localhost';
    $config['dbuser'] = 'root';
    $config['dbpass'] = '';
}else{
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