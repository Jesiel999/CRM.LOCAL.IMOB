<?php
$dbHost = 'localhost';
include_once '../../../config/bd.php';
$dbName = 'crmlocal';

try {
    $conn = new PDO ("mysql:host=$dbHost; dbname=$dbName; charset=utf8", $dbUsername, $dbPassword);
} catch (PDOException $e){
    die("Erro na conexão: ". $e->getMessage());
}
?>