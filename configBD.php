<?php

session_start();

$dbHost = '127.0.0.1';
$dbUsername = 'root';
$dbPassword = '123456';
$dbName = 'norget';

global $pdo;

try {

    //isso que foi pego do wwweschools serve para verifiacr se a conexão foi bem sucedida.
    $pdo = new PDO("mysql:host=$dbHost;dbname=$dbName", $dbUsername, $dbPassword);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "foi!";
  } catch(PDOException $e) {
    echo "Não foi pois: " . $e->getMessage();
  }


?>