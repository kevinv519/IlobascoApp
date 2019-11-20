<ul class="navbar-nav ml-auto">
    <li class="navbar-text">
        <div class="btn-group" role="group" aria-label="Basic example">
            <button type="button" id="zoom-in" class="btn btn-outline-light">A+</button>
            <button type="button" id="zoom-out" class="btn btn-outline-light" disabled>A-</button>
        </div>
    </li>
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="{{ route('set_lang_path', app()->getLocale()=='es'?'en':'es') }}" id="lang-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <img src="{{ asset(config()->get('languages')[app()->getLocale()]["flag"]) }}" width="auto" height="auto" class="mr-1">
            {{ config()->get('languages')[app()->getLocale()]["language"] }}
        </a>
        <div class="dropdown-menu dropdown-menu-right navbar-bg border-0 text-light" aria-labelledby="lang-dropdown">
            @foreach (config()->get('languages') as $lang => $language)
                @if ($lang != app()->getLocale())
                    <a  class="dropdown-item" href="{{ route('set_lang_path', $lang) }}">
                        <img src="{{ asset($language['flag']) }}" width="auto" height="auto" class="mr-3">{{$language["language"]}}
                    </a>
                @endif
            @endforeach
        </div>
    </li>
</ul>