<div class="form-group">
	{!! Form::label("nome", "Nome:") !!}
	{!! Form::text("nome",  null , ['class' => 'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::label("email", "Titulo do trabalho:") !!}
	{!! Form::text("email", null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::label("descricao", "Descricao:") !!}
	{!! Form::text("descricao", null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::label("arquivo", "Arquivo (PDF):") !!}
	{!! Form::file("arquivo", ['id' => 'arquivo']) !!}
</div>

<div class="form-group">
	{!! Form::submit( $btnSubmit, ['class' => 'form-control btn btn-primary']) !!}
</div>