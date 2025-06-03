<?php
if (isset($_GET['id'])) {
    $id = intval($_GET['id']);

    $sql = "SELECT * FROM imoveis WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$id]);

    $imovel = $stmt->fetch(PDO::FETCH_ASSOC);

    if (!$imovel) {
        echo "Imóvel não encontrado.";
        exit;
    }
} else {
    echo "ID não informado.";
    exit;
}
?>