$(document).ready(function(){
    validate();
 })
function validate ()
{
var cateringcategories = document.getElementsByName("cateringCategories");
if (cateringcategories == "selecciona")
{
    alert("Porfavor seleccione");
    cateringcategories;
    return false;
}
else
{
    return true;
}
}
$(document).ready(function() {
    $("#compliance").on( "click", function() {
        if($( "#compliance:checked" ).length == 1)
        {
            $('#end').prop('disabled', false);
        }
        else
        {
            $('#end').prop('disabled', true);
        }
    });
});
