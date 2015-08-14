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
				<span class="link" data-link="#contato">
					<img  src="/img/simposio/contato1.png" alt="Contato">
					<img class="imghover" src="/img/simposio/contato2.png" alt="Contato">
				</span>
			</li>
		</ul>

		<div class="conteudo-interno">
			<div class="sobre ativo">
				<h4>
					<img  src="/img/simposio/3e4.png" alt="3 e 4 de Novembro">
				</h4>

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
	<div class="hidden-sm col-md-3 col-lg-3">
		&nbsp;
	</div>
@endsection
