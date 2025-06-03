<?php
include_once '../../db.php';

$titulo         = trim($_POST['titulo'] ?? '');
$tipo           = trim($_POST['tipo'] ?? '');
$categoria      = trim($_POST['categoria'] ?? '');
$descricao      = trim($_POST['descricao'] ?? '');
$status         = trim($_POST['status'] ?? '');
$cep            = trim($_POST['cep'] ?? '');
$rua            = trim($_POST['rua'] ?? '');
$numero         = trim($_POST['numero'] ?? '');
$complemento    = trim($_POST['complemento'] ?? '');
$bairro         = trim($_POST['bairro'] ?? '');
$cidade         = trim($_POST['cidade'] ?? '');
$estado         = trim($_POST['estado'] ?? '');
$areautil       = trim($_POST['areautil'] ?? '');
$areatotal      = trim($_POST['areatotal'] ?? '');
$quartos        = trim($_POST['quartos'] ?? '');
$suites         = trim($_POST['suites'] ?? '');
$banheiro       = trim($_POST['banheiro'] ?? '');
$vaga           = trim($_POST['vaga'] ?? '');
$valordevenda   = trim($_POST['valordevenda'] ?? '');
$valordelocacao = trim($_POST['valordelocacao'] ?? '');

include_once 'gerarcodigo.php';
include_once 'upload_imgs.php';

if($_SERVER['REQUEST_METHOD'] === 'POST') {

    $codigo = gerarCodigoUnico($conn);

    $stmt = $conn->prepare("
        INSERT INTO imoveis (
            codigo, titulo, tipo, categoria, descricao, status, cep, rua, numero, complemento,
            bairro, cidade, estado, areautil, areatotal, quartos, suites, banheiro,
            vaga, valordevenda, valordelocacao
        ) VALUES (
            :codigo, :titulo, :tipo, :categoria, :descricao, :status, :cep, :rua, :numero, :complemento,
            :bairro, :cidade, :estado, :areautil, :areatotal, :quartos, :suites, :banheiro,
            :vaga, :valordevenda, :valordelocacao
        )
    ");

    $stmt->execute([
        ':codigo'          => $codigo,
        ':titulo'          => $titulo,
        ':tipo'            => $tipo,
        ':categoria'       => $categoria,
        ':descricao'       => $descricao,
        ':status'          => $status,
        ':cep'             => $cep,
        ':rua'             => $rua,
        ':numero'          => $numero,
        ':complemento'     => $complemento,
        ':bairro'          => $bairro,
        ':cidade'          => $cidade,
        ':estado'          => $estado,
        ':areautil'        => $areautil,
        ':areatotal'       => $areatotal,
        ':quartos'         => $quartos,
        ':suites'          => $suites,
        ':banheiro'        => $banheiro,
        ':vaga'            => $vaga,
        ':valordevenda'    => $valordevenda,
        ':valordelocacao'  => $valordelocacao
    ]);

    header('Location: ../../../');
    exit;
}
?>
