@extends('layouts.app')
<?php
\App\Http\Controllers\LanguageController::setViewLanguage();
?>

@section('title', __('messages.navbar.turism') . ' - Ilobasco')

@push('css-complements')
    <link rel="stylesheet" href="{{ asset('css/carousel.css') }}">
@endpush

@section('cover')
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="first-slide img-fluid" src="{{ asset('img/slider1.jpg') }}" alt="First slide">
                <div class="container">
                    <div class="carousel-caption text-left">
                        <h1>@lang('turism.slider.permanencia')</h1>
                        <p>@lang('turism.slider.pdesc')</p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="second-slide" src="{{ asset('img/slider2.jpg') }}" alt="Second slide">
                <div class="container">
                    <div class="carousel-caption">
                        <h1>@lang('turism.slider.alfareria')</h1>
                        <p>@lang('turism.slider.adesc')</p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="third-slide" src="{{ asset('img/slider3.jpg') }}" alt="Third slide">
                <div class="container">
                    <div class="carousel-caption text-right">
                        <h1>@lang('turism.slider.naturaleza')</h1>
                        <p>@lang('turism.slider.ndesc')</p>
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
@endsection

@section('content')
    <div class="container">
        <div class="row">

                @include('about.__fiestas')
            @foreach($places as $place)
                <div class="col-12 mb-3">
                    <h3>{{ $place->name }}</h3>
                    <p>{!! $place->translations[0]->description !!}</p>
                    <div class="text-center">
                        <img src="{{ asset($place->cover_photo) }}" alt="" class="col-md-6 img-fluid">
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection