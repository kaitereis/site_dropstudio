<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Email configuration
    $to = "contato@dropstudio.site"; // Replace with your email address
    $subject = "Nova mensagem do formulário de contato do site DROPSTUDIO";
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    // Email body
    $body = "Nome: $name\n";
    $body .= "Email: $email\n\n";
    $body .= "Mensagem:\n$message\n";

    // Send email
    if (mail($to, $subject, $body, $headers)) {
        echo "<div style='text-align: center; margin-top: 50px;'>
                <h1 style='color: green;'>Mensagem enviada com sucesso! Retornaremos o mais rápido possível.</h1>
                <p>Obrigado por entrar em contato. Responderemos em breve.</p>
                <a href='https://www.dropstudio.site' style='display: inline-block; margin-top: 20px; padding: 10px 20px; background-color: #333; color: #fff; text-decoration: none; border-radius: 5px;'>Voltar ao site</a>
              </div>";
    } else {
        echo "<div style='text-align: center; margin-top: 50px;'>
                <h1 style='color: red;'>Erro ao enviar a mensagem.</h1>
                <p>Por favor, tente novamente mais tarde.</p>
                <a href='https://www.dropstudio.site' style='display: inline-block; margin-top: 20px; padding: 10px 20px; background-color: #333; color: #fff; text-decoration: none; border-radius: 5px;'>Voltar ao site</a>
              </div>";
    }
}
?>