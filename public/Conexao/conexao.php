<?php

session_start();

$localhost = "localhost";
$user = "id16177308_vagas_agatha";
$pass = "Mari9596!Mari9596!";
$banco = "id16177308_vagas";

global $pdo;

try{
    $pdo = new PDO("mysql:dbname=".$banco."; host=".$localhost, $user, $pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOExeception $e){
    echo "ERRO: ". $e->getMessage();
    exit;
}




