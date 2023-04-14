<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';
$error = '';
$name = '';
$email = '';
$message = '';
function clean_text($string)
{
    $string = trim($string);
    $string = stripslashes($string);
    $string = htmlspecialchars($string);
    return $string;
}
if(isset($_POST["submit"])) {
    if (empty($_POST["name"])) {
        $error .= '<p><label class="text-danger">Please Enter your Name</label></p>';
    } else {
        $name = clean_text($_POST["name"]);
        if (!preg_match("/^[a-zA-Z ]*$/", $name)) {
            $error .= '<p><label class="text-danger">Only letters and white space allowed</label></p>';
        }
    }
    if (empty($_POST["email"])) {
        $error .= '<p><label class="text-danger">Please Enter your Email</label></p>';
    } else {
        $email = clean_text($_POST["email"]);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $error .= '<p><label class="text-danger">Invalid email format</label></p>';
        }
    }
    if (empty($_POST["message"])) {
        $error .= '<p><label class="text-danger">Message is required</label></p>';
    } else {
        $message = clean_text($_POST["message"]);
    }
    if ($error == '') {
//     require_once "PHPMailer/SMTP.php";
//        require_once "PHPMailer/Exception.php";
//        require 'PHPMailer/PHPMailer.php';
        $mail = new PHPMailer();

        $mail->IsSMTP();        //Sets Mailer to send message using SMTP
        $mail->Mailer = "smtp";
        $mail->Host = 'smtp.gmail.com';  //Sets the SMTP hosts
//        $mail->SMTPDebug = 1;
        $mail->SMTPAuth = TRUE;
        $mail->SMTPSecure = "tls";
        $mail->Port = 587;
        $mail->Host = "smtp.gmail.com";
        $mail->Username = "moviexsojod@gmail.com";
        $mail->Password = "406699991";
        $mail->IsHTML(true);
        $mail->AddAddress($_POST["email"], $_POST["name"]);
        $mail->SetFrom("moviexsojod@gmail.com", "from-name");
        $mail->Subject = "Test is Test Email sent via Gmail SMTP Server using PHP Mailer";
        $content = $_POST["message"];
        $mail->MsgHTML($content);
        if ($mail->Send()) {
            $error = '<label class="text-success">Thank you for contacting us</label>';
        } else {
            $error = '<label class="text-danger">There is an Error</label>';
        }
        $name = '';
        $email = '';
        $subject = '';
        $message = '';
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>

    <link rel="stylesheet" href="menu.css">


    <link rel="stylesheet" href="variable.css">

    <link rel="stylesheet" href="reset.css">
    <link rel="stylesheet" href="s.css">
    <link rel="shortcut icon" href="logo.png" type="image/png">
    <meta charset="UTF-8">
    <title>MovieX</title>


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body >

<header>
    <div class="m">
        <img src="logo.png" class="logo" width="75">
        <ul style="margin-left: 1000px">
            <li class="l "> <a href="sm.php"><span class="icon"> <i class="fa fa-sign-in" aria-hidden="true"></i></span> <span class="text">Back</span> </a> </li>

            <div class="in"></div>
        </ul>
    </div>
    <script>
        const l=document.querySelectorAll('.l');
        function activelink(){
            l.forEach((item) =>
                item.classList.remove('s1'));
            this.classList.add('s1')
        }
        l.forEach((item) =>
            item.addEventListener('click',activelink));
    </script>
</header>
<section class ="contact">
    <div class="content">
        <h2>Contact User</h2>
        <p style="color:rebeccapurple" ><b> Tell user what do you think ? </b></p>
    </div>
    <div class  ="container">

        <div class="ContactForm">
            <form method="post">
                <h2>Talk to User</h2>
                <div class="inputBox">
                    <input type="text" name="name" required="required">
                    <span> Name</span>
                </div>
                <div class="inputBox">
                    <input type="text" name="email" required="required">
                    <span>Email</span>
                </div>
                <div class="inputBox">
                    <textarea required ="required" name="message"></textarea>
                    <span>Your Message!...</span>
                </div>
                <div class="inputBox">
                    <input type="submit" name="submit" value="send!">
                </div>
            </form>
        </div>
    </div>

</section>
</body>
</html>
