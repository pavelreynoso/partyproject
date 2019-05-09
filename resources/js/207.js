$(document).ready(function() {
    var date = new Date();
    var d = date.getDate();
    var m = date.getMonth();
    var y = date.getFullYear();
    $('#calendar').fullCalendar({
            events: function(start, end, timezone, callback) {
                $.ajax({
                  url: '/dashboard/eventos_difusion/cargarEventos',
                  dataType: 'json',
                  success: function(doc) {
                    var events = [];
                    $.each(doc, function(i, item) {
                        events.push({
                            title: item.descripcion,
                            start: item.inicio,
                            end: item.fin,
                            id: item.id
                          });
                    });
                    callback(events);
                  }
                });
              },
            eventClick: function(calEvent, jsEvent, view) {
                editar(calEvent.id);
            },
            viewRender: function(view){
              $('.fc-day').filter(
                function(index){
                return moment( $(this).data('date') ).isBefore(moment(),'day')// && !$(this).hasClass('fc-other-month')
              }).addClass('fc-disabled');
              $('.fc-day-number').filter(
                function(index){
                return moment( $(this).data('date') ).isBefore(moment(),'day')
              }).addClass('fc-other-month');
            },
            dayClick: function(date, jsEvent, view) {
              if(moment(date).isBefore(moment(),'day')) {
                _toast('alerta', 'Selecciona una fecha posterior a hoy')
              } else {
                agregar(date.format())
              }
            },
            eventDrop: function( event, delta, revertFunc, jsEvent, ui, view ) {
              if(moment(event.start.format()).isBefore(moment(),'day')) {
                _toast('alerta', 'Selecciona una fecha posterior a hoy')
                revertFunc()
              } else {
                modificarFecha(event.id, event.start.format(), event.end.format(), revertFunc)
              }
            },
            header: {
                left: 'prev,next today',
                center: 'title',
                right: 'month,agendaWeek,agendaDay'
            },
            editable: true,
        });
});

function agregar(fecha = null){
    if (!fecha)
    {
        date = new Date();
        fecha = date.getFullYear() + "-" + (date.getMonth()+1) + "-" + date.getDate();
    }
  _mostrarFormulario("/dashboard/eventos_difusion/create/"+fecha, //Url solicitud de datos
    "#modal_1", //Div que contendra el modal
    "#modal-crear", //Nombre modal
    "#name", //Elemento al que se le dara focus
    function(){
            $('.clockpicker').clockpicker();

            $('#inicio_fecha').datepicker({  format: "yyyy-mm-dd" });

            $('#fin_fecha').datepicker({  format: "yyyy-mm-dd" });

        }, //Funcion para el success
    "#form-agregar", //ID del Formulario
    "#carga-agregar", //Loading de guardar datos de formulario
    "#div-notificacion", //Div donde mostrara el error en caso de, vacio lo muestra en toastr
    function(){
        $('#modal-crear').modal('hide');
        $('#calendar').fullCalendar('refetchEvents');
    });//Funcion en caso de guardar correctamente);
}

function editar(id){
  _mostrarFormulario("/dashboard/eventos_difusion/"+id+"/edit/", //Url solicitud de datos
    "#modal_1", //Div que contendra el modal
    "#modal-crear", //Nombre modal
    "#name", //Elemento al que se le dara focus
    function(){
            $('.clockpicker').clockpicker();

            $('#inicio_fecha').datepicker({  format: "yyyy-mm-dd" });

            $('#fin_fecha').datepicker({  format: "yyyy-mm-dd" });

        }, //Funcion para el success
    "#form-agregar", //ID del Formulario
    "#carga-agregar", //Loading de guardar datos de formulario
    "#div-notificacion", //Div donde mostrara el error en caso de, vacio lo muestra en toastr
    function(){
        $('#modal-crear').modal('hide');
        $('#calendar').fullCalendar('refetchEvents');
    });//Funcion en caso de guardar correctamente);
}

function eliminar(id)
{
  _mostrarFormulario("/dashboard/eventos_difusion/"+id+"/delete/", //Url solicitud de datos
        "#modal_2", //Div que contendra el modal
        "#modal-eliminar", //Nombre modal
        "", //Elemento al que se le dara focus una vez cargado el modal
        function(){
            $('body').addClass("modal-open");
            $('body').addClass("no-padding-right");
            $('#modal-crear').modal('hide');
            }, //Funcion para el success
        "#form-eliminar", //ID del Formulario
        "#carga-eliminar", //Loading de guardar datos de formulario
        "#div-respuesta", //Div donde mostrara el error en caso de, vacio lo muestra en toastr
        function(){
            $('#modal-eliminar').modal('hide');
            $('#calendar').fullCalendar('refetchEvents');
        });//Funcion en caso de guardar correctamente);
}

function modificarFecha(id, inicio, fin, revertFunc){
    _cargarVista('modal_1', '/dashboard/eventos_difusion/'+id+'/modificarFecha', data = {'inicio' : inicio, 'fin' : fin},
      function (){
        $('#modal-success').modal('show');
      },
      function (){
        revertFunc();
      });
}
