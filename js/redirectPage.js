//deterner el formulario
function selectBotton(event){
  console.log("hoaa")
  //event.preventDefault();
  console.log('formulario detenido');
  if (optionSelect==1){
    if (valor==1){
      window.location.href='payDeposit.html?selectProduct=1';
    }
    if (valor==2){
      window.location.href='payDeposit.html?selectProduct=2';
    }
  }
  if (optionSelect ==2){
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
  }

  if (optionSelect==3){
    if (valor==1){
      window.location.replace("payYape.html?selectProduct=1");
    }
    if (valor==2){
      window.location.replace("payYape.html?selectProduct=2");
    }
  }
  //document.getElementById("form_sale").submit();
}
/*------------------------------------------------*/   
var optionSelect = "";
function varButton(text){
  optionSelect = text;
}