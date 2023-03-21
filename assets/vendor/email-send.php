<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

include('../vendor/PHPMailer/PHPMailerAutoload.php');


// Instancie a classe PHPMailer
$mail = new PHPMailer(true);

try {
    // Configurações do servidor SMTP do Gmail
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'carlos.lemesxbx@gmail.com'; // Substitua pelo seu email do Gmail
    $mail->Password = 'Foda03109114@'; // Substitua pela sua senha do Gmail
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;

    // Configurações do email
    $mail->setFrom($_POST['email'], $_POST['name']);
    $mail->addAddress('carlos.lemesxbx@gmail.com'); // Substitua pelo email do destinatário
    $mail->isHTML(true);
    $mail->Subject = $_POST['subject'];
    $mail->Body = $_POST['message'];

    // Envie o email
    $mail->send();
    echo 'Mensagem enviada com sucesso!';
} catch (Exception $e) {
    echo 'Erro ao enviar mensagem: ' . $mail->ErrorInfo;
}
