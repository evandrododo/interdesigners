<h4><img src="/img/simposio/formulariodeinscricao.png" alt="Formulário de inscrição"></h4>


{!! Form::open(['url' => 'inscricao', 'files' => true ]) !!}

	@include('simposio._form_inscricao', ['btnSubmit' => 'Adicionar!'])

{!! Form::close() !!}
