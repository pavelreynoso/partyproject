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
