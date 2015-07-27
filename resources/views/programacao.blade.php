@extends('site')

@section('conteudo')

	<div class="col-sm-4">
		<img class="lettering" src="/img/programacao/lettering.png" alt="Programação" title="Programação">
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
				O simpósio ocrre na UNESP, em Bauru-SP simpósio ocrre na UNESP, em Bauru-SP simpósio ocrre na UNESP, em Bauru-SP simpósio ocrre na UNESP, em Bauru-SP simpósio ocrre na UNESP, em Bauru-SP simpósio ocrre na UNESP, em Bauru-SP simpósio ocrre na UNESP, em Bauru-SP simpósio ocrre na UNESP, em Bauru-SP simpósio ocrre na UNESP, em Bauru-SP simpósio ocrre na UNESP, em Bauru-SP simpósio ocrre na UNESP, em Bauru-SP simpósio ocrre na UNESP, em Bauru-SP simpósio ocrre na UNESP, em Bauru-SP simpósio ocrre na UNESP, em Bauru-SP simpósio ocrre na UNESP, em Bauru-SP simpósio ocrre na UNESP, em Bauru-SP simpósio ocrre na UNESP, em Bauru-SP simpósio ocrre na UNESP, em Bauru-SP simpósio ocrre na UNESP, em Bauru-SP simpósio ocrre na UNESP, em Bauru-SP simpósio ocrre na UNESP, em Bauru-SP simpósio ocrre na UNESP, em Bauru-SP simpósio ocrre na UNESP, em Bauru-SP simpósio ocrre na UNESP, em Bauru-SP simpósio ocrre na UNESP, em Bauru-SP simpósio ocrre na UNESP, em Bauru-SP simpósio ocrre na UNESP, em Bauru-SP simpósio ocrre na UNESP, em Bauru-SP simpósio ocrre na UNESP, em Bauru-SP simpósio ocrre na UNESP, em Bauru-SP
			</div>
			<div class="convidados">
				O simpósio ocrre na UNESP, em Bauru-SP
			</div>
			<div class="oficinas">
				O simpósio ocrre na UNESP, em Bauru-SP
			</div>
			<div class="palestras">
				O simpósio ocrre na UNESP, em Bauru-SP
			</div>
		</div>

	</div>
	<div class="col-sm-4">
		<img id="logo-programacao" src="/img/programacao/logo.png">
	</div>
@endsection
