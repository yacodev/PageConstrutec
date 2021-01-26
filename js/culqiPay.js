Culqi.publicKey = 'pk_test_iaBHPILo7y7ZWArp';
var product = "";
var price = "";
$('#buyButton').on('click', function(e) {
  product = $(this).attr('data-product');
  price = $(this).attr('data-price');
  Culqi.settings({
    title: 'Construtec',
    currency: 'PEN',
    description: product,
    amount: price
  });
  /*open the form with settings of culqi*/
  Culqi.open();
  e.preventDefault();
  });
  /*------Generate token---*/
function culqi() {
  if (Culqi.token) { 
    // object token success 
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
}