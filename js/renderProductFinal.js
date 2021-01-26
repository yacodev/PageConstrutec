/*------transfer variable----*/
var url = window.location.href;
url = unescape(url);
url = url.toUpperCase();
console.log(url);
function obtener_valor(variable){
  var variable_may = variable.toUpperCase();
  var variable_pos = url.indexOf(variable_may);
  if (variable_pos != -1){
    var pos_separador = url.indexOf("&", variable_pos);
      if (pos_separador != -1){
        return url.substring(variable_pos + variable_may.length + 1, pos_separador);
      } else
        {
        return url.substring(variable_pos + variable_may.length + 1, url.length);
        }
    } else{
      return "NO_ENCONTRADO";
    }
}
var valor = obtener_valor("selectProduct");
const priceProduct = document.getElementById("priceProduct");
const detailProduct = document.getElementById("detailProduct");

if(valor == 1){
  priceProduct.textContent = "S/. 50.00";
  detailProduct.textContent = "Usted esta adquiriendo la licencia anual"
}
if (valor== 2){
  priceProduct.textContent = "S/. 100.00";
  detailProduct.textContent = "Usted esta adquiriendo la licencia de por vida"

}