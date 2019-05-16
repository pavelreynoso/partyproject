 $(document).ready(function(){
    maxquantityhours();
    minquantityhours();
 })
function maxquantityhours()
 {
   for (var a = 1; a <= 10; a++)
   {
     $("#maxquantityhours").append( $("<option></option>").attr("value", a).text(a));
    }
}
function minquantityhours()
 {
   for (var a = 1; a <= 10; a++)
   {
     $("#minquantityhours").append( $("<option></option>").attr("value", a).text(a));
    }
 }

