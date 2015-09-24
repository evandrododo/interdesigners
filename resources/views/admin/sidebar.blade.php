<ul class="sidebar-menu" id="nav-accordion">
    @if( Auth::check() && Auth::user()->id == 1)
        
    <li class="menu">
        <a class="" href="/admin/home">
            <i class="fa fa-dashboard"></i>
            <span>Visão Geral</span>
        </a>
    </li>
    <li class="menu">
        <a class="" href="/admin/convidados">
            <i class="fa fa-street-view"></i>
            <span>Convidados</span>
        </a>
    </li>
    <li class="menu">
        <a class="" href="/admin/programacao">
            <i class="fa fa-calendar"></i>
            <span>Programação</span>
        </a>
    </li>

    <li class="menu">
        <a class="" href="/admin/simposio">
            <i class="fa fa-newspaper-o"></i>
            <span>Simpósio</span>
        </a>
    </li>

    <li class="menu">
        <a class="" href="/admin/simposioGeral">
            <i class="fa fa-child"></i>
            <span>Simpósio Geral</span>
        </a>
    </li>

    <li class="menu">
        <a class="" href="/admin/evento">
            <i class="fa fa-flag"></i>
            <span>Evento</span>
        </a>
    </li>
    @endif
    <li class="menu">
        <a class="" href="/admin/correcao">
            <i class="fa fa-graduation-cap"></i>
            <span>Correção Simpósio</span>
        </a>
    </li> <!--
    <li class="menu">
        <a class="" href="/admin/evento">
            <i class="fa fa-star"></i>
            <span>Evento</span>
        </a>
    </li> 
    <li class="menu">
        <a href="/admin/configuracoes" >
            <i class="fa fa-cogs"></i>
            <span>Configurações</span>
        </a>
    </li> -->
</ul>
