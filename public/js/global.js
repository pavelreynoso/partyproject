var el1;

function countCharacters() {
  var textEntered, countRemaining, counter;
  textEntered = document.getElementById('package_name').value;
  counter = (50 - (textEntered.length));
  countRemaining = document.getElementById('charactersRemainingName');
  countRemaining.textContent = counter;
}
el1 = document.getElementById('package_name');
el1.addEventListener('keyup', countCharacters, false);

var el2;

function countCharacters2() {
  var textEntered, countRemaining, counter;
  textEntered = document.getElementById('package_description').value;
  counter = (200 - (textEntered.length));
  countRemaining = document.getElementById('charactersRemainingDescription');
  countRemaining.textContent = counter;
}
el2 = document.getElementById('package_description');
el2.addEventListener('keyup', countCharacters2, false);

$(document).ready(function(){
    quantityHours();
 })

 function quantityHours()
 {
   for (var i = 1; i <= 10; i++)
   {
     $("#quantityHours").append( $("<option></option>").attr("value", i).text(i));
    }
 }

 $(document).ready(function(){
    maxquantityHours();
 })
function maxquantityHours()
 {
   for (var a = 1; a <= 10; a++)
   {
     $("#maxquantityHours").append( $("<option></option>").attr("value", a).text(a));
    }
 }

     /*-----js for the list of hours----------*/


/*-----end of js for the list of hours from 1 to 10----------*/

/*-----js for checked box in 210---------No funciona*/


var x = document.getElementById("Yes_Special_hourly_price");
var y = document.getElementById("Yes_Special_hourly_price");
if(x.checked){
    y.disabled = true;
}
if(y.checked){
    x.disabled = true;
}
else{

}
/*-----end of js for checked box in 210---------*/


/*-----js for choosing page in 200--------*/
var category=document.getElementById("Música");



})(jQuery);


