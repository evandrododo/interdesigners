@extends('site')

@section('conteudo')

	<div class="col-sm-4">
		<img class="lettering" src="/img/evento/lettering.png" alt="Evento" title="Evento">
    	@include('_menu')
	</div>
	<div class="col-sm-4 descricao-evento">
		<h4>LOREM IPSUM</h4>
		Dolor sit amet

	</div>
	<div class="col-sm-4">
		<img id="logo-evento" src="/img/evento/logo.png">
	</div>
@endsection
