<nav class="navbar navbar-expand-md navbar-dark fixed-top navbar-bg text-light" id="my-navbar">
    <div class="container">
        <a href="{{ route('admin_path') }}" class="navbar-brand">
            <img src="{{ asset('img/escudo.png') }}" alt="Ilobasco Logo" width="59" height="50">
        </a>
        <button class="navbar-toggler border-0" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="fa fa-bars"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav">
                <li class="nav-item {{ Route::currentRouteNamed('admin_path')?'active':'' }}">
                    <a href="{{ route('admin_path') }}" class="nav-link"><span class="fa fa-home fa-lg"> </span></a>
                </li>
                <li class="nav-item {{ Route::currentRouteNamed('section_path')?'active':'' }}">
                    <a href="{{ route('section_path') }}" class="nav-link">@lang('messages.sections.sections')</a>
                </li>
                <li class="nav-item {{ Route::currentRouteNamed('admin_news_path')?'active':'' }}">
                    <a href="{{ route('admin_news_path') }}" class="nav-link">@lang('messages.navbar.news')</a>
                </li>
                <li class="dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                        {{ Auth::user()->name }} <span class="caret"></span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-right navbar-bg border-0 text-light">
                        <li class="nav-item  {{ Route::currentRouteNamed('logout_path')?'active':'' }}">
                            <a class="nav-link" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                                Logout
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </li>
                    </ul>
                </li>
            </ul>
            @include('layouts._lang')
        </div>
    </div>
</nav>
