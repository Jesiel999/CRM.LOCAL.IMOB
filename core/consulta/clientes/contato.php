<?php
if (isset($_GET['id'])) {
    $id = intval($_GET['id']);

    $sql = "SELECT 
                CLI.id AS idCliente,
                CLI.nome AS nomeCliente,
                CLI.email AS emailCliente,
                C.tipo AS contato_tipoContato,
                C.cliente_id AS contato_idCliente,
                C.observacao AS observacao 
            FROM clientes AS CLI 
            LEFT JOIN contato AS C ON CLI.id = C.cliente_id 
            WHERE CLI.id = ?";

    $stmt = $conn->prepare($sql);
    $stmt->execute([$id]);

    $cliente = $stmt->fetch(PDO::FETCH_ASSOC);

    if (!$cliente) {
        echo "Cliente não encontrado.";
        exit;
    }
} else {
    echo "ID não informado.";
    exit;
}

include_once '../../core/consulta/imoveis/imoveis.php';
?>
