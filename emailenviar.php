<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $telefone = $_POST["telefone"];
    $email = $_POST["email"];
    $mensagem = $_POST["mensagem"];

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        die("E-mail inválido!");
    }

    $mail = new PHPMailer(true);

    try {
        // Configuração do servidor SMTP
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com'; // Servidor SMTP
        $mail->SMTPAuth = true;
        $mail->Username = 'dannvendas0@gmail.com'; // E-mail que enviará
        $mail->Password = 'oxvj auri yhxd jovo'; // Senha do e-mail
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port = 587;

        // Remetente e destinatário
        $mail->setFrom('dannvendas0@gmail.com', 'DanielTest');
        $mail->addAddress('kentplaysgg@gmail.com', 'Admin');

        // Conteúdo do e-mail
        $mail->isHTML(true);
        $mail->Subject = 'Nova mensagem de contato';
        $mail->Body    = "<strong>Nome:</strong> $nome <br>
                          <strong>Telefone:</strong> $telefone <br>
                          <strong>Email:</strong> $email <br>
                          <strong>Mensagem:</strong> <br> $mensagem";

        $mail->send();
        echo "Mensagem enviada com sucesso!";
    } catch (Exception $e) {
        echo "Erro ao enviar mensagem: {$mail->ErrorInfo}";
    }
}
?>