<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/PHPMailer/src/Exception.php';
require 'vendor/PHPMailer/src/PHPMailer.php';
require 'vendor/PHPMailer/src/SMTP.php';

session_start();

if (isset($_POST['send'])) {


    // $email->AddAddress('nickkillip11@gmail.com', 'Person One');
    // $email->AddAddress('pcanonymous47@gmail.com', 'Person Two');
    // $email = $_POST['email'];
    // $subject = $_POST['subject'];
    // $message = $_POST['message'];
    // $email = explode(",", 'nickkillip11@gmail.com','njcattian@gmail.com');
    // $subject = 'Schedule Posting';
    // $message = 'New class schedule update';

    //content
    // $email = $_POST['email'];
    $email = "nickkillip11@gmail.com";
    $subject = 'Schedule';
    $message = 'Hehe try lang';


    //Load composer's autoloader

    $mail = new PHPMailer(true);
    try {
        //Server settings
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'iictclassscheduleposting@gmail.com';
        $mail->Password = 'isuroxas78';
        $mail->SMTPOptions = array(
            'ssl' => array(
                'verify_peer' => false,
                'verify_peer_name' => false,
                'allow_self_signed' => true
            )
        );
        $mail->SMTPSecure = 'ssl';
        $mail->Port = 465;

        //Send Email
        $mail->setFrom('iictclassscheduleposting@gmail.com');

        //Recipients
        $mail->addAddress($email);
        $mail->addReplyTo('iictclassscheduleposting@gmail.com');
        // sample multi email
        // foreach ($email as $semail) {
        //     $mail->addAddress($semail);
        // }  
        

        //Content
        $mail->isHTML(true);
        $mail->Subject = $subject;
        $mail->Body    = $message;

        $mail->send();

        $_SESSION['result'] = 'Message sent';
        $_SESSION['status'] = 'ok';
    } catch (Exception $e) {
        $_SESSION['result'] = 'Message could not be sent. Mailer Error: ' . $mail->ErrorInfo;
        $_SESSION['status'] = 'error';
    }

    header("location: home.php");
}
