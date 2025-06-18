<?php
$query = "SELECT 
    C.*,
    DATE_FORMAT(CON.data_cadastro, '%d/%m/%Y') AS data_contato,
    I.tipo_imovel AS imovel_interesse, 
    I.regioes_interesse AS regioes_interesse, 
    I.quartos_min AS quartos_min_interesse, 
    I.valor_maximo AS valor_max_interesse, 
    I.area_minima AS area_min_interesse,
    I.urgencia AS urgencia
FROM clientes AS C
LEFT JOIN (
    SELECT * FROM contato AS c1
    WHERE c1.data_cadastro = (
        SELECT MAX(c2.data_cadastro)
        FROM contato AS c2
        WHERE c2.cliente_id = c1.cliente_id
        AND c2.data_cadastro < CURDATE()
    )
) AS CON ON CON.cliente_id = C.id
LEFT JOIN interesses AS I ON I.cliente_id = C.id;";
$params = [];

$query .= "LIMIT 0, 25";

$stmt = $conn->prepare($query);
$stmt->execute($params);

$clientes = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
