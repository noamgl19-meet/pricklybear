<?php
    $mailto = 'noamg.j2@gmail.com';
    $mailSub ='New Signup To Alpha Group!';
    $mailMsg = $_POST['email'];
   require 'PHPMailer-master/PHPMailerAutoload.php';
   $mail = new PHPMailer();
   $mail ->IsSmtp();
   $mail ->SMTPDebug = 0;
   $mail ->SMTPAuth = true;
   $mail ->SMTPSecure = 'ssl';
   $mail ->Host = "smtp.gmail.com";
   $mail ->Port = 465; // or 587
   $mail ->IsHTML(true);
   $mail ->Username = "einavstory@gmail.com";
   $mail ->Password = "newman12";
   $mail ->SetFrom("PricklyBearLearningPage@gmail.com");
   $mail ->Subject = $mailSub;
   $mail ->Body = $mailMsg;
   $mail ->AddAddress($mailto);

   if(!$mail->Send())
   {
        echo "<script type = 'text/javascript'>alert('בעייה בשליחת הבקשה');</script>";
        echo "<script type = 'text/javascript'>window.location.replace('index.php');</script>";
   }
   else
   {
        echo "<script type = 'text/javascript'>alert('הבקשה נשלחה בהצלחה');</script>";
        echo "<script type = 'text/javascript'>window.location.replace('index.php');</script>";
}
?>