<?php 
     session_start();
$pdo = new PDO(
    'mysql:host=localhost;dbname=kleestore;',
    'root',
    'root',
    array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8')
);
$data;