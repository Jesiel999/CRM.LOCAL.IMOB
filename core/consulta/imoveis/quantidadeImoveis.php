<?php
include_once '../../core/db.php'; 
$query = "SELECT COUNT(*) AS total_imoveis FROM imoveis WHERE status = 'disponivel' ";

$stmt = $conn->prepare($query);
$stmt->execute();

$quantidadeImoveis = $stmt->fetch(PDO::FETCH_ASSOC);

$totalImovel = $quantidadeImoveis['total_imoveis'];

?>