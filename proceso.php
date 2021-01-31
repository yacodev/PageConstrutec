<?php
require "requests/library/Requests.php";
Requests::register_autoloader();
require "culqi-php/lib/culqi.php";
$SECRET_KEY = "sk_test_C2GZLqsN36o5g2Vm";
$culqi = new Culqi\Culqi(array('api_key' => $SECRET_KEY));

$culqi->Charges->create(
  array(
      "amount" => $_POST['price'],
      "currency_code" => "PEN",
      "email" => $_POST['email'],
      "source_id" => $_POST['token']
    )
  );
exit;