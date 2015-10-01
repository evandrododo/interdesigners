@extends('admin')

@section('content')
    <h1>Palestras<a href="{{ url('palestra/create') }}">+</a></h1>

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

    @forelse($palestras as $Palestra)
        <div class="row padding-bt-1 zebra">
            <div class="col-sm-2 text-center">
                <a href="/palestra/{{ $Palestra->id }}/edit" title="{{ $Palestra->nome }}">
                    <img src="{{ $Palestra->foto }}" alt="{{ $Palestra->nome }}">
                </a>
            </div>
            <div class="col-sm-4">
                <a href="/palestra/{{ $Palestra->id }}/edit" title="{{ $Palestra->nome }}">
                    <h4>{{ $Palestra->nome }}</h4>
                </a>
            </div>
            <div class="col-sm-4">
                <a href="/palestra/{{ $Palestra->id }}/edit" title="{{ $Palestra->nome }}">
                    <p>{{ $Palestra->descricao }}</p>
                </a>
            </div>
            <div class="col-sm-2">
                <a class="col-sm-6" href="/palestra/{{ $Palestra->id }}/edit" title="Editar {{ $Palestra->nome }}">
                    <i class="fa fa-edit title"></i>
                </a>
                {!! Form::open([ 'method' => 'DELETE', 'route' => ['palestra.destroy', $Palestra->id] ]) !!}
                    {!! Form::submit('Excluir?', ['class' => 'col-sm-6 btn btn-danger', 'onclick' => "return confirm('Tem certeza que deseja excluir?');"]) !!}
                {!! Form::close() !!}
            </div>
        </div>
    @empty
        <p>Nenhum palestra.</p>
    @endforelse
@endsection
