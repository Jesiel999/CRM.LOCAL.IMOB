<?php

if (isset($_GET['id'])) {
    $id = intval($_GET['id']);

    $sql = "SELECT 
        cp.id AS id,
        c.nome AS cliente_nome,
        IM.id AS imovel_id,
        IM.codigo AS codigo_imovel,
        IM.titulo AS nome_imovel,
        c.id AS cliente_id,
        cp.data_cadastro,
        cp.tipo AS tipo,
        cp.observacao
    FROM contato cp
    JOIN clientes c ON c.id = cp.cliente_id
    JOIN imoveis IM ON cp.imovel_id = IM.id
    WHERE cp.id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$id]);

    $cliente = $stmt->fetch(PDO::FETCH_ASSOC);

    if (!$cliente) {
        echo "Contato não encontrado.";
        exit;
    }
} else {
    echo "ID não informado.";
    exit;
}

?>