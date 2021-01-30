//habilitar el boton pagar en  funcion del metodo seleccionado
function showContent(option) {
  this.checkOption = option;
  const optionBuySelect = document.getElementById("optionBuySelect");
  const elementDefault = document.getElementById("message__default");
  elementDefault.style.display='none';
  const elementDeposit = document.getElementById("pay_deposit");
  const checkDeposit = document.getElementById("check-deposit");
  const elementTransfer = document.getElementById("pay_transfer");
  const checkTransfer = document.getElementById("check-transfer");
  const elementYape = document.getElementById("pay_yape");
  const checkYape = document.getElementById("check-yape");
  switch (this.checkOption){
    case 'deposit':
      console.log('opcion 1');
      if (checkDeposit.checked) {
        elementDeposit.style.display='block';
        elementTransfer.style.display='none';
        elementYape.style.display='none';
        optionBuySelect.value = "1";
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
        optionBuySelect.value = "2";
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
        optionBuySelect.value = "3";
        }
      else {
        elementYape.style.display='none';
      }
      break;
  } 
}
