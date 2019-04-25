@extends('layouts.dashboard', ['menu' => "Plan Trabajo"])

@section('content')
		<div class="d-flex justify-content-center full-height full-width align-items-center">
			<div class="text-center">
			<h1><br><br><i class="fa fa-frown-o" style="font-size: 135px;" aria-hidden="true"></i></h1>
			<h2 class="semi-bold">El sistema no permite la captura del Plan de Trabajo porque ya se envió.</h2>
			<p class="p-b-10">Haz click <a href="/dashboard">aquí</a> para continuar.
			</p>
			</div>
		</div>
@stop

@section('scripts')

@stop
