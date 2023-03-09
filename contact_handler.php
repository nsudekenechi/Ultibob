<?php
require './admin/PHPMailer/src/Exception.php';
require './admin/PHPMailer/src/PHPMailer.php';
require './admin/PHPMailer/src/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

function sendMail($name,$companyName,$emailAddress,$phoneNumber,$message){
    $senderemail = "alabahmusic@gmail.com";
    $senderpassword = "vqfrqkykxfnxxqeb";
    $senderFrom = "Ultibob";
    $subject = "Someone Contacted You";
    $sendTo="nsudekenechi2@gmail.com";
    $body=file_get_contents("./EmailResponse.html");
    $body = str_replace(["{Name}","{Company Name}","{Email Address}","{Phone Number}","{Message}"],[$name,$companyName,$emailAddress,$phoneNumber,$message],$body);


    $mail = new PHPMailer(true);
    //Server settings
    // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = $senderemail;                     //SMTP username
    $mail->Password   = $senderpassword;                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom("$senderemail", "$senderFrom");
    //Add a recipient
    $mail->addAddress($sendTo);
    $mail->addReplyTo($emailAddress);
    //Content
    $mail->isHTML(true);
    $mail->Subject = $subject;
    $mail->Body    = $body;
    if ($mail->send()) {
        return true;
    }
}
if(isset($_POST["Submit"])){
    $POST=filter_var_array($_POST,FILTER_SANITIZE_STRING);
    extract($POST);
    if(sendMail($name,$companyName,$emailAddress,$phoneNumber,$message)){
        header("Location:./contactus.php");
    }else{
        header("Location:./index.php");
    }
}