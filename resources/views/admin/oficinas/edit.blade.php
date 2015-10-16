@extends('admin')

@section('content')
    <h1>Atualizar Oficina</h1>

  	{!! Form::model($oficina, ['method' => 'PATCH', 'action' => ['OficinasController@update', $oficina->id], 'files'=>true ]) !!}

		@include('admin.oficinas._form', ['btnSubmit' => 'Atualizar Dados']);

    {!! Form::close() !!}
	</div>

	@include('admin.error')

@endsection
