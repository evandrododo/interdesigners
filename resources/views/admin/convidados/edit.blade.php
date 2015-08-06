@extends('admin')

@section('content')
    <h1>Atualizar Convidado</h1>

  	{!! Form::model($convidado, ['method' => 'PATCH', 'action' => ['ConvidadosController@update', $convidado->id] ]) !!}

		@include('admin.convidados._form', ['btnSubmit' => 'Atualizar Dados']);

    {!! Form::close() !!}
	</div>

	@include('admin.error')

@endsection
