@if(isset($oficinas))
@forelse($oficinas as $Oficina)
<div class="row margin-b-1">
    <div class="col-sm-3 foto-secao">
        <img src="{{ $Oficina->foto }}" alt="{{ $Oficina->nome }}">
    </div>
    <div class="col-sm-9">
        <h4 class="titulo-secao">
            {{ $Oficina->nome }}
        </h4>
        <p class="descricao-secao">
            {{ $Oficina->descricao }}
        </p>
    </div>
</div>
@empty
    Oficinas disponíveis em breve.
@endforelse
@endif
