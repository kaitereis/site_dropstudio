<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name    = htmlspecialchars(trim($_POST['name'] ?? ''));
    $email   = htmlspecialchars(trim($_POST['email'] ?? ''));
    $message = htmlspecialchars(trim($_POST['message'] ?? ''));

    // Validação básica
    if (empty($name) || empty($email) || empty($message)) {
        echo "Erro: Todos os campos são obrigatórios.";
        exit;
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Erro: Email inválido.";
        exit;
    }

    // Email configuration
    $to      = "contato@dropstudio.site";
    $subject = "Nova mensagem do formulário de contato - DropStudio";
    $headers  = "From: no-reply@dropstudio.site\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "X-Mailer: PHP/" . phpversion() . "\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    // Email body
    $body  = "Você recebeu uma nova mensagem pelo formulário do site DropStudio.\n\n";
    $body .= "Nome: $name\n";
    $body .= "Email: $email\n\n";
    $body .= "Mensagem:\n$message\n";

    // Send email
    if (mail($to, $subject, $body, $headers)) {
        echo "Mensagem enviada com sucesso!";
    } else {
        echo "Erro ao enviar a mensagem. Tente novamente.";
    }
} else {
    echo "Método de requisição inválido.";
}
?>