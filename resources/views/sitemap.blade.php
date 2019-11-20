@extends('layouts.app')

<?php
\App\Http\Controllers\LanguageController::setViewLanguage();
?>

@push('css-complements')
    <link rel="stylesheet" href="{{ asset('css/carousel.css') }}">
@endpush

@section ('content')

    <div class ="container">
        <h3>@lang('messages.navbar.about')</h3>
        <div class="list-group">
            <ul>
                <a class = " list-group-item list-group-item-action" href="{{ route('history_path') }}" >
                    @lang('messages.navbar.information')
                </a>
                <a class = " list-group-item list-group-item-action" href="{{ route('structure_path') }}" >
                    @lang('messages.navbar.structure')
                </a>
                <a class = " list-group-item list-group-item-action" href="{{ route('develop_path') }}" >
                    @lang('messages.navbar.economics')
                </a>
                <a class = " list-group-item list-group-item-action" href="{{ route('turism_path') }}" >
                    @lang('messages.navbar.turism')
                </a>
            </ul>
        </div>
    </div>

@endsection
