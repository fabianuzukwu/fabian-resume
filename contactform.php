<?php

use PHPMailer\PHPMailer\PHPMailer;

if (isset($_POST['name']) && isset($_POST['email'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];

    require_once "PHPMailer/PHPMailer.php";
    require_once "PHPMailer/SMTP.php";
    require_once "PHPMailer/Exception.php";

    $mail = new PHPMailer();
    //    smtp settings
    $mail->isSMTP();
    $mail->Host= "ssl://smtp.gmail.com";
    $mail->SMTPAuth = true;
    $mail->Username = "mayorogbanna@gmail.com";
    $mail->Password = "07033726470";
    $mail->Port = 587;
    $mail->SMTPSecure = "ssl";

    // email settings
    $mail->isHTML(true);
    $mail->setFrom($email);
    $mail->addAddress("mayorogbanna@gmail.com");
    $mail->Subject = ("$email ($subject)");
    $mail->Body = $message;

    if ($mail->send()) {
        $status = "success";
        $response = "Email Sent!";
    } else {
        $status = "failed";
        $response = "Something is wrong: <br>" .  $mail->ErrorInfo;
    }
    exit(json_encode(array("status" => $status, "response" => $response)));
}
?>