<div class="col-sm-4">
	<div class="form-group input-hidden">
		{!! Form::label("nota", "Nota:") !!}
		<div class="input-group">
			<input class="form-control" type="number" name="nota" min="0" max="10" step="1" value="30" maxlength="2">
			<span class="input-group-addon">,</span>
			<input class="form-control" type="number" name="nota_dec" min="0" max="99" step="1" value="30" maxlength="2">
		</div>	
	</div>
	<div class="form-group input-hidden">
		{!! Form::label("observacao", "Observação:") !!}
		{!! Form::textarea("observacao", null, ['class' => 'form-control']) !!}
	</div>
	<div class="form-group">
		{!! Form::submit( $btnSubmit, ['class' => 'form-control btn btn-primary']) !!}
	</div>
</div>
<div class="col-sm-8">
	<iframe src="{{ $inscrito->arquivo }}" width="800px" height="650px" >
</div>