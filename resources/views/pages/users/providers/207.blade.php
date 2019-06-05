@extends('layouts.register')

@section('header_css')
<link href="{{asset('https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.css')}}"
    rel="stylesheet" type="text/css">
@endsection

@section('content')
<div class="page-wrapper bg-gra-03 p-t-15 p-b-100 font-poppins">
    <div class="wrapper wrapper--w1500">
        <div class="card card-4">
            <div class="card-header">
                <h2 class="title">Calendario</h2>
            </div>
            <div class="card-body">
                <div class="container">
                    <div class="panel panel-primary">
                        <div class="panel-heading">Disponibilidad</div>
                        <div class="panel-body">
                            @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            {!! Form::open(array('route' => '207.add','method'=>'POST','files'=>'true')) !!}
                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    @if (Session::has('success'))
                                    <div class="alert alert-success">{{ Session::get('success') }}</div>
                                    @elseif (Session::has('warnning'))
                                    <div class="alert alert-danger">{{ Session::get('warnning') }}</div>
                                    @endif
                                </div>
                                <div class="col-xs-4 col-sm-4 col-md-4">
                                    <div class="form-group">
                                        {!! Form::label('name','Event Name:') !!}
                                        <div class="">
                                            {!! Form::text('name', null, ['class' => 'form-control']) !!}
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-3 col-sm-3 col-md-3">
                                    <div class="form-group">
                                        {!! Form::label('start_date','Start Date:') !!}
                                        <div class="">
                                            {!! Form::date('start_date', null, ['class' => 'form-control']) !!}
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-3 col-sm-3 col-md-3">
                                    <div class="form-group">
                                        {!! Form::label('end_date','End Date:') !!}
                                        <div class="">
                                            {!! Form::date('end_date', null, ['class' => 'form-control']) !!}
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xs-1 col-sm-1 col-md-1 text-center"> &nbsp;<br />
                                    {!! Form::submit('Add Event',['class'=>'btn btn-primary']) !!}
                                </div>
                            </div>
                            {!! Form::close() !!}
                        </div>
                    </div>
                    <div class="panel panel-primary">
                        <div class="panel-heading">Detalles</div>
                        <div class="panel-body">
                            {!! $calendar_details->calendar() !!}
                        </div>
                    </div>
                </div>
                <div class="p-b-15 center">
                    <a href="{{ route('202') }}">
                        <button class="btn2 btn--radius-2 btn-feval" type="button" href=#>Regresar</button>
                    </a>
                    <a href="{{ route('204') }}">
                        <button class="btn2 btn--radius-2 btn-feval" type="button" href=#>Continuar</button>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('scripts')
{{!!Html::script('https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.js')!!}
    {!!Html::script('https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment.min.js')!!}
    {!!Html::script('https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/2.2.7/fullcalendar.min.js')!!}
    {!!$calendar_details->script()!!}
@endsection
