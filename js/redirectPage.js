//deterner el formulario
  //event.preventDefault();
    var price = "";
    var product = "";
    if (valor==1){
      price = 5000;
      product="CPIP - licencia anual";
    }
    if (valor==2){
      price = 10000;
      product="CPIP - licencia de por vida"
    }
    Culqi.publicKey = 'pk_test_iaBHPILo7y7ZWArp';
    Culqi.options({
      style: {
        logo: '../images/minilogo-construtec-web.png',
        maincolor: '#1474D2',
        buttontext: '#ffffff',
        maintext: '#4A4A4A',
        desctext: '#4A4A4A'
      }
  });
    Culqi.settings({
    title: 'Construtec',
    currency: 'PEN',
    description: product,
    amount: price
  });
  /*open the form with settings of culqi*/
  Culqi.open();
  //e.preventDefault();
  //});
  //document.getElementById("form_sale").submit();
/*------------------------------------------------*/   

