<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <script type="text/javascript" src="./jquery/jQuery.js"></script>
  <script src="https://checkout.culqi.com/js/v3"></script>
</head>
<body>
  <button type="button" id="buyButton" data-product="Software CPIP" data-price=10000>Pagar</button>
  <script>
    Culqi.publicKey = 'pk_test_iaBHPILo7y7ZWArp';
    var product = "";
    var preci = "";
    $('#buyButton').on('click', function(e) {
      product = $(this).attr('data-product');
      price = $(this).attr('data-price');
      Culqi.settings({
      title: 'Construtec',
      currency: 'PEN',
      description: product,
      amount: price
      });
    // Abre el formulario con la configuración en Culqi.settings
      Culqi.open();
      e.preventDefault();
  });
  function culqi() {
    if (Culqi.token) { // ¡Objeto Token creado exitosamente!
      var token = Culqi.token.id;
      var email = Culqi.token.email;
      var data ={product: product, price:price, token:token, email: email};
      var url ="proceso.php";
      $.post(url,data,function(res){
        alert(res);
      })
      /* alert('Se ha creado un token:' + token); */
      //En esta linea de codigo debemos enviar el "Culqi.token.id"
      //hacia tu servidor con Ajax
    } else { // ¡Hubo algún problema!
      // Mostramos JSON de objeto error en consola
      console.log(Culqi.error);
      alert(Culqi.error.user_message);
    }
  };
  </script>
  
</body>
</html>
