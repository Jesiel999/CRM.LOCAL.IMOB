<?php

$query = "SELECT * FROM `clientes` ";

$params = [];

$query .= "LIMIT 0, 25";

$stmt = $conn->prepare($query);
$stmt->execute($params);

$clientes = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>
