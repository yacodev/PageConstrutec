<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Finalizar compra-construtec</title>
  <link rel="shortcut icon" type="image/x-icon" href="./images/construtec.ico">
  <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,400;0,700;1,500&family=Inter:wght@300;500&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="./css/styles-header-phone.css">
  <link rel="stylesheet" href="./css/styles-header-tablet-laptop.css" media="(min-width: 768px)">
  <link rel="stylesheet" href="./css/styles-buy.css">
  <link rel="stylesheet" href="./css/styles-buy-tablet-laptop.css" media="(min-width: 769px)">
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
      <form  class="form" id="form_sale" action="" >
        <div class="form__client">
          <h2 class="form__title">Detalles de facturación:</h2>
          <div class="form__container">
            <div class="form__information-required">
              <label class="form__question" for="">Nombres y Apellidos: <span>(*)</span></label>
              <input class="form__answer" name="name" type="text" required>
              <label class="form__question" for="">País: <span>(*)</span></label>
              <label class="form__answer-special" for="">Perú</label>
              <label class="form__question" for="">Región:<span>(*)</span></label>
              <select class="form__answer" name="Departamento" class="form-control" required="">
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
            <div class="form__information-optional">
              <p>Información adicional</p>
              <label class="form__question" for="">Nota del pedido(opcional):</label>
              <textarea class="form__answer form-answer--message"  type="text" name="message" id="message" placeholder="Algo en particular que quieras comentarnos sobre tu pedido."></textarea>
            </div>
          </div>
        </div>
      </form>
    </section>
    <section class="order">
      <div class="order__container">
        <h2 class="order__title">Tu pedido:</h2>
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
      </div>
    </section>
    <section class="pay">
        <h2 class="pay__title">Seleccione tu método de pago:</h2>
      <div class="pay__options">
        <div class="pay__container">
          <div class="pay__option-deposit">
            <div class="pay__option-check">
              <input " type="radio" name="checkbox" id="check-deposit" value="1" onchange="javascript:showContent('deposit')">
              <span>Deposito bancario</span> 
            </div>
            <div class="pay__option-description">
              <p>Puedes pagar con deposito o transferencia bancaria, tenemos cuentas en los siguientes bancos:</p>
              <div class="pay__option-banks">
                <img class="bank-nacion" src="./images/banco_nacion.png" alt="banco de la nacion">
                <img class="bank-interbank" src="./images/banco_interbank.png" alt="Interbank">
                <img class="bank-bbva" src="./images/banco_bbva.png" alt="BBVA">
                <img class="bank-bcp" src="./images/banco_bcp.png" alt="BCP">
              </div>
            </div>
          </div>
          <div class="pay__option-credi-card">
            <div class="pay__option-check">
              <input type="radio" name="checkbox" id="check-transfer" value="1" onchange="javascript:showContent('card')">
              <span>Tarjeta de credito/debito</span> 
            </div>
            <div class="pay__option-description">
              <p>Puedes realizar el pago mediante tu tarjeta de credito y/o debito a través de la plataforma de pagos Culqi</p>
              <img class="option__credit-card" src="./images/credit_card.png" alt="tarjeta de credito">
            </div>
          </div>
          <div class="pay__option-yape">
            <div class="pay__option-check">
              <input  type="radio" name="checkbox" id="check-yape" value="1" onchange="javascript:showContent('yape')"> 
              <span>Mediante Yape</span> 
            </div>
            <div class="pay__option-description">
              <p>Puedes realizar el pago yapeandonos al codgio QR que te proporcionamremos</p>
              <img class="option__yape" src="./images/yape.png" alt="yape" >
            </div>
          </div>
        </div>
      </div>
      <div class="term__condtions">
        <p> Tus datos personales se utilizarán para procesar tu pedido, mejorar tu experiencia en esta web y otros propósitos descritos en nuestra <a href="">política de privacidad.</a></p>
        <div class="term__conditions-text">
          <input class="checkbox-round" form="form_sale" type="checkbox" id="check-term-condition" required>
          <span>He leído y estoy de acuerdo con los <a href="">términos y condiciones</a> de la web</span>
        </div>
      </div>
      <div class="pay__container__button">
        <div class="pay_button-message" id="message__default">
          <button class="button__disable">Continuar</button>
          <p>*Debe seleccionar un metodo de pago</p>
        </div>
        <div class="pay__deposit" id="pay_deposit">
          <button type="submit" form="form_sale" class="button__pay">Realzar pedido</button>
        </div>
        <div class="pay__transfer" id="pay_transfer">
          <button type="button" id="buyButton" data-product="Software CPIP" data-price=10000 class="button__pay">Pagar</button>
        </div>
        <div class="pay__yape" id="pay_yape">
          <button class="button__pay">Pagar con yape</button>
        </div>
      </div>
    </section>
  </main>
  <script type="text/javascript">
    function showContent(option) {
        this.checkOption = option;
        elementDefault = document.getElementById("message__default");
        elementDefault.style.display='none';
        elementDeposit = document.getElementById("pay_deposit");
        checkDeposit = document.getElementById("check-deposit");
        elementTransfer = document.getElementById("pay_transfer");
        checkTransfer = document.getElementById("check-transfer");
        elementYape = document.getElementById("pay_yape");
        checkYape = document.getElementById("check-yape");
        switch (this.checkOption){
          case 'deposit':
            console.log('opcion 1');
            if (checkDeposit.checked) {
              elementDeposit.style.display='block';
              elementTransfer.style.display='none';
              elementYape.style.display='none';
              }
            else {
              elementDeposit.style.display='none';
            }
            break;
          case 'card':
            console.log('opcion 2');
            if (checkTransfer.checked) {
              elementTransfer.style.display='block';
              elementDeposit.style.display='none';
              elementYape.style.display='none';
              }
            else {
              elementTransfer.style.display='none';
            }
            break;
          case 'yape':
            console.log('opcion 3');
            if (checkYape.checked) {
              elementDeposit.style.display='none';
              elementYape.style.display='block';
              elementTransfer.style.display='none';
              }
            else {
              elementYape.style.display='none';
            }
            break;
        } 
        
        
    }
  </script>
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
  <footer>
    <h2>¿Hablamos en redes?</h2>
    <p>Quieres contactarnos, te esperamos en redes sociales:</p>
    <div class="footer-redSocial">
      <table>
        <tr>
          <td class="footer-redSocial-whatsApp"><a href="http://bit.ly/WhatsAppConstrutec" target="_blank"><span></span>WhatsApp</a></td>
          <td class="footer-redSocial-facebook"><a href="https://www.facebook.com/ConstrutecPeru3" target="_blank"><span></span>Facebook</a></td>
          <td class="footer-redSocial-youtube"><a href="https://www.youtube.com/channel/UCuquY3djKK46Enk6MNKIulw" target="_blank"><span></span>Youtube</a></td>
        </tr>
      </table>
    </div>
    <div class="autorRight">
      <p>® Construtec Perú 2021</p>
    </div>
  </footer>
</body>
</html>
