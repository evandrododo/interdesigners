@extends('admin')

@section('content')
    <h1>Convidados<a href="{{ url('convidado/create') }}">+</a></h1>

    @forelse($convidados as $Convidado)
    	<a href="/convidado/{{ $Convidado->id }}/edit" title="{{ $Convidado->nome }}">
    		<img src="{{ $Convidado->foto }}" alt="{{ $Convidado->nome }}">
            <h4>{{ $Convidado->nome }}</h4>
            <p>{{ $Convidado->descricao }}</p>
    	</a>
    @empty
        <p>Nenhum convidado.</p>
    @endforelse
@endsection
