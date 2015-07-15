@extends('site')

@section('conteudo')

	<div class="col-sm-4">
		<img class="lettering" src="/img/programacao/lettering.png" alt="Programação" title="Programação">
    	@include('_menu')
	</div>
	<div class="col-sm-4 descricao-programacao">
		<h4>LOREM IPSUM</h4>
		Dolor sit amet

	</div>
	<div class="col-sm-4">
		<img id="logo-programacao" src="/img/programacao/logo.png">
	</div>
@endsection
