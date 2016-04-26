<div class='topo cordetexto'>
	<div class='container'>
		<a class='logo'></a>
		<script>
			//sorteio de skins
			function skin() {
				var numero = Math.floor(Math.random() * 4) + 1;
				while ( $('body').hasClass('cor'+numero) ) numero = Math.floor(Math.random() * 4) + 1;
				$('body').removeClass('cor1 cor2 cor3 cor4').addClass('cor'+numero);
			}
			if(!$('body').hasClass('home')) {
				skin();
				$('a.logo').click(function(){
					skin();
				});
			}
		</script>
		<ul>
			<li class='menu_enc'><a href=' '>Sobre</a></li>
			<li class='menu_enc'>
				<a href='http://www.rmisto.com.br/#editais'>Editais</a>
				<ul>
					<li><a href='editais/monitoria'>X-Tudo<span>(monitoria)</span></a></li>
					<li><a href='editais/registro'>Diga Cheese!<span>(registro)</span></a></li>
					<li><a href='editais/oficina'>Pão na Chapa<span>(oficina)</span></a></li>
					<li><a href='editais/mista'>Misto Quente<span>(oficina mista)</span></a></li>
					<li><a href='editais/sepa'>Lanche Gourmet<span>(SePA e SePP)</span></a></li>
					<li><a href='editais/bazar'>Praça de Alimentação<span>(Bazar)</span></a></li>
					<li><a href='editais/videos'>TV de Cachorro<span>(Mostra de Vídeos)</span></a></li>
					<li><a href='editais/exposicao'>Buffet<span>(Exposição)</span></a></li>
					<li><a href='editais/instalacao'>Cozinha Planejada<span>(Instalação)</span></a></li>
				</ul>
			</li>
			<li class='menu_simp'>
				<a href='http://www.rmisto.com.br'>R Design</a>
				<ul>
					<li><a href='http://www.rmisto.com.br'>Sobre</a></li>
					<li>
						<a href='http://www.rmisto.com.br/#editais'>Editais</a>
					</li>
				</ul>			
			</li>
			<li>
				<a href='simposio'>Simpósio</a>
				<ul>
					<li><a href='simposio'>Sobre</a></li>
					<li><a href='simposio/submissao'>Submissão</a></li>
				</ul>
			</li>
			<li><a href='cronograma'>Cronograma</a></li>
			<li><a href='inscricao'>Inscrição</a></li>
			<li><a href='contato'>Contato</a></li>
		</ul>
		<? if(isset($_SESSION['usu4r10'])) { ?>
		<form action='login.php' id='logout'>
			<input type='hidden' name='logout' value='logout'></input>
			<span><?=$_SESSION['usu4r10']?></span>
			<a title='logout'>&#9632;<img src='img/ico_logout.png'/></a>
		</form>
		<? } ?>
	</div>
</div>