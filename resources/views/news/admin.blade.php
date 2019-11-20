@extends('layouts.admin_app')

<?php
App\Http\Controllers\LanguageController::setViewLanguage();
?>

@section('title', __('messages.navbar.news') . ' - Ilobasco')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h3>
                    <span class="fa-stack fa-lg">
                        <i class="fa fa-circle  fa-stack-2x text-dark"></i>
                        <i class="fa fa-code fa-stack-1x text-white"></i>
                    </span>
                    @lang('messages.navbar.news')
                </h3>

				<div class="container">
                    <a href="{{route('create_news_path')}}" class="btn btn-outline-success rounded-0">
                        <i class="fa fa-file-o fa-fw"></i> @lang('messages.actions.create')
                    </a>
                </div>
                <div class="container pb-4">
            	 	@foreach($news as $new)
            	 		<div class="card my-3 rounded-0">
            	 			<div class="card-header">
            	 				<div class="d-flex justify-content-end">
									<a href="{{route('edit_news_path', ['news'=> $new->id])}}" class="btn btn-outline-info rounded-0">
                                        <i class="fa fa-pencil-square-o fa-fw"></i> @lang('messages.actions.edit')
                                    </a>

                                    <a class="btn btn-outline-danger ml-2" data-toggle="modal" data-target="#askConfirm" data-todelete="{{$new->id}}" href="{{route('confirm_delete_news_path',['news'=> $new->id])}}">
                                        <i class="fa fa-trash-o fa-lg"></i> @lang('messages.actions.delete')
                                    </a>
            	 				</div>
            	 			</div>
            	 			<div class="card-body p-3">
								<img src="{{ asset($new->news->cover_photo) }}" alt="" class="float-md-left col-md-4">
								<h4>{{ $new->title }}</h4>
							        {!! str_limit($new->description, 750, '...') !!}
            	 			</div>
            	 		</div>
					@endforeach
					{{ $news->links('pagination::bootstrap-4') }}
                </div>
	    	</div>
		</div>
	</div>
    @include('news._askconfirm')
@endsection


@push('js-complements')
    <script>
        $('#askConfirm').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget);
            var id = button.data('todelete');
            var form = document.getElementById('deleteform');

            var route = "{{route('delete_news_path', ['news'=>'id'])}}";
            route = route.replace('id',id);
            form.action = route;
        })
    </script>
@endpush