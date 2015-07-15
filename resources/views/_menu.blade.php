<nav class="col-sm-12">
	<div class="col-sm-2">
		@if($paginaAtual != "inscricoes")
		<a href="/inscricoes">
			<img src="/img/{{$paginaAtual}}/menu_inscricoes.png" alt="Inscrições" title="Inscrições">
		</a>
		@endif
	</div>
	<div class="col-sm-2">
		@if($paginaAtual != "simposio")
		<a href="/simposio">
			<img src="/img/{{$paginaAtual}}/menu_simposio.png" alt="Simpósio" title="Simpósio">
		</a>
		@endif
	</div>
	<div class="col-sm-2">
		<a href="/">
		@if($paginaAtual != "programacao")
			<img src="/img/{{$paginaAtual}}/menu_logo.png" alt="Menu Inicial" title="Menu Inicial">
		</a>
		@endif
	</div>
	<div class="col-sm-2">
		@if($paginaAtual != "programacao")
		<a href="/programacao">
			<img src="/img/{{$paginaAtual}}/menu_programacao.png" alt="Programação" title="Programação">
		</a>
		@endif
	</div>
	<div class="col-sm-2">
		@if($paginaAtual != "evento")
		<a href="/evento">
			<img src="/img/{{$paginaAtual}}/menu_evento.png" alt="Evento" title="Evento">
		</a>
		@endif
	</div>
</nav>
