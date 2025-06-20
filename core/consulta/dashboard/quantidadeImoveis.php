<?php
include_once '../../core/db.php';

$dataAtual = new DateTime();
$anoAtual = $dataAtual->format('Y');
$mesAtual = $dataAtual->format('m');

$dataAnterior = (clone $dataAtual)->modify('-1 month');
$anoAnterior = $dataAnterior->format('Y');
$mesAnterior = $dataAnterior->format('m');

$queryTotal = "SELECT COUNT(*) AS total_imoveis FROM imoveis WHERE status = 'disponivel'";
$stmt = $conn->prepare($queryTotal);
$stmt->execute();
$totalImovel = $stmt->fetch(PDO::FETCH_ASSOC)['total_imoveis'];

$queryMesAtual = "SELECT COUNT(*) AS total_mes_atual FROM imoveis 
                  WHERE status = 'disponivel' 
                  AND MONTH(data_cadastro) = :mesAtual 
                  AND YEAR(data_cadastro) = :anoAtual";
$stmt = $conn->prepare($queryMesAtual);
$stmt->execute([
    ':mesAtual' => $mesAtual,
    ':anoAtual' => $anoAtual
]);
$imoveisMesAtual = $stmt->fetch(PDO::FETCH_ASSOC)['total_mes_atual'];

$queryMesAnterior = "SELECT COUNT(*) AS total_mes_anterior FROM imoveis 
                     WHERE status = 'disponivel' 
                     AND MONTH(data_cadastro) = :mesAnterior 
                     AND YEAR(data_cadastro) = :anoAnterior";
$stmt = $conn->prepare($queryMesAnterior);
$stmt->execute([
    ':mesAnterior' => $mesAnterior,
    ':anoAnterior' => $anoAnterior
]);
$imoveisMesAnterior = $stmt->fetch(PDO::FETCH_ASSOC)['total_mes_anterior'];

$difImoveis = $imoveisMesAtual - $imoveisMesAnterior;
?>
