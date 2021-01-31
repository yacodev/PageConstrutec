let controlerTerm = 0;
const divTermconditions = document.getElementById("term__conditions-information");
function viewTerm(event){
  event.preventDefault();
  if (controlerTerm == 0 ){
    divTermconditions.style.display = 'block';
    controlerTerm =1;
  }else{
    controlerTerm =0;
    divTermconditions.style.display = 'none';
  }
}
function hideTermConditions(){
  divTermconditions.style.display = 'none';
}