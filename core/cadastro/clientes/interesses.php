<?php
    
    $imovelInteresse = $_POST['imovel_interesse'] ?? [];
    if (is_array($imovelInteresse)) {
        $imovelInteresse = implode(',', array_map('trim', $imovelInteresse));
    }

    $dadosInteresses = [
        ':cliente_id'            => $idCliente,
        ':imovel_interesse'     => $imovelInteresse,
        ':quartos_min_interesse'=> trim($_POST['quartos_min_interesse'] ?? ''),
        ':area_min_interesse'   => trim($_POST['area_min_interesse'] ?? ''),
        ':regioes_interesse'    => trim($_POST['regioes_interesse'] ?? ''),
        ':valor_max_interesse'  => trim($_POST['valor_max_interesse'] ?? ''),
        ':urgencia'             => trim($_POST['urgencia'] ?? '')
    ];

    $sqlInteresses = "
        INSERT INTO interesses (
            cliente_id, tipo_imovel, quartos_min, area_minima, regioes_interesse, valor_maximo, urgencia
        ) VALUES (
            :cliente_id, :imovel_interesse, :quartos_min_interesse, :area_min_interesse, :regioes_interesse, :valor_max_interesse, :urgencia
        )
    ";

    $stmtInteresses = $conn->prepare($sqlInteresses);
    $stmtInteresses->execute($dadosInteresses);
?>