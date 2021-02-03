function culqi() {
  if (Culqi.token) { 
    // object token success 
    var token = Culqi.token.id;
    var email = Culqi.token.email;
    var price = ""
    var product = "cpip";
    if (valor ==1){
      price=5000;
    }else{
      price = 10000;
    }
    var data ={product: product, price:price, token:token, email: email};
    var url ="proceso.php";
    $.post(url,data,function(res){
    alert("pago realizado exitosamente");
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