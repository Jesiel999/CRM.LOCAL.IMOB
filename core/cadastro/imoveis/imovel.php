<?php
function gerarCodigoUnico(PDO $conn): string {
    do {
        $letras = chr(rand(65, 90)) . chr(rand(65, 90));
        $numeros = str_pad(rand(0, 9999), 4, '0', STR_PAD_LEFT);
        $codigo = $letras . $numeros;

        $stmt = $conn->prepare("SELECT COUNT(*) FROM imoveis WHERE codigo = :codigo");
        $stmt->execute(['codigo' => $codigo]);
        $existe = $stmt->fetchColumn();
    } while ($existe > 0);

    return $codigo;
}

function salvarImovel(PDO $conn, array $dados, string $codigo): int {
    $sql = "
        INSERT INTO imoveis (
            codigo, titulo, tipo, categoria, descricao, status, cep, rua, numero, complemento,
            bairro, cidade, estado, areautil, areatotal, quartos, suites, banheiro,
            vaga, valordevenda, valordelocacao
        ) VALUES (
            :codigo, :titulo, :tipo, :categoria, :descricao, :status, :cep, :rua, :numero, :complemento,
            :bairro, :cidade, :estado, :areautil, :areatotal, :quartos, :suites, :banheiro,
            :vaga, :valordevenda, :valordelocacao
        )
    ";
    $stmt = $conn->prepare($sql);
    $dados['codigo'] = $codigo;
    $stmt->execute($dados);

    return (int) $conn->lastInsertId();
}
?>
