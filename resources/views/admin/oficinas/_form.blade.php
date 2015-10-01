<div class="form-group">
	{!! Form::label("nome", "Nome:") !!}
	{!! Form::text("nome",  null , ['class' => 'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::label("foto", "Foto:") !!}
	{!! Form::file("foto", ['id' => 'foto']) !!}
</div>

<div class="form-group">
	{!! Form::label("descricao", "Descricao:") !!}
	{!! Form::text("descricao", null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::submit( $btnSubmit, ['class' => 'form-control btn btn-primary']) !!}
</div>
