@extends('layouts.register')
@section('content')

<div class="page-wrapper bg-gra-03 p-t-15 p-b-100 font-poppins">
    <div class="wrapper wrapper--w900">
        <div class="card card-4">
            <div class="card-body">
                <form method="POST">

                    <div class="questions">Elige la categoría de tu servicio de música:</div>
                        <select name="Music_categories" id="musicCetegories" class="select_register_medium" >
                            <!-- here is the list from laravel of the Music cathegories table -->
                        </select>
                    <div class="p-b-15"></div>
                    <div class="questions">¿Qué servicios ofreces?</div>

                    <div class="p-b-15"></div>
                    <div class="questions">¿Como se ofrece tu servicio?</div>
                    <select class="select_register_medium" name="article type">
                        <option value ="product"><h6>Por Paquete</h6></option>
                        <option value ="service"> Por Hora</option>
                        <option value ="both">Ambos</option>
                    </select>
                    <div class="p-b-100"></div>
                    <div class="p-b-15 center">
                        <button class="btn2 btn--radius-2 btn-feval" type="button" href=#>Regresar</button>
                        <button class="btn2 btn--radius-2 btn-feval" type="button" href=#>Continuar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<@script>
$(document).ready(function(){
    $('#service').select2({
        placeholder:"Servicios"
    });
});
</@script>

@endsection
