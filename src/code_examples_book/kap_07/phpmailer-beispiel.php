<?php
// PHP-Mailer-Klassen in den globalen Namensraum importieren
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//Composers Autoload laden
require 'vendor/autoload.php';

$mail = new PHPMailer(true);
try {
    //Server settings
    $mail->SMTPDebug = 2;
    $mail->isSMTP();
    $mail->Host = 'IHR SMTP-SERVER';
    $mail->SMTPAuth = true;
    $mail->Username = 'IHR BENUTZERNAME';
    $mail->Password = 'IHR PASSWORT';
    $mail->Port       = 587;
    $mail->SMTPSecure = 'tls';
    $mail->setLanguage('de', 'vendor/phpmailer/phpmailer/language/phpmailer.lang-de.php');
    $mail->CharSet = 'UTF-8';
    //Recipients
    $mail->setFrom('IHR ABSENDER');
    $mail->addAddress('IHR ADDRESSAT');


    //Content
    $mail->Subject = "Betreff für die Mail";
    $mail->Body    = "Dieser Text beinhaltet die eigentliche Nachricht, auch mit Sönderzäichen";


    $mail->send();
    echo 'Nachricht wurde versendet';
} catch (Exception $e) {
    echo 'Nachricht wurde nicht gesendet: ', $mail->ErrorInfo;
}