<?php
include_once '../db.php';

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

$foto = '';
if (!empty($_FILES['fotos']['name']) && $_FILES['FOTO']['error'] === UPLOAD_ERR_OK)
    $extensao = pathinfo($_FILES['foto']['name'], PATHINFO_extension);
    $nomefoto = uniqid('foto_', true) . '.' . $extensao;

    if(!file_exists('uploads')) {
        mkdir('uploads', 0777, true);
    }

    if(move_uploaded_file($FILES['foto']['tmp_name'], '../../storage/imoveis/imagens/' . $nomeFoto)) {
        $foto = $nomeFoto;
    } else {
        echo "Erro ao salvar imagem!";
        exit;
    }

$stmt = $conn->prepare("
    INSERT INTO imoveis (
        titulo, tipo, categoria, descricao, status, cep, rua, numero, complemento,
        bairro, cidade, estado, areautil, areatotal, quartos, suites, banheiro,
        vaga, valordevenda, valordelocacao
    ) VALUES (
        :titulo, :tipo, :categoria, :descricao, :status, :cep, :rua, :numero, :complemento,
        :bairro, :cidade, :estado, :areautil, :areatotal, :quartos, :suites, :banheiro,
        :vaga, :valordevenda, :valordelocacao
    )
");

$stmt->bindParam(':titulo', $titulo);
$stmt->bindParam(':tipo', $tipo);
$stmt->bindParam(':categoria', $categoria);
$stmt->bindParam(':descricao', $descricao);
$stmt->bindParam(':status', $status);
$stmt->bindParam(':cep', $cep);
$stmt->bindParam(':rua', $rua);
$stmt->bindParam(':numero', $numero);
$stmt->bindParam(':complemento', $complemento);
$stmt->bindParam(':bairro', $bairro);
$stmt->bindParam(':cidade', $cidade);
$stmt->bindParam(':estado', $estado);
$stmt->bindParam(':areautil', $areautil);
$stmt->bindParam(':areatotal', $areatotal);
$stmt->bindParam(':quartos', $quartos);
$stmt->bindParam(':suites', $suites);
$stmt->bindParam(':banheiro', $banheiro);
$stmt->bindParam(':vaga', $vaga);
$stmt->bindParam(':valordevenda', $valordevenda);
$stmt->bindParam(':valordelocacao', $valordelocacao);

if ($stmt->execute()) {
    echo "Imóvel cadastrado com sucesso!";
    header('Location: ../../');
    exit;
} else {
    echo "Erro ao cadastrar imóvel.";
}
?>
