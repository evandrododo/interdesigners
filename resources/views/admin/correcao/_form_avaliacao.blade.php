<div class="col-sm-4">
	<div class="form-group input-hidden">
		{!! Form::label("autor2", "Nota:") !!}
		{!! Form::text("autor2", null, ['class' => 'form-control']) !!}
	</div>
	<div class="form-group input-hidden">
		{!! Form::label("autor3", "Observação:") !!}
		{!! Form::text("autor3", null, ['class' => 'form-control']) !!}
	</div>
	<div class="form-group">
		{!! Form::submit( $btnSubmit, ['class' => 'form-control btn btn-primary']) !!}
	</div>
</div>
<div class="col-sm-8">
	<iframe src="/public{{ $inscrito->arquivo }}" width="800px" height="650px" >
</div>