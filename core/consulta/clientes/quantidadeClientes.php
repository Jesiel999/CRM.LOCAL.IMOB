<?php
$query = "SELECT COUNT(*) AS total_clientes FROM clientes WHERE status = 'ativo' ";

$stmt = $conn->prepare($query);
$stmt->execute();

$quantidadeclientes = $stmt->fetch(PDO::FETCH_ASSOC);

$totalClientes = $quantidadeclientes['total_clientes'];

?>