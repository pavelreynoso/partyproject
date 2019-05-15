var el1;

function countCharacters() {
  var textEntered, countRemaining, counter;
  textEntered = document.getElementById('package_name').value;
  counter = (50 - (textEntered.length));
  countRemaining = document.getElementById('charactersRemainingName');
  countRemaining.textContent = counter;
}
el1 = document.getElementById('package_name');
el1.addEventListener('keyup', countCharacters, false);

var el2;

function countCharacters2() {
  var textEntered, countRemaining, counter;
  textEntered = document.getElementById('package_description').value;
  counter = (200 - (textEntered.length));
  countRemaining = document.getElementById('charactersRemainingDescription');
  countRemaining.textContent = counter;
}
el2 = document.getElementById('package_description');
el2.addEventListener('keyup', countCharacters2, false);

$(document).ready(function(){
    quantityHours();
 })

 function quantityHours()
 {
   for (var i = 1; i <= 10; i++)
   {
     $("#quantityHours").append( $("<option></option>").attr("value", i).text(i));
    }
 }






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
/*-----js for choosing page in 200--------*/
var category=document.getElementById("Música");



})(jQuery);


