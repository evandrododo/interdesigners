@extends('site')

@section('conteudo')

	<div class="col-sm-4">
		<div class="lettering-container">
			<img class="lettering" src="/img/inscricoes/lettering.png" alt="Inscrições" title="Inscrições">
		</div>
		@include('_menu')
	</div>
	<div class="col-sm-5 descricao-inscricoes descricao">
		<div class="row">
			<div class="col-sm-12">
				<h4>BORBOLETA (ENCONTRISTA)</h4>
				<p class="secao">Em breve mais informações sobre as inscrições.</p>

			</div>
		</div>
		<div class="row">
			<div class="col-sm-12 editais">
				<h4>EDITAIS</h4>
				<p>Os editais são para aqueles encontristas que querem ajudar na construção de evento junto à COIDe.
				Abertos até o dia 6/09.</p>
				<div class="col-sm-9">
					<span class="fundo-roxo">REFLEXÃO - OFICINA</span>
				</div>
				<div class="col-sm-3">
					<button type="button" class="btn-edital" data-toggle="modal" data-target=".modal-reflexao"><span class="fundo-roxo">INSCREVA-SE</span></button>
				</div>
				<div class="col-sm-9">
					<span class="fundo-roxo">REFRAÇÃO - MONITORIA</span>
				</div>
				<div class="col-sm-3">
					<button type="button" class="btn-edital" data-toggle="modal" data-target=".modal-refracao"><span class="fundo-roxo">INSCREVA-SE</span></button>
				</div>
				<div class="col-sm-9">
					<span class="fundo-roxo">OBJETIVA - REGISTRO</span>
				</div>
				<div class="col-sm-3">
					<button type="button" class="btn-edital" data-toggle="modal" data-target=".modal-objetiva"><span class="fundo-roxo">INSCREVA-SE</span></button>
				</div>
				<div class="col-sm-9">
					<span class="fundo-roxo">PRISMA - BAZAR</span>
				</div>
				<div class="col-sm-3">
					<button type="button" class="btn-edital" data-toggle="modal" data-target=".modal-prisma"><span class="fundo-roxo">INSCREVA-SE</span></button>
				</div>
				<div class="col-sm-9">
					<span class="fundo-roxo">CALEIDOSCÓPIO - INSTALAÇÃO</span>
				</div>
				<div class="col-sm-3">
					<button type="button" class="btn-edital" data-toggle="modal" data-target=".modal-caleidoscopio"><span class="fundo-roxo">INSCREVA-SE</span></button>
				</div>
				<div class="col-sm-9">
					<span class="fundo-roxo">LUPA - EXPOSIÇÃO</span>
				</div>
				<div class="col-sm-3">
					<button type="button" class="btn-edital" data-toggle="modal" data-target=".modal-lupa"><span class="fundo-roxo">INSCREVA-SE</span></button>
				</div>
			</div>
		</div>


	</div>
	<div class="col-sm-3">
		<img id="logo-inscricoes" src="/img/inscricoes/logo.png">
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
