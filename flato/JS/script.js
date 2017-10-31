function add_in_tabela(){
   var tb = document.getElementById("tabela_zulu")
   var pozita = document.getElementById("add_button").value;
   document.getElementById("count").value++
   var abc = "<tr><td><input type=\"text\" class=\"pos\"  value=\"Pos. "+pozita+"\" name=\"\"></td><td><div contentEditable=\"true\"  id=\"size\"></div> </td><td> <input type=\"number\"class=\"cmimi\" onkeyup=\"display_sum("+pozita+")\" id=\"n1"+pozita+"\" class=\"sasia\" placeholder=\"Anzahl\" name=\"\"></td><td> <input type=\"text\" class=\"njesia\" placeholder=\"Einheit\" name=\"\"></td><td> <input type=\"number\" id=\"n2"+pozita+"\" class=\"cmimi\" placeholder=\"Einzelpreis\" name=\"\" onkeyup=\"display_sum("+pozita+")\"></td><td align=\"center\"><input type=\"text\"  class=\"cmimi\" id=\"result"+pozita+"\" disabled><td style=\"border: 0;\"><input type=\"button\"  id=\"delete\" value=\"X\" onclick=\"deleteRow(this)\"></input></td></tr>"
   document.getElementById("add_button").value = ++pozita
   tb.insertAdjacentHTML('beforeend', abc);
}
//------------------------------------------------------------------------------------------
//Metoda per fshirjen e row ne  tabele
function deleteRow(r) {
    var i = r.parentNode.parentNode.rowIndex;
    document.getElementById("tabela_zulu").deleteRow(i);
}
//-------------------------------------------------------------------------------------------
// When the user clicks on the button, scroll to the top of the document
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("scroll").style.display = "block";
    } else {
        document.getElementById("scroll").style.display = "none";
    }
}
function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}

//---------------------------------------------------------------------------------------------


function display_sum(pos){
   var nr1 = document.getElementById("n1"+pos).value
   var nr2 = document.getElementById("n2"+pos).value
   var res = document.getElementById("result"+pos)
   var abc = nr1 * nr2;
   res.value = numberWithCommas(abc);
   addGeneralNumbers();
}
function addGeneralNumbers(){
   var c = document.getElementById("count").value;


   var general_price = document.getElementById("general_price")
   general_price.value = 0;
   var general_price_withPRC = document.getElementById("general_price_withPRC")
   var all_price = document.getElementById("all_price")

   for(i=1;i<=c;i++){
       var res = document.getElementById("result"+i)
       console.log(+parseFloat(clearNR(general_price.value)) + +parseFloat(clearNR(res.value)));
       general_price.value = clearNR(general_price.value) + +clearNR(res.value);
   }
      
}
/*
general_price
general_price_withPRC
all_price
*/
function clearNR(nr){
   return nr.replace(/'/, '');
}
function numberWithCommas(x) {
    var parts = x.toString().split(".");
    parts[0] = parts[0].replace(/\B(?=(\d{3})+(?!\d))/g, ",");
    return parts.join(".");
}