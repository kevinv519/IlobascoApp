<footer class="footer">
    <div class="container pt-4 text-light">
        <div class="row">
            <div class="col-sm-2 col-md-2 d-none d-none d-sm-block">
                <a href="{{ route('home_path') }}"><img src="{{ asset('img/escudo.png') }}" alt="Ilobasco" width="83" height="70"></a>
            </div>
            <div class="col-sm-4 col-md-4">
                <span class="align-middle">@lang('messages.footer.info')</span>
            </div>
            <div class="col-sm-6 col-md-6 text-md-right">
                @lang('messages.footer.sign')
            </div>
        </div>
    </div>
</footer>