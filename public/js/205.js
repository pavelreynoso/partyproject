$(document).ready(function() {
    $("#compliance1").on( "click", function() {
        if($( "#compliance1:checked" ).length == 1 && $( "#compliance2:checked" ).length == 1)
        {
            $('#continue').prop('disabled', false);
        }
        else
        {
            $('#continue').prop('disabled', true);
        }
    });
    $("#compliance2").on( "click", function() {
        if($( "#compliance1:checked" ).length == 1 && $( "#compliance2:checked" ).length == 1)
        {
            $('#continue').prop('disabled', false);
        }
        else
        {
            $('#continue').prop('disabled', true);
        }
    });
});
