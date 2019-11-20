@extends('layouts.admin_app')

@push('css-complements')
	<link rel="stylesheet" href="{{ asset('css/cover.css') }}">
@endpush

<?php
App\Http\Controllers\LanguageController::setViewLanguage();
?>

@section('title', __('messages.admin.welcome') . ' - Ilobasco')

@section('content')
		<div class="site-wrapper">
			<div class="site-wrapper-inner">
				<div class="cover-container">
					<div class="inner cover">
						<img src="{{asset('img/escudo.png')}}" alt="escudo we" class="w-50 mx-auto d-block cover-image">
						<p class="lead mt-4">@lang('messages.admin.welcome')</p>
					</div>
				</div>	
			</div>
			
		</div>
@endsection