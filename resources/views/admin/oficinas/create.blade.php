@extends('admin')

@section('content')
    <h1>Adicionar Oficina</h1>

	{!! Form::open(['url' => 'oficina', 'files' => true ]) !!}

		@include('admin.oficinas._form', ['btnSubmit' => 'Adicionar!']);

	{!! Form::close() !!}

	@include('admin.error')

@endsection
