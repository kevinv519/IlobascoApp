@extends('layouts.app')

<?php
App\Http\Controllers\LanguageController::setViewLanguage();
?>

@section('title', $translation->title . ' - Ilobasco')

@section('content')
    <div class="container my-5">
        <div class="row">
            <div class="col-12">
                @if($translation->news->cover_photo != 'null')
                    <img src="{{ asset($translation->news->cover_photo) }}" alt="@lang('messages.news.no_image')" class="img-fluid col-md-7 float-md-left">
                @endif
                <h2 class="mt-1">{{ $translation->title }}</h2>
                <?php Carbon\Carbon::setLocale(session()->get('applocale')); ?>
                <small class="text-muted">{{ $translation->news->created_at->toDayDateTimeString() }}</small>
                <div id="description" class="ml-1">
                    {!! $translation->description !!}
                    'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Beatae delectus dolorum fuga harum obcaecati quos, rerum veniam. Facere minima, nihil? Illum iste magni numquam perspiciatis quibusdam repellendus sint, soluta unde!
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Exercitationem, inventore, suscipit. Adipisci, aperiam, dolorum ea et facere fugit odio odit ratione sequi veniam voluptate voluptates? Necessitatibus possimus qui tempore veritatis?
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad animi consequatur, consequuntur ea earum eos harum, id illo illum modi natus perspiciatis sed voluptatem. Atque dicta dignissimos dolorem pariatur saepe.'
                </div>
            </div>
        </div>
    </div>
@endsection