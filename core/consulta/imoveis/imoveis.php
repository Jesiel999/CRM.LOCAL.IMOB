<?php

$query = "
SELECT imoveis.*, 
       imoveis_fotos.caminho, 
       imoveis_fotos.nome_arquivo,
       imoveis_fotos.ordem_exibicao
FROM imoveis
LEFT JOIN imoveis_fotos ON imoveis.id = imoveis_fotos.imovel_id
ORDER BY imoveis.id, imoveis_fotos.ordem_exibicao ASC
LIMIT 0, 25
";

$stmt = $conn->prepare($query);
$stmt->execute();
$resultados = $stmt->fetchAll(PDO::FETCH_ASSOC);

$imoveis = [];

foreach ($resultados as $row) {
    $id = $row['id'];
    if (!isset($imoveis[$id])) {
        $imoveis[$id] = [
            'dados' => $row,
            'fotos' => []
        ];
    }

    if (!empty($row['nome_arquivo'])) {
       $nome_arquivo = $row['nome_arquivo'];

        preg_match('/\d+/', $nome_arquivo, $matches);
        $numero = isset($matches[0]) ? $matches[0] : null;

        $imoveis[$id]['fotos'][] = $nome_arquivo;
    }
}
?>
