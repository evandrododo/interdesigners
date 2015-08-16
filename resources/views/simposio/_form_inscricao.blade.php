<div class="form-group">
	{!! Form::label("nome", "Nome:") !!}
	{!! Form::text("nome",  null , ['class' => 'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::label("email", "E-mail:") !!}
	{!! Form::text("email", null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::label("cpf", "CPF:") !!}
	{!! Form::text("cpf", null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::label("telefone", "Telefone:") !!}
	{!! Form::text("telefone", null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::label("instituicao_de_origem", "Instituição de Origem:") !!}
	{!! Form::text("instituicao_de_origem", null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::label("tematica", "Temática:") !!}
	{!! Form::text("tematica", null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::label("titulo", "Titulo do trabalho:") !!}
	{!! Form::text("titulo", null, ['class' => 'form-control']) !!}
</div>
<div class="form-group">
	{!! Form::label("autor1", "Autor principal:") !!}
	{!! Form::text("autor1", null, ['class' => 'form-control']) !!}
</div>
<div class="form-group input-hidden">
	{!! Form::label("autor2", "Demais autores:") !!}
	{!! Form::text("autor2", null, ['class' => 'form-control']) !!}
</div>
<div class="form-group input-hidden">
	{!! Form::label("autor3", "Demais Autores:") !!}
	{!! Form::text("autor3", null, ['class' => 'form-control']) !!}
</div>
<div class="form-group input-hidden">
	{!! Form::label("autor4", "Demais Autores:") !!}
	{!! Form::text("autor4", null, ['class' => 'form-control']) !!}
</div>
<div class="form-group input-hidden">
	{!! Form::label("autor5", "Demais Autores:") !!}
	{!! Form::text("autor5", null, ['class' => 'form-control']) !!}
</div>
<div class="form-group plus-authors">
	<button class="btn btn-primary pull-right" id="btnMoreAuthors">
		<i class="fa fa-plus"> Autores</i>
	</button>
</div>
<div class="form-group">
	{!! Form::label("resumo", "Descricao:") !!}
	{!! Form::text("resumo", null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::label("arquivo", "Arquivo (PDF):") !!}
	{!! Form::file("arquivo", ['id' => 'arquivo']) !!}
</div>

<div class="form-group">
	{!! Form::submit( $btnSubmit, ['class' => 'form-control btn btn-primary']) !!}
</div>