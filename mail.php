<?php
include('smtp/PHPMailerAutoload.php');
$to="";
$subject="";
$msg="";
echo smtp_mailer($to,$subject,$msg);
function smtp_mailer($to,$subject,$msg){
    $mail = new PHPMailer();
    $mail->IsSMTP();
    $mail->SMTPAuth = true;
    $mail->SMTPSecure = 'tls';
    $mail->Host = "smtp.gmail.com";
    $mail->Port = 587;
    $mail->IsHTML(true);
    $mail->CharSet = 'UTF-8';
    $mail->Username="amitttiwari10@gmail.com";
    $mail->Password="rkgp qhxw swcu xvoo";
    $mail->setFrom("amitttiwari10@gmail.com");
    $mail->Subject = $subject;
    $mail->Body = $msg;
    $mail->AddAddress($to);
    $mail->SMTPOptions= array('ssl'=>array(
        'verify_peer'=>false,
        'verify_peer_name'=>false,
        'allow_self-signed'=>false
    ));
    if(!$mail->Send()){
        echo $mail->ErrorInfo;
    }
}
?>