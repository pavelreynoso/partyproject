$(document).ready(function(){
    minhoursoffer();
 })
function minhoursoffer()
 {
   for (var a = 1; a <= 10; a++)
   {
     $("#minhoursoffer").append( $("<option></option>").attr("value", a).text(a));
    }
}
