import selectProduct from './selectProduct'

/*-------date--------*/
var mounth = ["Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre"];
var date=new Date();
const datePage = document.getElementById("datePage")
datePage.textContent = date.getDate() + " de " + mounth[date.getMonth()] + " de " + date.getFullYear();
/*-------price-------*/
console.log(selectProduct);
const select = true;
const pricePage = document.getElementById("pricePage");
if (select){
  pricePage.textContent = "S/. 100.00"
}else{
  pricePage.textContent = "S/. 50.00"
}
