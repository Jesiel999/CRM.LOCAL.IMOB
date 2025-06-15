<?php
include_once '../../db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = isset($_POST['id']) ? intval($_POST['id']) : 0;
    if ($id <= 0) {
        die('ID inválido.');
    }

    $dadosCliente = [
        ':id'                  => $id,
        ':nome'                => trim($_POST['nome'] ?? ''),
        ':tipo_cliente'        => trim($_POST['tipo_cliente'] ?? ''),
        ':cpf_cnpj'            => trim($_POST['cpf_cnpj'] ?? ''),
        ':rg_ie'               => trim($_POST['rg_ie'] ?? ''),
        ':email'               => trim($_POST['email'] ?? ''),
        ':telefone'            => trim($_POST['telefone'] ?? ''),
        ':telefone_secundario' => trim($_POST['telefone_secundario'] ?? ''),
        ':cep'                 => trim($_POST['cep'] ?? ''),
        ':rua'                 => trim($_POST['rua'] ?? ''),
        ':numero'              => trim($_POST['numero'] ?? ''),
        ':complemento'         => trim($_POST['complemento'] ?? ''),
        ':bairro'              => trim($_POST['bairro'] ?? ''),
        ':cidade'              => trim($_POST['cidade'] ?? ''),
        ':estado'              => trim($_POST['estado'] ?? ''),
        ':observacoes'         => trim($_POST['observacoes'] ?? '')
    ];

    $sqlCliente = "
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

    $stmtCliente = $conn->prepare($sqlCliente);
    $stmtCliente->execute($dadosCliente);

    $dadosInteresses = [
        ':cliente_id'           => $id,
        ':imovel_interesse'     => trim($_POST['imovel_interesse'] ?? ''),
        ':quartos_min_interesse'=> trim($_POST['quartos_min_interesse'] ?? ''),
        ':area_min_interesse'   => trim($_POST['area_min_interesse'] ?? ''),
        ':regioes_interesse'    => trim($_POST['regioes_interesse'] ?? ''),
        ':valor_max_interesse'  => trim($_POST['valor_max_interesse'] ?? ''),
        ':urgencia'             => trim($_POST['urgencia'] ?? '')
    ];

    $sqlInteresses = "
        UPDATE interesses SET
            tipo_imovel = :imovel_interesse,
            quartos_min = :quartos_min_interesse,
            area_minima = :area_min_interesse,
            regioes_interesse = :regioes_interesse,
            valor_maximo = :valor_max_interesse,
            urgencia = :urgencia
        WHERE cliente_id = :cliente_id
    ";

    $stmtInteresses = $conn->prepare($sqlInteresses);
    $stmtInteresses->execute($dadosInteresses);

    header('Location: ../../../');
    exit;
}
?>
