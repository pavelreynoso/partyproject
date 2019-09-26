$(document).ready(function () {
    validate();
});

function validate() {
    var articletype = document.getElementById("article_type");
    if (articletype == "Selecciona...") {
        alert("Por favor, seleccione alguna opción");
        return false;
    } else {
        return true;
    }
}
