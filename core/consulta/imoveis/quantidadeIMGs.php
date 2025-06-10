<?php

$query = "
SELECT imoveis.*,
	COUNT(imoveis_fotos.id) AS total_imagens
FROM imoveis
LEFT JOIN imoveis_fotos ON imoveis.id = imoveis_fotos.imovel_id
GROUP BY imoveis.id
ORDER BY imoveis.id ASC
LIMIT 0, 25;";

$stmt = $conn->prepare($query);
$stmt->execute();
$quantidadesIMGs = $stmt->fetch(PDO::FETCH_ASSOC);
?>
