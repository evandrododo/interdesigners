@extends('site')

@section('conteudo')

    <nav class="row" id="menuinicial">
		<div class="inscricoes">
			<a href="/inscricoes">
				<img src="/img/menuinicial/inscricoes.png" alt="Inscrições" title="Inscrições">
				<img src="/img/menuinicial/inscricoes_hover.png" class="imghover" alt="Inscrições" title="Inscrições">
			</a>
		</div>
		<div class="programacao">
			<a href="/programacao">
				<img src="/img/menuinicial/programacao.png" alt="Programação" title="Programação">
				<img src="/img/menuinicial/programacao_hover.png" class="imghover" alt="Programação" title="Programação">
			</a>
		</div>
		<div class="logo">
			<img src="/img/menuinicial/logo.png" alt="Interdesigners 2015" title="Interdesigners 2015">
		</div>
		<div class="simposio">
			<a href="/simposio">
				<img src="/img/menuinicial/simposio.png" alt="Simpósio" title="Simpósio">
				<img src="/img/menuinicial/simposio_hover.png" class="imghover" alt="Simpósio" title="Simpósio">
			</a>
		</div>
		<div class="evento">
			<a href="/evento">
				<img src="/img/menuinicial/evento.png" alt="Evento" title="Evento">
				<img src="/img/menuinicial/evento_hover.png" class="imghover" alt="Evento" title="Evento">
			</a>
		</div>
    </nav>

@endsection
