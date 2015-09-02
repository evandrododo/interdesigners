<div class="form-group">
	{!! Form::label("nome", "Nome:") !!}
	{!! Form::text("nome",  null , ['class' => 'form-control']) !!}
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
	{!! Form::label("outrocongresso", "Você já frequentou outro congresso de Design?") !!}
	{!! Form::text("outrocongresso", null, ['class' => 'form-control']) !!}
</div>
<div class="form-group input-hidden">
	{!! Form::label("artigo", "Irá submeter algum artigo?") !!}<br>
	{!! Form::radio("artigo", 1, false) !!}
	{!! Form::label("artigo", "Sim") !!}	<br>	
	{!! Form::radio("artigo", 0, true) !!}
	{!! Form::label("artigo", "Não") !!}	
</div>
<div class="form-group input-hidden">
	{!! Form::label("tituloartigo", "Se sim, qual o título do artigo?") !!}
	{!! Form::text("tituloartigo", null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::label("comprovante", "Comprovante de pagamento (IMG):") !!}
	{!! Form::file("comprovante", ['id' => 'comprovante']) !!}
</div>

<div class="form-group">
	{!! Form::submit( $btnSubmit, ['class' => 'form-control btn btn-primary']) !!}
</div>
**Anexar Comprovante de Pagamento.