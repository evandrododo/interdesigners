
<div class="form-group">
	{!! Form::label("nome", "Nome:") !!}
	{!! Form::text("nome",  null , ['class' => 'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::label("pacote", "Pacote de Inscrição:") !!}
	{!! Form::select("pacote", array('Design de Produto' => 'Design de Produto',
											 'Interdesigners - 1º Lote (R$65)' => 'Interdesigners - 1º Lote (R$65)',
											 'Interdesigners - 2º Lote (R$75)' => 'Interdesigners - 2º Lote (R$75)',
											 'Interdesigners - 3º Lote (R$85)' => 'Interdesigners - 3º Lote (R$85)',
											 'Interdesigners - 1º Lote + Desconto Simpósio (R$60)' => 'Interdesigners - 1º Lote + Desconto Simpósio (R$60)',
											 'Interdesigners - 2º Lote + Desconto Simpósio (R$70)' => 'Interdesigners - 2º Lote + Desconto Simpósio (R$70)',
											 'Interdesigners - 3º Lote + Desconto Simpósio (R$80)' => 'Interdesigners - 3º Lote + Desconto Simpósio (R$80)'), 'Interdesigners - 1º Lote (R$65)',['class' => 'form-control']); !!}
</div>
<div class="form-group">
	{!! Form::label("rg", "RG:") !!}
	{!! Form::text("rg", null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::label("cpf", "CPF:") !!}
	{!! Form::text("cpf", null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::label("dob", "Data de Nascimento:") !!}
	{!! Form::text("dob", null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::label("tiposanguineo", "Tipo Sanguíneo:") !!}
	{!! Form::select("tiposanguineo", array('Design de Produto' => 'Design de Produto',
											 'AB+' => 'AB+',
											 'AB-' => 'AB-',
											 'A+' => 'A+',
											 'A-' => 'A-',
											 'B+' => 'B+',
											 'B-' => 'B-',
											 'O+' => 'O+',
											 'O-' => 'O-'), 'AB+',['class' => 'form-control']); !!}
</div>
<div class="form-group">
	{!! Form::label("necessecidades_especiais", "Apresenta necessidades especiais?") !!}<br>
	{!! Form::radio("necessecidades_especiais", 1, false) !!}
	{!! Form::label("necessecidades_especiais", "Sim") !!}	<br>	
	{!! Form::radio("necessecidades_especiais", 0, true) !!}
	{!! Form::label("necessecidades_especiais", "Não") !!}	
</div>
<div class="form-group">
	{!! Form::label("medicacao_controlada", "Faz uso de medicação controlada?") !!}<br>
	{!! Form::radio("medicacao_controlada", 1, false) !!}
	{!! Form::label("medicacao_controlada", "Sim") !!}	<br>	
	{!! Form::radio("medicacao_controlada", 0, true) !!}
	{!! Form::label("medicacao_controlada", "Não") !!}	
</div>
<div class="form-group">
	{!! Form::label("alergias", "Alergias?") !!}<br>
	{!! Form::radio("alergias", 1, false) !!}
	{!! Form::label("alergias", "Sim") !!}	<br>	
	{!! Form::radio("alergias", 0, true) !!}
	{!! Form::label("alergias", "Não") !!}	
</div>
<div class="form-group">
	{!! Form::label("restricoes_alimenticias", "Restrições alimentícias?") !!}<br>
	{!! Form::radio("restricoes_alimenticias", 1, false) !!}
	{!! Form::label("restricoes_alimenticias", "Sim") !!}	<br>	
	{!! Form::radio("restricoes_alimenticias", 0, true) !!}
	{!! Form::label("restricoes_alimenticias", "Não") !!}	
</div>

<div class="form-group">
	{!! Form::label("email", "E-mail para contato:") !!}
	{!! Form::text("email", null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::label("telefone", "Telefone para contato:") !!}
	{!! Form::text("telefone", null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::label("facebook", "Facebook para contato:") !!}
	{!! Form::text("facebook", null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::label("contatoemergencia", "Nome do contato para emergência:") !!}
	{!! Form::text("contatoemergencia", null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::label("telefoneemergencia", "Telefone do contato para emergência:") !!}
	{!! Form::text("telefoneemergencia", null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::label("cidadeestado", "Cidade e Estado:") !!}
	{!! Form::text("cidadeestado", null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::label("instituicao_de_origem", "Instituição de Origem:") !!}
	{!! Form::text("instituicao_de_origem", null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::label("curso", "Curso/Habilitação:") !!}
	{!! Form::text("curso", null, ['class' => 'form-control']) !!}
</div>
<div class="form-group input-hidden">
	{!! Form::label("anotermo", "Ano/Termo:") !!}
	{!! Form::text("anotermo", null, ['class' => 'form-control']) !!}
</div>
<div class="form-group input-hidden">
	{!! Form::label("outrocongresso", "Você já frequentou outro congresso de Design? Qual?") !!}
	{!! Form::text("outrocongresso", null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::label("camiseta", "Temática e grandes áreas:") !!}
	{!! Form::select("camiseta", array('Design de Produto' => 'Design de Produto',
											 'P (feminina)' => 'P (feminina)',
											 'M (feminina)' => 'M (feminina)',
											 'G (feminina)' => 'G (feminina)',
											 'P' => 'P',
											 'M' => 'M',
											 'G' => 'G',
											 'GG' => 'GG'), 'P (feminina)',['class' => 'form-control']); !!}
</div>
<div class="form-group input-hidden">
	{!! Form::label("alimentacao", "Pacote Alimentação?") !!}<br>
	{!! Form::radio("alimentacao", 1, false) !!}
	{!! Form::label("alimentacao", "Sim") !!}	<br>	
	{!! Form::radio("alimentacao", 0, true) !!}
	{!! Form::label("alimentacao", "Não") !!}	
</div>
<div class="form-group">
	{!! Form::label("tipo_comida", "Tipo de comida:") !!}
	{!! Form::select("tipo_comida", array('Design de Produto' => 'Design de Produto',
											 'Vegetariano' => 'Vegetariano',
											 'Com Carne' => 'Com Carne',
											 'Vegano' => 'Vegano'), 'Vegetariano',['class' => 'form-control']); !!}
</div>
<div class="form-group">
	{!! Form::label("tamanho_comida", "Tamanho:") !!}
	{!! Form::select("tamanho_comida", array('Design de Produto' => 'Design de Produto',
											 'Pequeno (R$30)' => 'Pequeno (R$30)',
											 'Médio (R$35)' => 'Médio (R$35)'), 'Pequeno (R$30)',['class' => 'form-control']); !!}
</div>
<div class="form-group">
	{!! Form::label("comprovante", "Comprovante de pagamento (IMG):") !!}
	{!! Form::file("comprovante", ['id' => 'comprovante']) !!}
</div>
<p>
	PREÇO TOTAL: (Inscrição Básica + Pacote Alimentação)<br>
	***Anexar Comprovante de Depósito Referente ao TOTAL<br>
	***Anexar Comprovante de Depósito Simpósio para garantir Desconto
</p>
<div class="form-group">
	{!! Form::submit( $btnSubmit, ['class' => 'form-control btn btn-primary']) !!}
</div>