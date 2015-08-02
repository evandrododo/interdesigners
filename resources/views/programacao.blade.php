@extends('site')

@section('conteudo')

	<div class="col-sm-4">
		<div class="lettering-container">
			<img class="lettering" src="/img/programacao/lettering.png" alt="Programação" title="Programação">
		</div>
    	@include('_menu')
	</div>
	<div class="col-sm-4 descricao-programacao descricao">
			<ul id="menu-interno-programacao" class="menu-interno">
			<li>
				<a href="#cronograma">
					<img  src="/img/programacao/cronograma1.png" alt="Cronograma">
					<img class="imghover" src="/img/programacao/cronograma2.png" alt="Cronograma">
				</a>
			</li>
			<li>
				<a href="#convidados">
					<img  src="/img/programacao/convidados1.png" alt="Convidados">
					<img class="imghover" src="/img/programacao/convidados2.png" alt="Convidados">
				</a>
			</li>
			<li>
				<a href="#oficinas">
					<img  src="/img/programacao/oficinas1.png" alt="Oficinas">
					<img class="imghover" src="/img/programacao/oficinas2.png" alt="Oficinas">
				</a>
			</li>
			<li>
				<a href="#palestras">
					<img  src="/img/programacao/palestras1.png" alt="Palestras">
					<img class="imghover" src="/img/programacao/palestras2.png" alt="Palestras">
				</a>
			</li>
		</ul>

		<div class="conteudo-interno">
			<div class="cronograma ativo">
				EM BREVE
			</div>
			<div class="convidados">
				@include('programacao.convidados')
			</div>
			<div class="oficinas">
				@include('programacao.oficinas')
			</div>
			<div class="palestras">
				@include('programacao.palestras')
			</div>
		</div>

	</div>
	<div class="col-sm-4">
		<img id="logo-programacao" src="/img/programacao/logo.png">
	</div>
@endsection
