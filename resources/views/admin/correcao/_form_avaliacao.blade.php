<div class="col-sm-4 form-correcao">
	<div class="form-group input-hidden">
		{!! Form::label("nota", "Nota:") !!}
		<div class="input-group">
			<input class="form-control" type="number" name="nota" min="0" max="10" step="1" value="10" maxlength="2">
			<span class="input-group-addon">,</span>
			<input class="form-control" type="number" name="nota_dec" min="0" max="99" step="1" value="00" maxlength="2">
		</div>	
	</div>
	<div class="form-group input-hidden">
		{!! Form::label("observacao_titulo", "Título") !!}
		{!! Form::textarea("observacao_titulo", null, ['class' => 'form-control']) !!}
	</div>
	<div class="form-group input-hidden">
		{!! Form::label("observacao_abstract", "Abstract") !!}
		{!! Form::textarea("observacao_abstract", null, ['class' => 'form-control']) !!}
	</div>
	<div class="form-group input-hidden">
		{!! Form::label("observacao_introducao", "Introdução") !!}
		{!! Form::textarea("observacao_introducao", null, ['class' => 'form-control']) !!}
	</div>
	<div class="form-group input-hidden">
		{!! Form::label("observacao_revisaoteorica", "Revisão Teórica") !!}
		{!! Form::textarea("observacao_revisaoteorica", null, ['class' => 'form-control']) !!}
	</div>
	<div class="form-group input-hidden">
		{!! Form::label("observacao_metodo", "Métodos") !!}
		{!! Form::textarea("observacao_metodo", null, ['class' => 'form-control']) !!}
	</div>
	<div class="form-group input-hidden">
		{!! Form::label("observacao_resultados", "Resultados e Discussão") !!}
		{!! Form::textarea("observacao_resultados", null, ['class' => 'form-control']) !!}
	</div>
	<div class="form-group input-hidden">
		{!! Form::label("observacao_contribuicao", "Contribuições para a área de conhecimento") !!}
		{!! Form::textarea("observacao_contribuicao", null, ['class' => 'form-control']) !!}
	</div>
	<div class="form-group input-hidden">
		{!! Form::label("observacao_bibliografia", "Bibliografia") !!}
		{!! Form::textarea("observacao_bibliografia", null, ['class' => 'form-control']) !!}
	</div>
	<div class="form-group input-hidden">
		{!! Form::label("observacao_redacao", "Redação") !!}
		{!! Form::textarea("observacao_redacao", null, ['class' => 'form-control']) !!}
	</div>
	<div class="form-group">
		{!! Form::submit( $btnSubmit, ['class' => 'form-control btn btn-primary']) !!}
	</div>
</div>
<div class="col-sm-8">
	<iframe src="{{ $inscrito->arquivo }}" width="800px" height="650px" >
</div>

•	Bibliografia
•	Redação"