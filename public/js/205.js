$(document).ready(function() {
    $("#compliance").on( "click", function() {
        if($( "#compliance:checked" ).length == 1)
        {
            $('#continue').prop('disabled', false);
        }
        else
        {
            $('#continue').prop('disabled', true);
        }
    });
});
