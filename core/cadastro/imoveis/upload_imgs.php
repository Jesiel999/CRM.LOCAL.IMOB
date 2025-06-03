<?php

$pasta = "../../../storage/imoveis/imagens";
if (!is_dir($pasta)) {
    mkdir($pasta, 0755, true);
}


if (isset($_FILES['fotos'])) {
    
    $totalArquivos = count($_FILES['fotos']['name']);
    $extensoesPermitidas = ['jpg', 'jpeg', 'png', 'gif'];

    $resultado = $conn->query("SELECT MAX(CAST(SUBSTRING_INDEX(nome_arquivo, '.', 1) AS UNSIGNED)) AS ultimo_numero,
                                      MAX(CAST(SUBSTRING_INDEX(ordem_exibicao, '.', 1) AS UNSIGNED)) AS numero_ordem
                                      FROM imoveis_fotos");

    $dados = $resultado->fetch(PDO::FETCH_ASSOC);

    $numeroAtual = $dados['ultimo_numero'] ?? 0;
    $numeroOrdem = $dados['numero_ordem'] ?? 0;

    for ($i = 0; $i < $totalArquivos; $i++) {
        
        $nomeOriginal = $_FILES['fotos']['name'][$i];
        $arquivoTmp = $_FILES['fotos']['tmp_name'][$i];
        $extensao = strtolower(pathinfo($nomeOriginal, PATHINFO_EXTENSION));

        if (!in_array($extensao, $extensoesPermitidas)) {
            echo "Arquivo $nomeOriginal tem uma extensão inválida.<br>";
            continue;
        }

        $numeroAtual++;
        $numeroOrdem++;

        $novoNome = $numeroAtual . "." . $extensao;
        $caminhoCompleto = $pasta . $novoNome;
        $numeroAtualOrdem = $numeroOrdem;

        if (file_exists($caminhoCompleto)) {
            echo "O arquivo $novoNome já existe na pasta. Pulei esse.<br>";
            continue;
        }

        if (move_uploaded_file($arquivoTmp, $caminhoCompleto)) {
            $sql = "INSERT INTO imoveis_fotos (imovel_id, caminho, nome_arquivo, ordem_exibicao) 
                    VALUES ('4', '$caminhoCompleto', '$novoNome', $numeroAtualOrdem)";
            if ($conn->query($sql) === TRUE) {
                echo "Imagem $novoNome enviada com sucesso.<br>";
            } else {
                echo "Erro ao salvar no banco: " . $conn->error . "<br>";
            }
        } else {
            echo "Erro ao mover o arquivo $nomeOriginal.<br>";
        }
    }
} else {
    echo "Nenhum arquivo enviado.";
}

?>