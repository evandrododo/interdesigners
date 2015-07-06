<header class="header black-bg">
    <div class="sidebar-toggle-box">
      <div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
    </div>
    <!--logo start-->
    <a href="index.html" class="logo"><b>{{ trans('siteconfig.nome') }}</b></a>
    <!--logo end-->
    <div class="nav notify-row" id="top_menu">
    </div>
    <div class="top-menu">
        <ul class="nav pull-right top-menu">
            @if (Auth::guest())
                <li><a href="{{ url('/auth/login') }}">Login</a></li>
            @else
            <li class="dropdown">
                <a href="{{ url('/auth/logout') }}" class="logout">Logout</a>
            </li>
            @endif
        </ul>
    </div>
</header>
