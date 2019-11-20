@extends('layouts.app')
<?php 
App\Http\Controllers\LanguageController::setViewLanguage();
?>

@section('title',__('messages.navbar.structure'))

@section('cover')

 <div class="cover" style="background-image: url('{{ asset("img/bg3.jpg") }}')">
    <div id="jumbotron-cover" class="jumbotron jumbotron-fluid text-light">
        <div class="container text-center">
            <h1 class="display-6">@lang('messages.home.welcome')</h1>
            <h1 class="display-2 awesome-font">Ilobasco</h1>
            <br>
        </div>
    </div>
</div>

@endsection

@section('content')
<div class ="container">
    <h2>@lang('structure.aspectofisico.title')</h2>
   
    @include('about.structure.__aspectofisico')
     
</div>

@endsection
