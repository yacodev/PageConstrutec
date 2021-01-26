
/*-------date--------*/
var mounth = ["Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre"];
var date=new Date();
const datePage = document.getElementById("datePage")
datePage.textContent = date.getDate() + " de " + mounth[date.getMonth()] + " de " + date.getFullYear();

