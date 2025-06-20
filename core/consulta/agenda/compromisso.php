<?php
$sql = "SELECT 
            CLI.id AS idCliente,
            CLI.nome AS nomeCliente,
            CLI.email AS emailCliente,
            C.tipo AS contato_tipoContato,
            C.cliente_id AS contato_idCliente,
            C.observacao AS observacao 
        FROM clientes AS CLI 
        LEFT JOIN contato AS C ON CLI.id = C.cliente_id";

$stmt = $conn->prepare($sql);
$stmt->execute();
$clientes = $stmt->fetchAll(PDO::FETCH_ASSOC);

if (!$clientes) {
    echo "Nenhum cliente encontrado.";
    exit;
}

include_once '../../core/consulta/imoveis/imoveis.php';
?>