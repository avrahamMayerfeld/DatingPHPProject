
<?php
require 'PHPMailer-master/PHPMailerAutoload.php';
$mail = new PHPMailer;
$mail->isSMTP();
$mail->SMTPSecure = 'ssl';
$mail->SMTPAuth = true;
$mail->Host = 'smtp.gmail.com';
$mail->Port = 465;
$mail->Username = 'webproginstr@gmail.com';
$mail->Password = '1SPIDERman1!';
$mail->setFrom =$_POST["email"];
$mail->addAddress('webproginstr@gmail.com');

$mail->Body = $_POST["message"] ;
//send the message, check for errors
if (!$mail->send()) {
    echo "ERROR: " . $mail->ErrorInfo;
} else {
    echo "SUCCESS";
}
