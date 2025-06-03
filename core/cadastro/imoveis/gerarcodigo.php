<?php
function gerarCodigoUnico($conn) {
    do {
        $letras = chr(rand(65, 90)) . chr(rand(65,90));
    
        $numeros = str_pad(rand(0, 9999), 2, '0', STR_PAD_LEFT);

        $codigo = $letras . $numeros;

        $stmt = $conn->prepare("SELECT COUNT(*) FROM imoveis WHERE codigo = :codigo");
        $stmt->execute(['codigo' => $codigo]);
        $existe = $stmt->fetchColumn();
    } while ($existe > 0);
    return $codigo;
}
?>