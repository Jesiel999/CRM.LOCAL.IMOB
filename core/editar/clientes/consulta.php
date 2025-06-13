<?php
if (isset($_GET['id'])) {
    $id = intval($_GET['id']);

    $sql = "SELECT C.*, 
        I.tipo_imovel AS imovel_interesse, 
        I.regioes_interesse AS regioes_interesse, 
        I.tipo_imovel AS quartos_min_interesse, 
        I.valor_maximo AS valor_max_interesse, 
        I.area_minima AS area_min_interesse,
        I.urgencia AS urgencia
    FROM clientes AS C 
    LEFT JOIN interesses AS I 
    ON C.id = I.cliente_id 
    WHERE C.id = ?;";
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
?>