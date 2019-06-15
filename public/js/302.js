$(document).ready(function(){
    deliveryanticipation();
 })
function deliveryanticipation()
 {
   for (var a = 0; a <= 15; a++)
   {
     $("#deliveryanticipation").append( $("<option></option>").attr("value", a).text(a));
    }
}
