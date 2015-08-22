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
	{!! Form::label("tematica", "Temática e grandes áreas:") !!}
	{!! Form::select("tematica", array('Design de Produto' => 'Design de Produto',
											 'Design Gráfico' => 'Design Gráfico',
											 'Design Inclusivo' => 'Design Inclusivo',
											 'Design Informacional' => 'Design Informacional',
											 'Design Urbano' => 'Design Urbano',
											 'Eco Design (design sustentável)' => 'Eco Design (design sustentável)',
											 'Ergonomia e Acessibilidade' => 'Ergonomia e Acessibilidade',
											 'Fundamentos Teóricos' => 'Fundamentos Teóricos',
											 'História do Design' => 'História do Design',
											 'Materiais e processo' => 'Materiais e processo',
											 'Comunicação Visual' => 'Comunicação Visual'), 'Design de Produto',['class' => 'form-control']); !!}
</div>
<div class="form-group">
	{!! Form::label("titulo", "Título do trabalho:") !!}
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
	{!! Form::label("resumo", "Resumo:") !!}
	{!! Form::text("resumo", null, ['class' => 'form-control']) !!}
</div>

<div class="form-group">
	{!! Form::label("arquivo", "Arquivo (PDF):") !!}
	{!! Form::file("arquivo", ['id' => 'arquivo']) !!}
</div>

<div class="form-group">
	{!! Form::label("comprovante", "Comprovante de pagamento (IMG):") !!}
	{!! Form::file("comprovante", ['id' => 'comprovante']) !!}
</div>

<div class="form-group">
	{!! Form::submit( $btnSubmit, ['class' => 'form-control btn btn-primary']) !!}
</div>