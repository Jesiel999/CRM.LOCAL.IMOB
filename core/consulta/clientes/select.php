<?php
$query = "SELECT C.*, 
    I.tipo_imovel AS imovel_interesse, 
    I.regioes_interesse AS regioes_interesse, 
    I.quartos_min AS quartos_min_interesse, 
    I.valor_maximo AS valor_max_interesse, 
    I.area_minima AS area_min_interesse,
    I.urgencia AS urgencia
FROM clientes AS C 
LEFT JOIN interesses AS I 
ON C.id = I.cliente_id ";
$params = [];

$query .= "LIMIT 0, 25";

$stmt = $conn->prepare($query);
$stmt->execute($params);

$clientes = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
