
 $(document).ready(function(){
    maxquantityHours();
    minquantityHours();
 })
function maxquantityHours()
 {
   for (var a = 1; a <= 10; a++)
   {
     $("#maxquantityhours").append( $("<option></option>").attr("value", a).text(a));
    }
}
function minquantityHours()
 {
   for (var a = 1; a <= 10; a++)
   {
     $("#minquantityhours").append( $("<option></option>").attr("value", a).text(a));
    }
 }

