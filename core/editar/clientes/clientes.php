<?php
include_once 'consulta.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];



    $dados = [
        ':id'                   => $id,
        ':nome'                 => trim($_POST['nome'] ?? ''),
        ':tipo_cliente'         => trim($_POST['tipo_cliente'] ?? ''),
        ':cpf_cnpj'             => trim($_POST['cpf_cnpj'] ?? ''),
        ':rg_ie'                => trim($_POST['rg_ie'] ?? ''),
        ':email'                => trim($_POST['email'] ?? ''),
        ':telefone'             => trim($_POST['telefone'] ?? ''),
        ':telefone_secundario'  => trim($_POST['telefone_secundario'] ?? ''),
        ':cep'                  => trim($_POST['cep'] ?? ''),
        ':rua'                  => trim($_POST['rua'] ?? ''),
        ':numero'               => trim($_POST['numero'] ?? ''),
        ':complemento'          => trim($_POST['complemento'] ?? ''),
        ':bairro'               => trim($_POST['bairro'] ?? ''),
        ':cidade'               => trim($_POST['cidade'] ?? ''),
        ':estado'               => trim($_POST['estado'] ?? ''),
        ':observacoes'          => trim($_POST['observacoes'] ?? '')
    ];

    $sql = "
        UPDATE clientes SET
            nome = :nome,
            tipo_cliente = :tipo_cliente,
            cpf_cnpj = :cpf_cnpj,
            rg_ie = :rg_ie,
            email = :email,
            telefone = :telefone,
            telefone_secundario = :telefone_secundario,
            cep = :cep,
            rua = :rua,
            numero = :numero,
            complemento = :complemento,
            bairro = :bairro,
            cidade = :cidade,
            estado = :estado,
            observacoes = :observacoes
        WHERE id = :id
    ";

    $stmt = $conn->prepare($sql);
    $stmt->execute($dados);

    header('Location: ../../../');
    exit;
}
?>
