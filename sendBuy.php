<?php
$name = $_POST['name'];
$mail = $_POST['mail'];
$phone = $_POST['phone'];
$optionBuySelect = $_POST['optionBuySelect'];
$productSelect = $_POST['productSelect'];

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
if ($optionBuySelect =="1"){
  if ($productSelect=="1"){
    header("Location:payDeposit.html?selectProduct=1");
  }else{
    header("Location:payDeposit.html?selectProduct=2");
  }
}
if ($optionBuySelect =="2"){
  if ($productSelect=="1"){
    header("Location:contact.html");
  }else{
    header("Location:aboutUs.html");
  }
}
if ($optionBuySelect =="3"){
  if ($productSelect=="1"){
    header("Location:payYape.html?selectProduct=1");
  }else{
    header("Location:payYape.html?selectProduct=2");
  }
}
//echo "<script type='text/javascript'>";
//echo "window.history.back();";
//echo "</script>";

?>