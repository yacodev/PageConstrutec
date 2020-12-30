<?php
if (isset($_POST['send'])){
  if (!empty($_POST['name'])&&!empty($_POST['mail'])&&!empty($_POST['phone'])&&!empty($_POST['message'])){
    $name = $_POST['name'];
    $email = $_POST['mail'];
    $phone = $_POST['phone'];
    $asunto='Formulario de contacto';
    $message = $_POST['message'];
    $header = "From:moncar56@hotmail.com"."\n\r";
    $header .= "Reply-To:moncar56@hotmail.com"."\n\r";
    $header .= "X-Mailer:PHP".phpversion();
    $mail = mail($email,$asunto, $message,$header);
    if($mail){
      echo "<h4>Mail enviado existosamente</h4>";
    }
  }
}