<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Email configuration
    $to = "contato@dropstudio.site"; // Replace with your email address
    $subject = "Nova mensagem do formulário de contato do site DropStudio";
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    // Email body
    $body = "Nome: $name\n";
    $body .= "Email: $email\n\n";
    $body .= "Mensagem:\n$message\n";

    // Send email
    if (mail($to, $subject, $body, $headers)) {
        echo "Mensagem enviada com sucesso!";
        <p>Retornaremos o mais rápido possível.</p>
    } else {
        echo "Erro ao enviar a mensagem. Tente novamente.";
    }
} else {
    echo "Método de requisição inválido.";
}
?>