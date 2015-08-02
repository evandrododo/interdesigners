@extends('site')

@section('conteudo')

	<div class="col-sm-4">
		<div class="lettering-container">
			<img class="lettering" src="/img/evento/lettering.png" alt="Evento" title="Evento">
		</div>
    	@include('_menu')
	</div>
	<div class="col-sm-4 descricao-evento descricao">
{!!		nl2br(e("O INTERDESIGNERS

O Interdesigners é um evento anual da UNESP de Bauru, que reúne alunos, profissionais e docentes promovendo a troca de informações, a discussão e a prática do Design e áreas relacionadas. Organizado pelos estudantes dos cursos de Design Gráfico e Design de Produto, com o apoio do Departamento de Design e da Faculdade de Arquitetura, Artes e Comunicação, a primeira edição do evento foi realizada em 1991. Tendo sua importância consolidada ao longo dos anos, agora apresenta sua 17ª edição que ocorrerá nos dias 5, 6 e 7 de Novembro de 2015 no Campus da UNESP de Bauru.

A EDIÇÃO 2015

Propomos evidenciar os reflexos do Design entre calouros, veteranos e profissionais da área. Reflexos do que nós podemos vir a ser e do que somos. Assim, conhecendo o outro, conhecemos a nós mesmos. Foi nessa direção que tomamos o tema do 17º Interdesigners, Reflexo.

CONCEITO: REFLEXO

Quando dois espelhos se encaram, as imagens formadas são infinitas. Seus reflexos se estendem um ao outro, tornando impossível enxergar um limite. No Interdesigners 2015, queremos que vocês reflitam essa ideia. Se misturem, enxerguem uns aos outros, transformem-se e, assim, mudem também sua forma de fazer design.

Espelho: Somos um espelho, refletimos o que nos é ensinado. Aqui, propomos que vocês se quebrem. Espalhem seus pedaços por aí, se envolvam com o ambiente e as pessoas que o fazem existir. Ensinem e aprendam, deixem suas reflexões serem alteradas.

Distorção: Enquanto recolocamos as peças do espelho no lugar, sua forma se altera. A reflexão não será a mesma e suas imagens sairão distorcidas do sentido anterior, mas a distorção nada mais é do que uma nova maneira de ver algo.

Efeito Borboleta: Por trás de um acontecimento grande estão milhares de pequenas ações que, juntas, influenciam umas s outras e transformam o caminho a ser seguido. A teoria do caos propõe que o bater de asas de uma borboleta pode causar um furacão no outro lado do mundo. Nós queremos que vocês sejam essas borboletas no Interdesigners, do dia 5 a 7 de novembro de 2015.

COMISSÃO ORGANIZADORA DO INTERDESIGNERS 2015 (COIDe)
interdesigners2015@gmail.com"))!!}

		<style>
		.embed-container {
			position: relative;
			padding-bottom: 56.25%;
			height: 0;
			overflow: hidden;
			max-width: 100%;
			margin: 2em 0;

		}
		.embed-container iframe,
		.embed-container object,
		.embed-container embed { position: absolute; top: 0; left: 0; width: 100%; height: 100%; }
		</style>
		<div class="embed-container">
			<iframe src='https://player.vimeo.com/video/133478848' frameborder='0' webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
		</div>
	</div>
	<div class="col-sm-4">
		<img id="logo-evento" src="/img/evento/logo.png">
	</div>
@endsection
