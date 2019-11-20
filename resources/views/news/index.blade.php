@extends('layouts.app')

<?php
App\Http\Controllers\LanguageController::setViewLanguage();
Carbon\Carbon::setLocale(session()->get('applocale'));
?>

@section('title', __('messages.navbar.news'))

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            @foreach($news as $translation)
                <div class="col-sm-12 col-md-10">
                    <div class="card mb-3 rounded-0">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-lg-4">
                                    <a href="{{ route(('new_path'), [ 'new' => $translation->id ])}}">
                                        <img src="{{ $translation->news->cover_photo ?? asset('img/nia.svg') }}" class="img-fluid pb-2" alt="@lang('messages.news.no_image')">
                                    </a>
                                </div>
                                <div class="col-lg-8">
                                    <div class="news">
                                        <a class="news-title" href="{{ route(('new_path'), [ 'new' => $translation->id ]) }}">
                                            <h2>{{ $translation->title }}</h2>
                                        </a>
                                        <small class="text-muted">{{ $translation->news->created_at->diffForHumans() }}</small>

                                        <p>{!! str_limit($translation->description, $limit = 150, $end = '...') !!}</p>
                                        <a href="{{ route(('new_path'), [ 'new' => $translation->id ])}}" class="btn btn-outline-primary btn-large rounded-0">@lang('messages.news.read_more')</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
            <div class="col-12"></div>
            {{ $news->links('pagination::bootstrap-4') }}
        </div>
    </div>
@endsection