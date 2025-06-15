<?php
if (isset($_GET['id'])) {
    $id = intval($_GET['id']);

    $sql ="
        SELECT i.*, 
               f.caminho, 
               f.nome_arquivo,
               f.ordem_exibicao
        FROM imoveis AS i
        LEFT JOIN imoveis_fotos AS f 
            ON i.id = f.imovel_id
        WHERE i.id = ?
        ORDER BY f.ordem_exibicao ASC
    ";
    
    $stmt = $conn->prepare($sql);
    $stmt->execute([$id]);
    $resultados = $stmt->fetchAll(PDO::FETCH_ASSOC);

    if (empty($resultados)) {
        echo "Imóvel não encontrado.";
        exit;
    }

    $imovel = $resultados[0];
    $imoveis = [];

    foreach ($resultados as $linha) {
        if (!empty($linha['nome_arquivo'])) {
            $imoveis[$id]['fotos'][] = $linha['nome_arquivo'];
        }
    }

} else {
    echo "ID não informado.";
    exit;
}
?>
