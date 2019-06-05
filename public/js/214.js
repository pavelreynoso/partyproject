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
