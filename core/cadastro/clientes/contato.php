<?php
include_once '../../../core/db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $idCliente    = trim($_POST['idCliente']);
    $tipoContato  = trim($_POST['tipoContato']);
    $idImovel     = trim($_POST['idImovel'] ?? null);
    $observacao   = trim($_POST['observacao'] ?? '');
    $data_cadastro   = trim($_POST['data_cadastro'] ?? '');

    if (empty($idCliente) || empty($tipoContato)) {
        die('Campos obrigatórios não preenchidos.');
    }

    $sql = "INSERT INTO contato (cliente_id, tipo, imovel_id, observacao, data_cadastro) 
            VALUES (:idCliente, :tipoContato, :idImovel, :observacao, :data_cadastro)";
    
    $stmt = $conn->prepare($sql);
    $stmt->execute([
        ':idCliente'   => $idCliente,
        ':tipoContato' => $tipoContato,
        ':idImovel'    => $idImovel ?: null,
        ':observacao'  => $observacao,
        ':data_cadastro'  => $data_cadastro,
    ]);

    header('Location: ../../../');
    exit;
}
?>
