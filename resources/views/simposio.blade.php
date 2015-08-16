@extends('site')

@section('conteudo')

	<div class="col-sm-12 col-md-4 col-lg-4">
		<div class="lettering-container hidden-xs">
			<img class="lettering" src="/img/simposio/lettering.png" alt="Simpósio" title="Simpósio">
		</div>
    	@include('_menu')
	</div>
	<div class="col-xs-12 col-sm-12 col-md-5 col-lg-5 descricao-simposio descricao">
		<ul id="menu-interno-somposio" class="menu-interno">
			<li>
				<span class="link" data-link="#sobre">
					<img  src="/img/simposio/sobre1.png" alt="Sobre">
					<img class="imghover" src="/img/simposio/sobre2.png" alt="Sobre">
				</span>
			</li>
			<li>
				<span class="link" data-link="#submissao">
					<img  src="/img/simposio/submissao1.png" alt="Submissão">
					<img class="imghover" src="/img/simposio/submissao2.png" alt="Submissão">
				</span>
			</li>
			<li>
				<span class="link" data-link="#inscricao">
					<img  src="/img/simposio/inscricao1.png" alt="Inscrição">
					<img class="imghover" src="/img/simposio/inscricao2.png" alt="Inscrição">
				</span>
			</li>
			<li>
				<span class="link" data-link="#programacao">
					<img  src="/img/simposio/contato1.png" alt="Programação">
					<img class="imghover" src="/img/simposio/contato2.png" alt="Programação">
				</span>
			</li>
			<li>
				<span class="link" data-link="#contato">
					<img  src="/img/simposio/contato1.png" alt="Contato">
					<img class="imghover" src="/img/simposio/contato2.png" alt="Contato">
				</span>
			</li>
		</ul>

		<div class="conteudo-interno">
			<div class="sobre ativo">
				@include('simposio.sobre')
			</div>
			<div class="submissao">
				@include('simposio.submissao')
			</div>
			<div class="inscricao col-sm-12">
				@include('simposio.inscricao')
			</div>
			<div class="programacao">
				@include('simposio.programacao')
			</div>
			<div class="contato">
				@include('simposio.contato')
			</div>
		</div>
	</div>
	<div class="hidden-sm col-md-3 col-lg-3">
		&nbsp;
	</div>
@endsection
