@if(isset($convidados))
@forelse($convidados as $Convidado)
    <div class="col-sm-3">
        <img src="{{ $Convidado->imagem }}" alt="{{ $Convidado->titulo }}">
    </div>
    <div class="col-sm-9">
        <h4 class="titulo-secao">
            {{ $Convidado->titulo }}
        </h4>
        <p class="descricao-secao">
            {{ $Convidado->descricao }}
        </p>
    </div>
@empty
    Nenhum convidado cadastrado :(
@endforelse
@endif
