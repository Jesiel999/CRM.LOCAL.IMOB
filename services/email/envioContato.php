<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nome     = trim($_POST['nome']);
    $email    = trim($_POST['email']);
    $telefone = trim($_POST['telefone']);
    $mensagem = trim($_POST['mensagem']);

    $codigo_imovel = isset($_POST['codigo']) ? trim($_POST['codigo']) : 'N/A';

    $destinatario = "jesieldos@gmail.com";
    $titulo = "Mensagem do site IMOB – Agendamento | Código: $codigo_imovel";

    $corpo = "Você recebeu uma nova mensagem pelo site:\n\n";
    $corpo .= "Nome: $nome\n";
    $corpo .= "E-mail: $email\n";
    $corpo .= "Telefone: $telefone\n";
    $corpo .= "Mensagem:\n$mensagem\n";

    $headers = "From: contato@seudominio.com\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    if (mail($destinatario, $titulo, $corpo, $headers)) {
        header('Location: ../../?sucesso=1');
        exit;
    } else {
        echo "Erro ao enviar mensagem. Verifique a configuração do servidor.";
    }
}
?>
