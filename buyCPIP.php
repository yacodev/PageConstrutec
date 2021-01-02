<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Finalizar compra</title>
  <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,400;0,700;1,500&family=Inter:wght@300;500&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="./css/styles-header-phone.css">
  <link rel="stylesheet" href="./css/styles-header-tablet-laptop.css" media="(min-width: 768px)">
  <link rel="stylesheet" href="./css/styles-buy.css">
  <script type="text/javascript" src="./jquery/jQuery.js"></script>
  <script src="https://checkout.culqi.com/js/v3"></script>
</head>
<body>
  <header>
    <div class="header">
      <a href="index.html" class="header__logo">
        <img  src="./images/Logo-construtec-movil-p1.png" alt="Logo Construtec">
      </a>
      <div class="header__menu">
        <input type="checkbox" id="btn-menu">
        <label for="btn-menu">
          <img src="/images/icons8-menu-squared-50.png" alt="menu">
        </label>
        <nav class="header__menu-options">
          <ul>
            <li> <a href="/">Inicio</a></li>
            <li> <a href="/products.html">Productos</a></li>
            <li> <a href="/aboutUs.html">Quienes somos</a></li>
            <li> <a href="/contact.html">Contactanos</a></li>
          </ul>
        </nav>
      </div>
    </div>
  </header>
  <main>
    <section class="client">
      <h1 class="client__title"> Realizar pedido</h1>
      <p class="client__text"> Para realizar un pedido necesitamos que llenes el siguiente formulario y selecciones el método de pago correspondiente.</p>
      <form action="" class="form">
        <div class="form__client">
          <h2>Detalles de facturación:</h2>
          <div class="form__container">
            <div class="form__information-required">
              <label class="form__question" for="">Nombres y Apellidos: <span>(*)</span></label>
              <input class="form__answer" name="name" type="text" required>
              <label class="form__question" for="">País: <span>(*)</span></label>
              <label class="form__answer-special" for="">Perú</label>
              <label class="form__question" for="">Región:<span>(*)</span></label>
              <select class="form__answer" name="Departamento" onchange="cambia()" class="form-control" required="">
                <option value="">Seleccione</option>
                <option value="Amazonas">Amazonas</option>
                <option value="Ancash">Ancash</option>
                <option value="Apurímac">Apurímac</option>
                <option value="Arequipa">Arequipa</option>
                <option value="Ayacucho">Ayacucho</option>
                <option value="Cajamarca">Cajamarca</option>
                <option value="Callao">Callao</option>
                <option value="Cuzco">Cuzco </option>
                <option value="Huancavelica">Huancavelica</option>
                <option value="Huánuco">Huánuco</option>
                <option value="Ica">Ica</option>
                <option value="Junín">Junín</option>
                <option value="La_Libertad">La Libertad</option>
                <option value="Lambayeque">Lambayeque</option>
                <option value="Lima">Lima</option>
                <option value="Loreto">Loreto</option>
                <option value="Madre_de_Dios">Madre de Dios</option>
                <option value="Moquegua">Moquegua</option>
                <option value="Pasco">Pasco</option>
                <option value="Piura">Piura</option>
                <option value="Puno">Puno</option>
                <option value="San_Martín">San Martín</option>
                <option value="Tacna">Tacna</option>
                <option value="Tumbes">Tumbes</option>
                <option value="Ucayali">Ucayali</option>
              </select>
              <label class="form__question" for="">Ciudad:<span>(*)</span></label>
              <input class="form__answer" name="city"  type="text" required>
              <label class="form__question" for="">Telefono:<span>(*)</span></label>
              <input class="form__answer" name="phone"type="number" required>
              <label class="form__question" for="">Dirección de correo electrónico:<span>*</span></label>
              <input class="form__answer" name="mail"type="mail" required>
            </div>
            <div class="form__informatio-optional">
              <p>Información adicional</p>
              <label class="form__question" for="">Nota del pedido(opcional):</label>
              <textarea class="form__answer form-answer--message"  type="text" name="message" id="message" placeholder="Nota sobre tu pedido, nota especial"></textarea>
            </div>
          </div>
        </div>
      </form>
    </section>
    <section class="order">
      <h2 class="order__title">Tu pedido</h2>
      <table class="order__description">
        <tr>
          <th>Producto</th>
          <th>Monto</th>
        </tr>
        <tr>
          <td>Software CPIP (Control de proyectos de inversión)</td>
          <td>S/. 100.00</td>
        </tr>
        <tr>
          <td>
            <span>
              Detalles: <br>
              Usted esta adquiriendo la licencia de por vida.
            </span> 
          </td>
          <td></td>
        </tr>
        <tr>
          <td>Total</td>
          <td>S/.100.00</td>
        </tr>
      </table>
    </section>
    <section class="pay">
      <h2 class="pay__title">Metodos de pago</h2>
      <div class="pay__container">
        <div>
          <input class="pay__option checkbox-round " type="checkbox" id="btn-buy">Transferencia bancaria directa
          <div class="pay__option-information">
            <p>Puedes realizar el pago en una de nuestras siguientes cuentas bancarias y nos envias la foto del comprobante </p>
          </div>
        </div>
        <div>
          <input class="pay__option checkbox-round " type="checkbox" id="btn-buy">Tarjeta de credito/debito
          <div class="pay__option-information">
            <p>Puedes realizar el pago mediante tu tarjeta de credito y/o debito a través de la plataforma de pagos Culqi</p>
          </div>
        </div>
      </div>
    </section>
  </main>
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
