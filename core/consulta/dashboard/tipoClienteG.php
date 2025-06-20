<?php
include_once '../../core/db.php';

$query = "SELECT tipo_cliente, COUNT(*) AS total FROM clientes GROUP BY tipo_cliente";
$stmt = $conn->prepare($query);
$stmt->execute();

$resultados = $stmt->fetchAll(PDO::FETCH_ASSOC);

$tiposEsperados = ['Comprador', 'Locatário', 'Outro'];
$clientesPorTipo = array_fill_keys($tiposEsperados, 0);

foreach ($resultados as $linha) {
    $tipo = $linha['tipo_cliente'];
    $clientesPorTipo[$tipo] = (int) $linha['total'];
}
?>
