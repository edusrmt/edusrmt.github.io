<?php
$name = $_POST['name'];
$visitor = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

if (empty($name) || empty($visitor)) {
    exit;
}

$email_from = $visitor;
$email_subject = "NOVO CONTATO - $subject";
$email_body = "Você recebeu um novo contato de $name!\n"."Aqui está a mensagem:\n\n$message";
$to = "cealvesarmento@gmail.com";
$headers = "From: $email_from \r\n";

mail($to, $email_subject, $email_body, $headers);
header("Location: https://google.com");