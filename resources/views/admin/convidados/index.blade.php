@extends('admin')

@section('content')
    <h1>Convidados<a href="{{ url('convidado/create') }}">+</a></h1>

    <div class="row title">
        <div class="col-sm-2">
                Foto
        </div>
        <div class="col-sm-5">
                Nome
        </div>
        <div class="col-sm-5">
                Descrição
        </div>
    </div>

    @forelse($convidados as $Convidado)
        <div class="row padding-bt-1 zebra">
            <div class="col-sm-2 text-center">
                <a href="/convidado/{{ $Convidado->id }}/edit" title="{{ $Convidado->nome }}">
                    <img src="{{ $Convidado->foto }}" alt="{{ $Convidado->nome }}">
                </a>
            </div>
            <div class="col-sm-4">
                <a href="/convidado/{{ $Convidado->id }}/edit" title="{{ $Convidado->nome }}">
                    <h4>{{ $Convidado->nome }}</h4>
                </a>
            </div>
            <div class="col-sm-4">
                <a href="/convidado/{{ $Convidado->id }}/edit" title="{{ $Convidado->nome }}">
                    <p>{{ $Convidado->descricao }}</p>
                </a>
            </div>
            <div class="col-sm-2">
                <a class="col-sm-6" href="/convidado/{{ $Convidado->id }}/edit" title="Editar {{ $Convidado->nome }}">
                    <i class="fa fa-edit title"></i>
                </a>
                {!! Form::open([ 'method' => 'DELETE', 'route' => ['convidado.destroy', $Convidado->id] ]) !!}
                    {!! Form::submit('Excluir?', ['class' => 'col-sm-6 btn btn-danger', 'onclick' => "return confirm('Tem certeza que deseja excluir?');"]) !!}
                {!! Form::close() !!}
            </div>
        </div>
    @empty
        <p>Nenhum convidado.</p>
    @endforelse
@endsection
