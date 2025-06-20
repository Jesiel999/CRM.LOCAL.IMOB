<?php
$dataAtual = new DateTime();
$anoAtual = $dataAtual->format('Y');
$mesAtual = $dataAtual->format('m');

$dataAnterior = (clone $dataAtual)->modify('-1 month');
$anoAnterior = $dataAnterior->format('Y');
$mesAnterior = $dataAnterior->format('m');

$queryTotal = "SELECT COUNT(*) AS total_clientes FROM clientes WHERE status = 'ativo'";
$stmt = $conn->prepare($queryTotal);
$stmt->execute();
$totalClientes = $stmt->fetch(PDO::FETCH_ASSOC)['total_clientes'];

$queryMesAtual = "SELECT COUNT(*) AS total_mes_atual FROM clientes 
                  WHERE status = 'ativo' 
                  AND MONTH(data_cadastro) = :mesAtual 
                  AND YEAR(data_cadastro) = :anoAtual";
$stmt = $conn->prepare($queryMesAtual);
$stmt->execute([
    ':mesAtual' => $mesAtual,
    ':anoAtual' => $anoAtual
]);
$clientesMesAtual = $stmt->fetch(PDO::FETCH_ASSOC)['total_mes_atual'];

$queryMesAnterior = "SELECT COUNT(*) AS total_mes_anterior FROM clientes 
                     WHERE status = 'ativo' 
                     AND MONTH(data_cadastro) = :mesAnterior 
                     AND YEAR(data_cadastro) = :anoAnterior";
$stmt = $conn->prepare($queryMesAnterior);
$stmt->execute([
    ':mesAnterior' => $mesAnterior,
    ':anoAnterior' => $anoAnterior
]);
$clientesMesAnterior = $stmt->fetch(PDO::FETCH_ASSOC)['total_mes_anterior'];

$difClientes = $clientesMesAtual - $clientesMesAnterior;
?>
