<?php
if (isset($_POST['id'])) {
    $id = intval($_POST['id']);

    $sql = "SELECT 
        c.id AS id_compromisso,
        c.nome AS cliente_nome,
        IM.id AS imovel_id,
        IM.codigo AS codigo_imovel,
        IM.titulo AS nome_imovel,
        c.id AS cliente_id,
        cp.data_cadastro,
        cp.tipo AS tipo_visita,
        cp.observacao
    FROM contato cp
    JOIN clientes c ON c.id = cp.cliente_id
    JOIN imoveis IM ON cp.imovel_id = IM.id
    WHERE cp.data_cadastro BETWEEN :inicio AND :fim
    ORDER BY cp.data_cadastro
    WHERE c.id = ?;";
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