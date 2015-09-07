<p>
As inscrições são tanto para aqueles que submeteram artigos quanto para aqueles que querem participar do evento como ouvinte e explorar os reflexos da área acadêmica de Design pelas sessões de painéis, palestras e mesas redondas.
</p>
<button type="button" class="btn-submissao" data-toggle="modal" data-target=".modal-submissao"><h4><img src="/img/simposio/formulariodeinscricao.png" alt="Formulário de submissão"><h4></button>
<p>
<br>
A inscrição no evento poderá ser feita a partir do dia 30 de agosto até o evento em si, 03 de novembro, mas haverá alteração dos preços. <br>
30/08 - 19/10 R$ 30,00 <br>
20/10 - 02/11 R$ 40,00 <br>
03/11 e 04/11 R$ 50,00 <br>
<br> 
<p>	
	Lembrando que pelo menos um dos autores dos trabalhos deverá estar inscrito no evento até dia 20/10 para que o trabalho seja publicado nos anais do mesmo.
</p>
A inscrição é feita online em nosso site e seu pagamento deve ser feito por depósito na conta: <br> <br>
<p>
	Banco do Brasil <br>
	Agência: 6533-1 <br>
	Conta: 16.931-5 Variação: 51 <br>
</p>
Por favor tenha em mãos o comprovante do depósito para que ele possa ser anexado no momento da inscrição. <br>
Com exceção do terceiro e último lote, que serão apenas aceitos inscrições presenciais e pagamento em espécie. Não aceitaremos cheque.
					<div class="modal fade modal-submissao" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
						<div class="modal-dialog modal-lg">
							<div class="modal-content">
								<div class="col-sm-12">

									<h4><img src="/img/simposio/formulariodeinscricao.png" alt="Formulário de submissão"></h4>

									{!! Form::open(['url' => 'submitInscricao', 'files' => true ]) !!}

										@include('simposio._form_inscricao_geral', ['btnSubmit' => 'SUBMETER'])

									{!! Form::close() !!}
								</div>
								&nbsp;
							</div>
						</div>
					</div>