@extends('admin')

@section('content')
    <h1>Adicionar Palestra</h1>

	{!! Form::open(['url' => 'palestra', 'files' => true ]) !!}

		@include('admin.palestras._form', ['btnSubmit' => 'Adicionar!']);

	{!! Form::close() !!}

	@include('admin.error')

@endsection
