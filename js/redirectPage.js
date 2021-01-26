//deterner el formulario
function selectBotton(event){
  event.preventDefault();
  console.log('formulario detenido');
  if (optionSelect==1){
    if (valor==1){
      window.location.replace("payDeposit.html?selectProduct=1");
    }
    if (valor==2){
      window.location.replace("payDeposit.html?selectProduct=2");
    }
  }
  if (optionSelect==3){
    if (valor==1){
      window.location.replace("payYape.html?selectProduct=1");
    }
    if (valor==2){
      window.location.replace("payYape.html?selectProduct=2");
    }
  }
}
/*------------------------------------------------*/   
var optionSelect = "";
function siSePudo(text){
  optionSelect = text;
}