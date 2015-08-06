@extends('site')

@section('conteudo')

	<div class="col-sm-4">
		<div class="lettering-container">
			<img class="lettering" src="/img/simposio/lettering.png" alt="Simpósio" title="Simpósio">
		</div>
    	@include('_menu')
	</div>
	<div class="col-sm-4 descricao-simposio descricao">
		<ul id="menu-interno-somposio" class="menu-interno">
			<li>
				<a href="#sobre">
					<img  src="/img/simposio/sobre1.png" alt="Sobre">
					<img class="imghover" src="/img/simposio/sobre2.png" alt="Sobre">
				</a>
			</li>
			<li>
				<a href="#submissao">
					<img  src="/img/simposio/submissao1.png" alt="Submissão">
					<img class="imghover" src="/img/simposio/submissao2.png" alt="Submissão">
				</a>
			</li>
			<li>
				<a href="#inscricao">
					<img  src="/img/simposio/inscricao1.png" alt="Inscrição">
					<img class="imghover" src="/img/simposio/inscricao2.png" alt="Inscrição">
				</a>
			</li>
			<li>
				<a href="#contato">
					<img  src="/img/simposio/contato1.png" alt="Contato">
					<img class="imghover" src="/img/simposio/contato2.png" alt="Contato">
				</a>
			</li>
		</ul>

		<div class="conteudo-interno">
			<div class="sobre ativo">
				{!!		nl2br(e("O simpósio ocorrerá na UNESP, em Bauru-SP e os artigos avaliados pelo comitê científico serão publicados nos anais do evento, em formato digital online, com ISBN.

OBJETIVOS

- Promover a integração entre diferentes faces da vivência acadêmica

- Estreitar os laços entre pós-graduação e graduação

- Incentivar a troca de informações tecnológicas, metodológicas e científica entre alunos

- Promover o aprendizado das normas acadêmicas

- Promover o intercâmbio entre universidades brasileiras

- Divulgar o trabalho de graduandos e bacharéis e seu potencial como futuros pesquisadores, mestrandos e doutorandos")) !!}
			</div>
			<div class="submissao">
				Em breve.
			</div>
			<div class="inscricao">
				Em breve.
			</div>
			<div class="contato">
				Em breve.
			</div>
		</div>
	</div>
	<div class="col-sm-4">
		<img id="logo-simposio" src="/img/simposio/logo.png">
	</div>
@endsection
