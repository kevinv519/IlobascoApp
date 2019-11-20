@extends('layouts.admin_app')

<?php
App\Http\Controllers\LanguageController::setViewLanguage();
?>

@section('title', __('messages.actions.title_confirm') . ' - Ilobasco')

@section('content')
	<div class="mt-4 pt-4 mb-4">
		<div class="container">
			<form id="deleteform" action="{{ route('delete_section_path', ['section'=> $section])}}" method="POST">
			{{csrf_field()}}
			{{method_field('DELETE')}}
			<p class="lead mt-4 pt-4">@lang('messages.actions.delete_confirm')</p>
			<div class="modal-footer">
			<button type="button" class="btn btn-outline-secondary" data-dismiss="modal">@lang('messages.actions.cancel')</button>
			<button type="submit" class="btn btn-outline-primary"><i class="fa fa-trash-o fa-lg"></i> @lang('messages.actions.delete')</button>
			</div>
			</form>
		</div>
	</div>
@endsection