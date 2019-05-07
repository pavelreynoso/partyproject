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



 $(document).ready(function(){
    maxquantityHours();
 })

 function maxquantityHours()
 {
   for (var a = 1; a <= 10; a++)
   {
     $("#maxquantityHours").append( $("<option></option>").attr("value", a).text(a));
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

/*--Calendar*/

class Calendar {

    constructor () {
      this.monthDiv = document.querySelector('.cal-month__current')
      this.headDivs = document.querySelectorAll('.cal-head__day')
      this.bodyDivs = document.querySelectorAll('.cal-body__day')
      this.nextDiv = document.querySelector('.cal-month__next')
      this.prevDiv = document.querySelector('.cal-month__previous')
    }

    init () {
      moment.locale(window.navigator.userLanguage || window.navigator.language)

      this.month = moment()
      this.today = this.selected = this.month.clone()
      this.weekDays = moment.weekdaysShort(true)

      this.headDivs.forEach((day, index) => {
        day.innerText = this.weekDays[index]
      })

      this.nextDiv.addEventListener('click', _ => { this.addMonth() })
      this.prevDiv.addEventListener('click', _ => { this.removeMonth() })

      this.bodyDivs.forEach(day => {
        day.addEventListener('click', e => {
          const date = +e.target.innerHTML < 10 ? `0${e.target.innerHTML}` : e.target.innerHTML

          if (e.target.classList.contains('cal-day__month--next')) {
            this.selected = moment(`${this.month.add(1, 'month').format('YYYY-MM')}-${date}`)
          } else if (e.target.classList.contains('cal-day__month--previous')) {
            this.selected = moment(`${this.month.subtract(1, 'month').format('YYYY-MM')}-${date}`)
          } else {
            this.selected = moment(`${this.month.format('YYYY-MM')}-${date}`)
          }

          this.update()
        })
      })

      this.update()
    }

    update () {
      this.calendarDays = {
        first: this.month.clone().startOf('month').startOf('week').date(),
        last: this.month.clone().endOf('month').date()
      }

      this.monthDays = {
        lastPrevious: this.month.clone().subtract(1,'months').endOf('month').date(),
        lastCurrent: this.month.clone().endOf('month').date()
      }

      this.monthString = this.month.clone().format('MMMM YYYY')

      this.draw()
    }

    addMonth () {
      this.month.add(1, 'month')

      this.update()
    }

    removeMonth () {
      this.month.subtract(1, 'month')

      this.update()
    }

    draw () {
      this.monthDiv.innerText = this.monthString

      let index = 0

      if (this.calendarDays.first > 1) {
        for (let day = this.calendarDays.first; day <= this.monthDays.lastPrevious; index ++) {
          this.bodyDivs[index].innerText = day++

          this.cleanCssClasses(false, index)

          this.bodyDivs[index].classList.add('cal-day__month--previous')
        }
      }

      let isNextMonth = false
      for (let day = 1; index <= this.bodyDivs.length - 1; index ++) {
        if (day > this.monthDays.lastCurrent) {
          day = 1
          isNextMonth = true
        }

        this.cleanCssClasses(true, index)

        if (!isNextMonth) {
          if (day === this.today.date() && this.today.isSame(this.month, 'day')) {
            this.bodyDivs[index].classList.add('cal-day__day--today')
          }

          if (day === this.selected.date() && this.selected.isSame(this.month, 'month')) {
            this.bodyDivs[index].classList.add('cal-day__day--selected')
          }

          this.bodyDivs[index].classList.add('cal-day__month--current')
        } else {
          this.bodyDivs[index].classList.add('cal-day__month--next')
        }

        this.bodyDivs[index].innerText = day++
      }
    }

    cleanCssClasses (selected, index) {
      this.bodyDivs[index].classList.contains('cal-day__month--next') &&
        this.bodyDivs[index].classList.remove('cal-day__month--next')
      this.bodyDivs[index].classList.contains('cal-day__month--previous') &&
        this.bodyDivs[index].classList.remove('cal-day__month--previous')
      this.bodyDivs[index].classList.contains('cal-day__month--current') &&
        this.bodyDivs[index].classList.remove('cal-day__month--current')
      this.bodyDivs[index].classList.contains('cal-day__day--today') &&
        this.bodyDivs[index].classList.remove('cal-day__day--today')
      if (selected) {
        this.bodyDivs[index].classList.contains('cal-day__day--selected') &&
          this.bodyDivs[index].classList.remove('cal-day__day--selected')
      }
    }
  }

  const cal = new Calendar()
  cal.init()

})(jQuery);


