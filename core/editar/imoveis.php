<?php
include_once '../db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $id             = $_POST['id']; 
    $titulo         = $_POST['titulo'];
    $tipo           = $_POST['tipo'];
    $categoria      = $_POST['categoria'];
    $descricao      = $_POST['descricao'];
    $status         = $_POST['status'];
    $cep            = $_POST['cep'];
    $rua            = $_POST['rua'];
    $numero         = $_POST['numero'];
    $complemento    = $_POST['complemento'];
    $bairro         = $_POST['bairro'];
    $cidade         = $_POST['cidade'];
    $estado         = $_POST['estado'];
    $areautil       = $_POST['areautil'];
    $areatotal      = $_POST['areatotal'];
    $quartos        = $_POST['quartos'];
    $suites         = $_POST['suites'];
    $banheiro       = $_POST['banheiro'];
    $vaga           = $_POST['vaga'];
    $valordevenda   = $_POST['valordevenda'];
    $valordelocacao = $_POST['valordelocacao'];

    $update = $conn->prepare("UPDATE imoveis SET 
        titulo = :titulo, 
        tipo = :tipo, 
        categoria = :categoria,
        descricao = :descricao,
        status = :status, 
        cep = :cep, 
        rua = :rua, 
        numero = :numero, 
        complemento = :complemento, 
        bairro = :bairro,
        cidade = :cidade, 
        estado = :estado, 
        areautil = :areautil, 
        areatotal = :areatotal, 
        quartos = :quartos,
        suites = :suites, 
        banheiro = :banheiro, 
        vaga = :vaga, 
        valordevenda = :valordevenda, 
        valordelocacao = :valordelocacao 
        WHERE id = :id");

    $update->execute([
        ':id' => $id,
        ':titulo' => $titulo,
        ':tipo' => $tipo,
        ':categoria' => $categoria,
        ':descricao' => $descricao,
        ':status' => $status,
        ':cep' => $cep,
        ':rua' => $rua,
        ':numero' => $numero,
        ':complemento' => $complemento,
        ':bairro' => $bairro,
        ':cidade' => $cidade,
        ':estado' => $estado,
        ':areautil' => $areautil,
        ':areatotal' => $areatotal,
        ':quartos' => $quartos,
        ':suites' => $suites,
        ':banheiro' => $banheiro,
        ':vaga' => $vaga,
        ':valordevenda' => $valordevenda,
        ':valordelocacao' => $valordelocacao
    ]);

    header('Location: ../../');
    exit;
}
?>
