<?php
$name = $_POST['name'];
$mail = $_POST['mail'];
$phone = $_POST['phone'];

$header = 'From:'.$mail."\r\n";
$header .= "X-Mailer:PHP/".phpversion()."\r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type:text/plain";

$message = "Este mensaje fue enviado por:" .$name."\r\n";
$message .= "Su e-mail es:".$mail."\r\n";
$message .=  "Teléfono de contacto:".$phone."\r\n";
$message .= "Enviado el:".date('d/m/Y',time());

$para ='cyaco33@gmail.com';
$asunto = 'venta del cpip';
mail($para,$asunto, utf8_decode($message),$header);
echo "<script type='text/javascript'>";
echo "window.history.back()";
echo "</script>";
?>