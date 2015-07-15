@extends('site')

@section('conteudo')

	<div class="col-sm-4">
		<img class="lettering" src="/img/simposio/lettering.png" alt="Simpósio" title="Simpósio">
    	@include('_menu')
	</div>
	<div class="col-sm-4 descricao-simposio">
		<h4>LOREM IPSUM</h4>
		Dolor sit amet

	</div>
	<div class="col-sm-4">
		<img id="logo-simposio" src="/img/simposio/logo.png">
	</div>
@endsection
