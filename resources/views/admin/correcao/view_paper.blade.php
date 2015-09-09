@extends('admin')

@section('content')
	@include('admin.correcao._pdf_iframe')
	{!! Form::open(['url' => 'inscricao', 'files' => true ]) !!}
		@include('admin.correcao._form_avaliacao', ['btnSubmit' => 'SUBMETER'])
	{!! Form::close() !!}
@endsection