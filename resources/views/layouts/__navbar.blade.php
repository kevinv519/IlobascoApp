<nav class="navbar navbar-expand-md navbar-dark fixed-top navbar-bg text-light" id="my-navbar">
    <div class="container">
        <a href="{{ route('home_path') }}" class="navbar-brand">
            <img src="{{ asset('img/escudo.png') }}" alt="Ilobasco Logo" width="59" height="50">
        </a>
        <button class="navbar-toggler border-0" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="fa fa-bars"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav">
                <li class="nav-item {{ Route::currentRouteNamed('home_path')?'active':'' }}">
                    <a href="{{ route('home_path') }}" class="nav-link"><span class="fa fa-home fa-lg"> </span></a>
                </li>
                <li class="nav-item dropdown {{ Request::is('about/*')?'active':'' }}">
                    <a href="{{ route('sitemap_path') }}" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" id="about-dropdown">@lang('messages.navbar.about') </a>
                    <div class="dropdown-menu navbar-bg border-0 text-light" aria-labelledby="about-dropdown">
                        <a href="{{ route('history_path') }}" class="dropdown-item {{ Route::currentRouteNamed('history_path')?'active':'' }}">
                            @lang('messages.navbar.information')
                        </a>
                        <a href="{{ route('structure_path') }}" class="dropdown-item {{ Route::currentRouteNamed('structure_path')?'active':'' }}">
                            @lang('messages.navbar.structure')
                        </a>
                        <a href="{{ route('develop_path') }}" class="dropdown-item {{ Route::currentRouteNamed('develop_path')?'active':'' }}">
                            @lang('messages.navbar.economics')
                        </a>
                        <a href="{{ route('turism_path') }}" class="dropdown-item {{ Route::currentRouteNamed('turism_path')?'active':'' }}">
                            @lang('messages.navbar.turism')
                        </a>
                    </div>
                </li>
                <li class="nav-item {{ Request::is('news*')?'active':'' }}">
                    <a href="{{ route('news_path') }}" class="nav-link">@lang('messages.navbar.news')</a>
                </li>

                <li class="nav-item  {{ Route::currentRouteNamed('contact_path')?'active':'' }}">
                    <a href="{{ route('contact_path') }}" class="nav-link">@lang('messages.navbar.contact')</a>
                </li>
            </ul>
            @include('layouts._lang')
        </div>
    </div>
</nav>
