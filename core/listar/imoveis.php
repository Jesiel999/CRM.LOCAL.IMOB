<?php

$query = "SELECT * FROM `imoveis` ";

$params = [];

$query .= "LIMIT 0, 25";

$stmt = $conn->prepare($query);
$stmt->execute($params);

$imoveis = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>
