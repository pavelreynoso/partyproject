@extends('layouts.register')
@section('content')

<div class="page-wrapper bg-gra-03 p-t-15 p-b-100 font-poppins">
    <div class="wrapper wrapper--w900">
        <div class="card card-4">
            <div class="card-body">
                <form method="POST">

                    <div class="questions">Elige la categoría de tu servicio banquetes y bebidas</div>


                        <select name="catering_categories" id="cateringCetegories" class="select_register_medium" style="color:black">
                                <!-- here is the list from laravel of the Music categories table with select2 -->
                                @foreach ($cateringcategories as $cateringcategory)
                                    <option value="{{ $cateringcategory->id }}">{{$cateringcategory->type}}</option>
                                @endforeach
                        </select>
                                <!--here is the code for the loop through Catering services-->
                        <div class="questions">
                            @foreach ($cateringcategories as $cateringcategory)
                                <div class="checkbox checkbox-primary">
                                    <input id="cateringcathegory" type="checkbox">
                                    <label for="cateringcathegory">
                                    <h6><option value=>{{$cateringcategory->type}} </option></h6>
                                    </label>
                                </div>
                            @endforeach
                        </div>
                    <div class="p-b-100"></div>
                    <div class="p-b-15 center">
                        <a href="{{ route('100') }}">
                            <button class="btn2 btn--radius-2 btn-feval" type="button" href=#>Regresar</button>
                        </a>
                        <a href="{{ route('201') }}">
                            <button class="btn2 btn--radius-2 btn-feval" type="button" href=#>Continuar</button>
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


@endsection
