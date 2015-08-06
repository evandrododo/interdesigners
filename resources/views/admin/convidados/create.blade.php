@extends('admin')

@section('content')
    <h1>Adicionar Convidado</h1>

	{!! Form::open(['url' => 'convidado', 'files' => true ]) !!}

		@include('admin.convidados._form', ['btnSubmit' => 'Adicionar!']);

	{!! Form::close() !!}

	@include('admin.error')

@endsection
