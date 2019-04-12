(function ($) {
    'use strict';
    /*==================================================================
        [ Daterangepicker ]*/
    try {
        $('.js-datepicker').daterangepicker({
            "singleDatePicker": true,
            "showDropdowns": true,
            "autoUpdateInput": false,
            locale: {
                format: 'DD/MM/YYYY'
            },
        });

        var myCalendar = $('.js-datepicker');
        var isClick = 0;

        $(window).on('click',function(){
            isClick = 0;
        });

        $(myCalendar).on('apply.daterangepicker',function(ev, picker){
            isClick = 0;
            $(this).val(picker.startDate.format('DD/MM/YYYY'));

        });

        $('.js-btn-calendar').on('click',function(e){
            e.stopPropagation();

            if(isClick === 1) isClick = 0;
            else if(isClick === 0) isClick = 1;

            if (isClick === 1) {
                myCalendar.focus();
            }
        });

        $(myCalendar).on('click',function(e){
            e.stopPropagation();
            isClick = 1;
        });

        $('.daterangepicker').on('click',function(e){
            e.stopPropagation();
        });


    } catch(er) {console.log(er);}
    /*[ Select 2 Config ]
        ===========================================================*/

    try {
        var selectSimple = $('.js-select-simple');

        selectSimple.each(function () {
            var that = $(this);
            var selectBox = that.find('select');
            var selectDropdown = that.find('.select-dropdown');
            selectBox.select2({
                dropdownParent: selectDropdown
            });
        });

    } catch (err) {
        console.log(err);
    }

     /*-----js for the list of hours----------*/

    $(document).ready(function(){
        minquantityhours();
     })

     function minquantityhours()
     {
       for (var i = 1; i <= 10; i++)
       {
         $("#minquantityhours").append( $("<option></option>").attr("value", i).text(i));
        }
     }



     $(document).ready(function(){
        maxquantityhours();
     })

     function maxquantityhours()
     {
       for (var a = 1; a <= 10; a++)
       {
         $("#maxquantityhours").append( $("<option></option>").attr("value", a).text(a));
        }
     }
/*-----end of js for the list of hours from 1 to 10----------*/

/*-----js for checked box in 210---------No funciona*/

var x = document.getElementById("Yes_Special_hourly_price");
var y = document.getElementById("Yes_Special_hourly_price");
if(x.checked){
    y.disabled = true;
}
if(y.checked){
    x.disabled = true;
}
else{

}
/*-----end of js for checked box in 210---------*/
function count(){
    var el;                                                    

    function countCharacters() {                                    
    var textEntered, countRemaining, counter;          
    textEntered = document.getElementById('package_description').value;  
    counter = (140 - (textEntered.length));
    countRemaining = document.getElementById('charactersRemaining'); 
    countRemaining.textContent = counter;       
    }
    el = document.getElementById('package_description');                   
    el.addEventListener('keyup', countCharacters, false);
}
})(jQuery);

