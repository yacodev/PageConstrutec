<?php
$name = $_POST['name'];
$mail = $_POST['mail'];
$phone = $_POST['phone'];
$city = $_POST['city'];
$department =  $_POST['departament'];
$messageOptional = $_POST['messageOptional'];
$optionBuySelect = $_POST['optionBuySelect'];
$methodPay = $_POST['optionBuySelect'];
$productSelect = $_POST['productSelect'];

switch ($methodPay){
  case "1":
    $methodBuy = " Deposito bancario";
    break;
  case "2":
    $methodBuy = " Tarjeta de credito";
    break;
  case "3":
    $methodBuy = " Pago con Yape";
    break;
  default:
    $methodBuy = " No se pudo identificar el metodo";
}

if ($productSelect=="1"){
  $productBuy = " CPIP suscripcion anual";
}else{
  $productBuy = " CPIP suscripcion de por vida";
}


$header = 'From:'.$mail."\r\n";
$header .= "X-Mailer:PHP/".phpversion()."\r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type:text/plain";

$message = "Este mensaje fue enviado por: " .$name."\r\n";
$message .= "Su e-mail es: ".$mail."\r\n";
$message .=  "Teléfono de contacto: ".$phone."\r\n";
$message .=  "ubicación - ciudad: ".$city."\r\n";
$message .=  "ubicación - departamento: ".$department."\r\n";
$message .=  "mensaje optional: ".$messageOptional."\r\n";
$message .=  "Producto comprado: ".$productBuy."\r\n";
$message .=  "Metodo de pago: ".$methodBuy."\r\n";
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
    header("Location:payTransfer.html?selectProduct=1");
  }else{
    header("Location:payTransfer.html?selectProduct=2");
  }
}
if ($optionBuySelect =="3"){
  if ($productSelect=="1"){
    header("Location:payYape.html?selectProduct=1");
  }else{
    header("Location:payYape.html?selectProduct=2");
  }
}
?>