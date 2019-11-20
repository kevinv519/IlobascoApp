@if(session()->has('message'))
    <div class="container">
        <div class="alert alert-primary" role="alert">
            {{ session()->get('message') }}
        </div>
    </div>
@endif