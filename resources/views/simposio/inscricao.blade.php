<h1>Formulario de Inscriçao</h1>

{!! Form::open(['url' => 'inscricao', 'files' => true ]) !!}

	@include('simposio._form_inscricao', ['btnSubmit' => 'Adicionar!'])

{!! Form::close() !!}