@extends('layouts.app')
<?php 
App\Http\Controllers\LanguageController::setViewLanguage();
?>

@section('title',__('desarrollo.desarrollo.title'))

@section('cover')

 
@endsection

@section('content')
<div class="mt-4 pt-4">
    @include('about.desarrollo.__economia')
    @include('about.desarrollo.__nivelescolar')
</div>

@endsection