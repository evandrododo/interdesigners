@extends('site')

@section('conteudo')

	<div class="col-sm-4">
		<img class="lettering" src="/img/simposio/lettering.png" alt="Simpósio" title="Simpósio">
    	@include('_menu')
	</div>
	<div class="col-sm-4 descricao-simposio">
		<ul id="menu-interno-somposio" class="menu-interno">
			<li>
				<a href="#sobre">
					<img  src="/img/simposio/sobre.png" alt="Sobre">
				</a>
			</li>
			<li>
				<a href="#submissao">
					<img  src="/img/simposio/submissao.png" alt="Submissão">
				</a>
			</li>
			<li>
				<a href="#inscricao">
					<img  src="/img/simposio/inscricao.png" alt="Inscrição">
				</a>
			</li>
			<li>
				<a href="#contato">
					<img  src="/img/simposio/contato.png" alt="Contato">
				</a>
			</li>
		</ul>

		<div class="conteudo-interno">
			<div class="sobre ativo">
				O simpósio ocrre na UNESP, em Bauru-SP
			</div>
			<div class="submissao ativo">
				O simpósio ocrre na UNESP, em Bauru-SP
			</div>
			<div class="inscricao ativo">
				O simpósio ocrre na UNESP, em Bauru-SP
			</div>
			<div class="contato ativo">
				O simpósio ocrre na UNESP, em Bauru-SP
			</div>
		</div>
	</div>
	<div class="col-sm-4">
		<img id="logo-simposio" src="/img/simposio/logo.png">
	</div>
@endsection
