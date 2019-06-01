$(document).ready(function(){
    validate();
 })
function validate ()
{
var articletype = document.getElementById("article_type");
if (articletype == "Selecciona...")
{
    alert("Porfavor seleccione");
    return false;
}
else
{
    return true;
}
}

