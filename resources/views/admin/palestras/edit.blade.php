@extends('admin')

@section('content')
    <h1>Atualizar Palestra</h1>

  	{!! Form::model($palestra, ['method' => 'PATCH', 'action' => ['PalestrasController@update', $palestra->id], 'files'=>true ]) !!}

		@include('admin.palestras._form', ['btnSubmit' => 'Atualizar Dados']);

    {!! Form::close() !!}
	</div>

	@include('admin.error')

@endsection
