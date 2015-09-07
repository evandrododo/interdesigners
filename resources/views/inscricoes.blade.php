@extends('site')

@section('conteudo')
	<link href="https://fonts.googleapis.com/css?family=Vollkorn:700" rel="stylesheet" type="text/css">
	<div class="col-sm-12 col-md-4 col-lg-">
		<div class="lettering-container hidden-xs">
			<img class="lettering" src="/img/inscricoes/lettering.png" alt="Inscrições" title="Inscrições">
		</div>
		@include('_menu')
	</div>
	<div class="col-xs-12 col-sm-12 col-md-5 col-lg-5 descricao-inscricoes descricao">
		<div class="row">
			<div class="col-sm-12">
				<h4><img src="/img/inscricoes/borboleta.png" alt="BORBOLETA (ENCONTRISTA)"></h4>
				<p class="">
					<p>
						As inscrições online funcionarão somente para quem mora fora da cidade de Bauru e seu pagamento deve ser feito por depósito na conta:
					</p>
					<ul>
						<b>
							<li>Poupança - Banco do Brasil</li>
							<li>Agência: 3568-8</li>
							<li>Conta: 24.795-2 Variação: 51</li>
						</b>
					</ul>
					<p>
						Por favor tenha em mãos o comprovante do depósito para que ele possa ser anexado no momento da inscrição.
					</p>
					<button type="button" class="btn-submissao" data-toggle="modal" data-target=".modal-inscricao"><h4><img src="/img/inscricoes/formulario.png" alt="Formulário de submissão"><h4></button>
					<br>
					<br>
					<p>
						Para quem for de Bauru, as inscrições serão realizadas a partir do dia 2 de setembro (8 de setembro se não for possível fazer esse acréscimo no site amanhã, terça-feira) na Universidade Estadual Paulista "Júlio de Mesquita Filho" (UNESP) na região das salas 50’s com um dos membros da Comissão Organizadora do Interdesigners (COIDe) nos seguintes horários: todas terças, quartas e quintas-feiras das 12h às 14h e das 17h às 19h, além de horários alternativos.
						Caso tenha alguma dificuldade de se inscrever presencialmente, mande um e-mail para <i style="text-decoration: underline">interdesigners2015@gmail.com</i>
						Fique atento também ao <a href="https://www.facebook.com/interdesigners" target="_blank"><b>Facebook</b></a> onde nós divulgamos sempre novidades do evento.
					</p>
					<p>
						<h4><img src="/img/inscricoes/inscricao_basica.png" alt="Inscrição Básica"></h4>
						A inscrição básica do evento permite ao encontrista a participação de todas as atividades do evento, desde palestras, workshops, atividades integradoras e oficinas. Além disso, o encontrista ganhará um kit do Interdesigners Reflexo.

					<ul>
						<li>1º Lote: R$65 - Até o dia 23/09</li>
						<li>2º Lote: R$75 - Até o dia 20/10</li>
						<li>3º Lote: R$85 - Até o dia 5/11</li>
					</ul>
					<p>
						Para quem participar do 2º Simpósio Interdesigners, haverá um desconto de R$5 (5 reais) na inscrição básica do Interdesigners Reflexo.
					</p>
					<p>
						<h4><img src="/img/inscricoes/alimentacao.png" alt="Alimentação"></h4>
						O pacote alimentação corresponde ao almoço dos três dias de evento (5, 6 e 7 de novembro)
						O encontrista poderá escolher entre com carne, vegetariano ou vegano, além do tamanho pequeno ou médio.
						Pequeno: R$30
						Médio: R$35
					</p>
					<p>
						<h4><img src="/img/inscricoes/alojamento.png" style="height:25px" alt="Alojamento"></h4>
						Não teremos alojamento, entretanto Bauru é uma cidade com várias repúblicas de Design que poderão agregar pessoas que queiram aproveitar o Interdesigners junto a gente. Além disso, há hotéis bem localizados em Bauru. Entre em contato com a COIDe para saber mais.
					</p>
				</p>				
			</div>
		</div>

		<div class="modal fade modal-inscricao" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
			<div class="modal-dialog modal-lg">
				<div class="modal-content">
					<div class="col-sm-12">

						<h4><img src="/img/inscricoes/formulario.png" alt="Formulário de submissão"></h4>

						{!! Form::open(['url' => 'submitInscricaoGeral', 'files' => true ]) !!}

							@include('inscricoes._form_inscricao', ['btnSubmit' => 'SUBMETER'])

						{!! Form::close() !!}
					</div>
					&nbsp;
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12 editais">
				<div class="rubber_stamp">INSCRIÇÕES ENCERRADAS</div>
				<h4><img src="/img/inscricoes/editais.png" alt="Editais"></h4>
				<p>Os editais são para aqueles encontristas que querem ajudar na construção de evento junto à COIDe.
				Abertos até o dia 6/09.</p>
				<div class="col-sm-9">
					<span class="fundo-roxo">REFLEXÃO - OFICINA</span>
				</div>
				<div class="col-sm-3">
					<button type="button" class="btn-edital" data-toggle="modal" data-target="" disabled><span class="fundo-roxo">INSCREVA-SE</span></button>
				</div>
				<div class="col-sm-9">
					<span class="fundo-roxo">REFRAÇÃO - MONITORIA</span>
				</div>
				<div class="col-sm-3">
					<button type="button" class="btn-edital" data-toggle="modal" data-target="" disabled><span class="fundo-roxo">INSCREVA-SE</span></button>
				</div>
				<div class="col-sm-9">
					<span class="fundo-roxo">OBJETIVA - REGISTRO</span>
				</div>
				<div class="col-sm-3">
					<button type="button" class="btn-edital" data-toggle="modal" data-target="" disabled><span class="fundo-roxo">INSCREVA-SE</span></button>
				</div>
				<div class="col-sm-9">
					<span class="fundo-roxo">PRISMA - BAZAR</span>
				</div>
				<div class="col-sm-3">
					<button type="button" class="btn-edital" data-toggle="modal" data-target="" disabled><span class="fundo-roxo">INSCREVA-SE</span></button>
				</div>
				<div class="col-sm-9">
					<span class="fundo-roxo">CALEIDOSCÓPIO - INSTALAÇÃO</span>
				</div>
				<div class="col-sm-3">
					<button type="button" class="btn-edital" data-toggle="modal" data-target="" disabled><span class="fundo-roxo">INSCREVA-SE</span></button>
				</div>
				<div class="col-sm-9">
					<span class="fundo-roxo">LUPA - EXPOSIÇÃO</span>
				</div>
				<div class="col-sm-3">
					<button type="button" class="btn-edital" data-toggle="modal" data-target="" disabled><span class="fundo-roxo">INSCREVA-SE</span></button>
				</div>
			</div>
		</div>


	</div>
	<div class="hidden-sm col-md-3 col-lg-3">
		&nbsp;
	</div>

	<div class="modal fade modal-reflexao" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">

				<div class="col-sm-12"><h4><span class="fundo-roxo">REFLEXÃO - OFICINA</span><h4></div>
			  	<div data-configid="0/14572526" style="margin:0 20%; width:60%; height:391px;" class="issuuembed"></div>
				<script type="text/javascript" src="//e.issuu.com/embed.js" async="true"></script>

				<iframe src="https://docs.google.com/forms/d/1s4HnKykJWsRniTSWqADbDBgpQO12uuhX0Put41kmu88/viewform?embedded=true" width="100%" height="3200" frameborder="0" marginheight="0" marginwidth="0">Carregando...</iframe>
			</div>
		</div>
	</div>
	<div class="modal fade modal-refracao" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">

				<div class="col-sm-12"><h4><span class="fundo-roxo">REFRAÇÃO - MONITORIA</span><h4></div>
				<div data-configid="0/14624034" style="margin:0 20%; width:60%; height:391px;" class="issuuembed"></div>
				<script type="text/javascript" src="//e.issuu.com/embed.js" async="true"></script>

				<iframe src="https://docs.google.com/forms/d/1ofxOYOAXX3EwDXQfvBrPzOBJWnLhkz55nrdWapUzyRM/viewform?embedded=true" width="100%" height="3200" frameborder="0" marginheight="0" marginwidth="0">Carregando...</iframe>
			</div>
		</div>
	</div>
	<div class="modal fade modal-objetiva" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">

				<div class="col-sm-12"><h4><span class="fundo-roxo">OBJETIVA - REGISTRO</span><h4></div>
				<div data-configid="0/14624038" style="margin:0 20%; width:60%; height:391px;" class="issuuembed"></div>
				<script type="text/javascript" src="//e.issuu.com/embed.js" async="true"></script>

				<iframe src="https://docs.google.com/forms/d/1yl1rFGamjBXlzP04vEvMzKvIO4Sz4PGHdKMwoNc_WyM/viewform?embedded=true" width="100%" height="3200" frameborder="0" marginheight="0" marginwidth="0">Carregando...</iframe>
			</div>
		</div>
	</div>
	<div class="modal fade modal-prisma" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">

				<div class="col-sm-12"><h4><span class="fundo-roxo">PRISMA - BAZAR</span><h4></div>
				<div data-configid="0/14624044" style="margin:0 20%; width:60%; height:391px;" class="issuuembed"></div>
				<script type="text/javascript" src="//e.issuu.com/embed.js" async="true"></script>

				<iframe src="https://docs.google.com/forms/d/19mSEagKqaPd9QoiRjN8w4JnCJVlF3cHVPB_lQWfbRVA/viewform?embedded=true" width="100%" height="3200" frameborder="0" marginheight="0" marginwidth="0">Carregando...</iframe>
			</div>
		</div>
	</div>
	<div class="modal fade modal-caleidoscopio" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">

				<div class="col-sm-12"><h4><span class="fundo-roxo">CALEIDOSCÓPIO - INSTALAÇÃO</span><h4></div>
				<div data-configid="0/14624049" style="margin:0 20%; width:60%; height:391px;" class="issuuembed"></div>
				<script type="text/javascript" src="//e.issuu.com/embed.js" async="true"></script>

				<iframe src="https://docs.google.com/forms/d/1nd4uLd8eHf2EtAh_WRfuF77C70y6NoEfI6Mt0n68uCI/viewform?embedded=true" width="100%" height="3200" frameborder="0" marginheight="0" marginwidth="0">Carregando...</iframe>
			</div>
		</div>
	</div>
	<div class="modal fade modal-lupa" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">

				<div class="col-sm-12"><h4><span class="fundo-roxo">LUPA - EXPOSIÇÃO</span><h4></div>
				<div data-configid="0/14624058" style="margin:0 20%; width:60%; height:391px;" class="issuuembed"></div>
				<script type="text/javascript" src="//e.issuu.com/embed.js" async="true"></script>

				<iframe src="https://docs.google.com/forms/d/1Da5rdCCrOKG1-zJcwomphfcokZWOPOj8vt5IMdPb7c4/viewform?embedded=true" width="100%" height="3200" frameborder="0" marginheight="0" marginwidth="0">Carregando...</iframe>
			</div>
		</div>
	</div>
@endsection
