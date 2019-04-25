@extends('layouts.dashboard', ['menu' => "Dashboard"])

@section('content')
		<div class="d-flex justify-content-center full-height full-width align-items-center">
			<div class="text-center">
			<h1><br><br><i class="fa fa-frown-o" style="font-size: 135px;" aria-hidden="true"></i></h1>
			<h2 class="semi-bold">No tienes permisos para acceder a esta sección</h2>
			<p class="p-b-10">Haz click <a href="/dashboard">aquí</a> para continuar.
			</p>
			</div>
		</div>
@stop

@section('scripts')

@stop
