<?php
require_once("../db/config.php");
require_once("./function_handler.php");
require '../PHPMailer/src/Exception.php';
require '../PHPMailer/src/PHPMailer.php';
require '../PHPMailer/src/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;



//Create Blog
if (isset($_POST["create_blog"])) {
    $POST = filter_var_array($_POST, FILTER_SANITIZE_STRING);
    extract($POST);
    $blog_name = ucwords($blog_name);
    $replacedName = str_replace(" ", "", $blog_name) . rand(0, 100);
    $blog_id = generateId(5);
    $blog_image = imageHandler("blog_img", $blog_id);
    $date = date("d M Y");
    $time = date("g:i A");
    $blog_date = json_encode([$date, $time]);

    if ($blog_image != false) {
        $query = "INSERT INTO `create_blog`( `blog_id`, `blog_title`, `blog_image`, `blog_description`, `blog_admin`, `blog_date`) VALUES ('$blog_id','$blog_name','$blog_image','$blog_description','$username','$blog_date')";

        $result = mysqli_query($conn, $query);
        if ($result) {
            location(true, "createblog.php", "add");
        } else {
            location(false, "createblog.php", "add");
        }
    } else {
        location(false, "createblog.php", "add");
    }
}

// Add an admin
if (isset($_POST["add_admin"])) {
    $POST = filter_var_array($_POST, FILTER_SANITIZE_STRING);
    extract($POST);
    $adminUsername = "ADMIN" . generateId(4);
    $adminPassword = generateId(8);
    $adminId = generateId(6);
    $hashPassword = password_hash($adminPassword, PASSWORD_DEFAULT);
    $adminType = "Low";

    $query = "INSERT INTO `login`( `admin_id`, `admin_username`, `admin_email`, `admin_password`, `admin_type`) VALUES ('$adminId','$adminUsername','$admin_email','$hashPassword','Low')";
    $result = mysqli_query($conn, $query);
    $sendMail = sendmail($admin_email, $adminUsername, $adminPassword);
    if ($result && $sendMail) {
        location(true,"add_admin.php","add");
    }else{
        location(false,"add_admin.php","add");
    }
}


function sendmail($email, $adminUsername, $password)
{
    $senderemail = "alabahmusic@gmail.com";
    $senderpassword = "vqfrqkykxfnxxqeb";
    $senderFrom = "ultiblob";
    $subject = "Admin at ultiblob blog";

    $body = file_get_contents("../emailtoadmin.html");
    $body = str_replace(["(Heading)", "(SubHeading)", "{{username}}", "{{password}}", "{Footer Info}"], ["You were chosen as an admin at ultiblob Blog", "Here is your login details", $adminUsername, $password,  "Your can change the username and password later,please keep your password secret,ignore this if it doesn't concern you"], $body);


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
    $mail->addAddress($email);

    //Content
    $mail->isHTML(true);
    $mail->Subject = $subject;
    $mail->Body    = $body;
    if ($mail->send()) {
        return true;
    }
}