<?php
function criarPasta(string $codigo): string {
    $pasta = __DIR__ . '/../../../storage/imoveis/imagens/' . $codigo . '/';
    if (!is_dir($pasta)) {
        mkdir($pasta, 0755, true);
    }
    return $pasta;
}

function salvarImagens(PDO $conn, int $idImovel, string $codigo, array $arquivos) {
    $pasta = criarPasta($codigo);
    $extensoesPermitidas = ['jpg', 'jpeg', 'png', 'gif'];

    $sqlMax = "
        SELECT
            MAX(CAST(SUBSTRING_INDEX(nome_arquivo, '.', 1) AS UNSIGNED)) AS ultimo_numero,
            MAX(CAST(SUBSTRING_INDEX(ordem_exibicao, '.', 1) AS UNSIGNED)) AS numero_ordem
        FROM imoveis_fotos
        WHERE imovel_id = :idImovel
    ";
    $stmtMax = $conn->prepare($sqlMax);
    $stmtMax->execute([':idImovel' => $idImovel]);
    $dados = $stmtMax->fetch(PDO::FETCH_ASSOC);

    $numeroAtual = $dados['ultimo_numero'] ?? 0;
    $numeroOrdem = $dados['numero_ordem'] ?? 0;


    foreach ($arquivos['name'] as $i => $nomeOriginal) {
        $extensao = strtolower(pathinfo($nomeOriginal, PATHINFO_EXTENSION));

        if (!in_array($extensao, $extensoesPermitidas, true)) {

            continue;
        }

        $numeroAtual++;
        $numeroOrdem++;

        $novoNome = $numeroAtual . '.' . $extensao;
        $caminhoCompleto = $pasta . $novoNome;

        if (move_uploaded_file($arquivos['tmp_name'][$i], $caminhoCompleto)) {
            $sqlInsere = "
                INSERT INTO imoveis_fotos (
                    imovel_id,
                    caminho,
                    nome_arquivo,
                    ordem_exibicao
                ) VALUES (
                    :imovel_id,
                    :caminho,
                    :nome_arquivo,
                    :ordem_exibicao
                )
            ";
            $stmtInsere = $conn->prepare($sqlInsere);
            $stmtInsere->execute([
                ':imovel_id'     => $idImovel,
                ':caminho'       => $caminhoCompleto,
                ':nome_arquivo'  => $novoNome,
                ':ordem_exibicao' => $numeroOrdem,
            ]);
        }

    }
}
?>
