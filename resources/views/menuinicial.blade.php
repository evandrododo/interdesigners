@extends('site')

@section('conteudo')

    <nav class="row" id="menuinicial">
		<div class="inscricoes">
			<div class="img-container">
                <a href="/inscricoes">
    				<div class="img-menu" style="background-image:url('/img/menuinicial/inscricoes.png');" title="Inscrições"></div>
    				<div class="imghover img-menu" style="background-image:url('/img/menuinicial/inscricoes_hover.png');" title="Inscrições"></div>
    			</a>
            </div>
		</div>
		<div class="programacao">
			<div class="img-container">
                <a href="/programacao">
    				<div class="img-menu" style="background-image:url('/img/menuinicial/programacao.png');" title="Programação"></div>
    				<div class="imghover img-menu" style="background-image:url('/img/menuinicial/programacao_hover.png');" title="Programação"></div>
    			</a>
            </div>
		</div>
		<div class="logo">
            <div class="img-container">
                <div class="img-menu" style="background-image:url('/img/menuinicial/logo.png');" title="Interdesigners 2015"></div>
            </div>
		</div>
		<div class="simposio">
			<div class="img-container">
                <a href="/simposio">
    				<div class="img-menu" style="background-image:url('/img/menuinicial/simposio.png');" title="Simpósio"></div>
    				<div class="imghover img-menu" style="background-image:url('/img/menuinicial/simposio_hover.png');" title="Simpósio"></div>
    			</a>
            </div>
		</div>
		<div class="evento">
			<div class="img-container">
                <a href="/evento">
    				<div class="img-menu" style="background-image:url('/img/menuinicial/evento.png');" title="Evento"></div>
    				<div class="imghover img-menu" style="background-image:url('/img/menuinicial/evento_hover.png');" title="Evento"></div>
    			</a>
            </div>
		</div>
    </nav>

@endsection
