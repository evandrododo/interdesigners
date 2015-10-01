@extends('admin')

@section('content')
    <h1>Oficinas<a href="{{ url('oficina/create') }}">+</a></h1>

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

    @forelse($oficinas as $Oficina)
        <div class="row padding-bt-1 zebra">
            <div class="col-sm-2 text-center">
                <a href="/oficina/{{ $Oficina->id }}/edit" title="{{ $Oficina->nome }}">
                    <img src="{{ $Oficina->foto }}" alt="{{ $Oficina->nome }}">
                </a>
            </div>
            <div class="col-sm-4">
                <a href="/oficina/{{ $Oficina->id }}/edit" title="{{ $Oficina->nome }}">
                    <h4>{{ $Oficina->nome }}</h4>
                </a>
            </div>
            <div class="col-sm-4">
                <a href="/oficina/{{ $Oficina->id }}/edit" title="{{ $Oficina->nome }}">
                    <p>{{ $Oficina->descricao }}</p>
                </a>
            </div>
            <div class="col-sm-2">
                <a class="col-sm-6" href="/oficina/{{ $Oficina->id }}/edit" title="Editar {{ $Oficina->nome }}">
                    <i class="fa fa-edit title"></i>
                </a>
                {!! Form::open([ 'method' => 'DELETE', 'route' => ['oficina.destroy', $Oficina->id] ]) !!}
                    {!! Form::submit('Excluir?', ['class' => 'col-sm-6 btn btn-danger', 'onclick' => "return confirm('Tem certeza que deseja excluir?');"]) !!}
                {!! Form::close() !!}
            </div>
        </div>
    @empty
        <p>Nenhum oficina.</p>
    @endforelse
@endsection
