<?php
// Verifica se os dados foram enviados via POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtém os dados do formulário
    $nome = $_POST['nome'];
    $telefone = $_POST['telefone'];
    $horario = $_POST['horario'];

    // Formata a mensagem para o WhatsApp
    $mensagem = "Olá, $nome! Sua reserva de horário para $horario foi confirmada.";

    // Número de telefone para o qual a mensagem será enviada (seu número de WhatsApp)
    $numero_whatsapp = "5562993858584";

    // URL para enviar a mensagem pelo WhatsApp
    $url_whatsapp = "https://api.whatsapp.com/send?phone=$numero_whatsapp&text=" . urlencode($mensagem);

    // Redireciona para o WhatsApp
    header("Location: $url_whatsapp");
    exit;
}
?>