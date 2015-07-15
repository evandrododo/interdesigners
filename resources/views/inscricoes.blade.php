@extends('site')

@section('conteudo')

	<div class="col-sm-4">
		<img class="lettering" src="/img/inscricoes/lettering.png" alt="Inscrições" title="Inscrições">
		@include('_menu')
	</div>
	<div class="col-sm-5 descricao-inscricoes">
		<h4>LOREM IPSUM</h4>
		Dolor sit amet

	</div>
	<div class="col-sm-3">
		<img id="logo-inscricoes" src="/img/inscricoes/logo.png">
	</div>
@endsection
