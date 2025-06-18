<?php
include_once '../../db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $dados = [
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
        INSERT INTO clientes (
            nome, tipo_cliente, cpf_cnpj, rg_ie, email, telefone, telefone_secundario, cep, rua, numero,
            complemento, bairro, cidade, estado, observacoes
        ) VALUES (
            :nome, :tipo_cliente, :cpf_cnpj, :rg_ie, :email, :telefone, :telefone_secundario, :cep, :rua, :numero,
            :complemento, :bairro, :cidade, :estado, :observacoes
        )
    ";

    $stmt = $conn->prepare($sql);
    $stmt->execute($dados);
    $idCliente = (int) $conn->lastInsertId();
    
    include_once 'interesses.php';

    header('Location: ../../../');
    exit;
}
?>
