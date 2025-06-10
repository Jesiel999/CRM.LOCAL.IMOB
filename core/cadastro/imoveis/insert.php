<?php
require_once '../../db.php';
require_once 'imovel.php';
require_once 'upload.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $dados = [
        ':titulo'          => trim($_POST['titulo'] ?? ''),
        ':tipo'            => trim($_POST['tipo'] ?? ''),
        ':categoria'       => trim($_POST['categoria'] ?? ''),
        ':descricao'       => trim($_POST['descricao'] ?? ''),
        ':status'          => trim($_POST['status'] ?? ''),
        ':cep'             => trim($_POST['cep'] ?? ''),
        ':rua'             => trim($_POST['rua'] ?? ''),
        ':numero'          => trim($_POST['numero'] ?? ''),
        ':complemento'     => trim($_POST['complemento'] ?? ''),
        ':bairro'          => trim($_POST['bairro'] ?? ''),
        ':cidade'          => trim($_POST['cidade'] ?? ''),
        ':estado'          => trim($_POST['estado'] ?? ''),
        ':areautil'        => trim($_POST['areautil'] ?? ''),
        ':areatotal'       => trim($_POST['areatotal'] ?? ''),
        ':quartos'         => trim($_POST['quartos'] ?? ''),
        ':suites'          => trim($_POST['suites'] ?? ''),
        ':banheiro'        => trim($_POST['banheiro'] ?? ''),
        ':vaga'            => trim($_POST['vaga'] ?? ''),
        ':valordevenda'    => trim($_POST['valordevenda'] ?? ''),
        ':valordelocacao'  => trim($_POST['valordelocacao'] ?? '')
    ];

    $codigo = gerarCodigoUnico($conn);
    $idImovel = salvarImovel($conn, $dados, $codigo);

    if (isset($_FILES['fotos'])) {
        salvarImagens($conn, $idImovel, $codigo, $_FILES['fotos']);
    }

    header('Location: ../../../');
    exit;
}
?>
