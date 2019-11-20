@extends('layouts.app')

<?php
App\Http\Controllers\LanguageController::setViewLanguage();
?>

@section('title', __('messages.home.welcome') . ' Ilobasco')

@section('cover')
    <div class="cover" style="background-image: url('{{ asset("img/bg.jpg") }}')" title="Esta sección podría contener alguna imagen">
        <div id="jumbotron-cover" class="jumbotron jumbotron-fluid text-light">
            <div class="container text-center">
                <h1 class="display-6">@lang('messages.home.welcome')</h1>
                <h1 class="display-2 awesome-font">Ilobasco</h1>
                <br>
                <div class="row">
                    <p class="col-4 col-md-4">
                        <i class="fa fa-user-o fa-lg"></i> 2000 <br>
                        <small>Población</small>
                    </p>
                    <p class="col-4 col-md-4">
                        <i class="fa fa-map-o fa-lg"></i> 46.33 km&sup2;<br>
                        <small>Extensión territorial</small>
                    </p>
                    <p class="col-4 col-md-4">
                        <i class="fa fa-map-marker fa-lg"> </i> 108 km<br>
                        <small>desde San Salvador</small>
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content')
    <div class="container pb-4">
        @foreach($sections as $section)
            @if(count($section->translations))
                {!! $section->translations[0]->body !!}
            @endif
        @endforeach
    </div>
@endsection