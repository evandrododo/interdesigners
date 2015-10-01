@if(isset($palestras))


@forelse($palestras as $Palestra)
<div class="row margin-b-1">
    <div class="col-sm-3 foto-secao">
        <img src="{{ $Palestra->foto }}" alt="{{ $Palestra->nome }}">
    </div>
    <div class="col-sm-9">
        <h4 class="titulo-secao">
            {{ $Palestra->nome }}
        </h4>
        <p class="descricao-secao">
            {{ $Palestra->descricao }}
        </p>
    </div>
</div>
@empty
    Palestras disponíveis em breve.
@endforelse
@endif
