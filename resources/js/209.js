function maxquantityHours()
 {
   for (var a = 1; a <= 10; a++)
   {
     $("#maxquantityHours").append( $("<option></option>").attr("value", a).text(a));
    }
 }
