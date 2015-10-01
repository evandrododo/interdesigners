
@forelse($convidados as $Convidado)
<div class="row margin-b-1">
    <div class="col-sm-3 foto-secao">
        <img src="{{ $Convidado->foto }}" alt="{{ $Convidado->nome }}">
    </div>
    <div class="col-sm-9">
        <h4 class="titulo-secao">
            {{ $Convidado->nome }}
        </h4>
        <p class="descricao-secao">
            {{ $Convidado->descricao }}
        </p>
    </div>
</div>
@empty
    Convidados disponíveis em breve.
@endforelse
