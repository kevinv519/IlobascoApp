@if( $news->exists )
    <form action="{{ route('update_news_path',['news'=> $news->id]) }}" method="POST">
	    {{ method_field('put') }}
        @php
            if ($news->translations[0]->lang == 'es'){
                $es = $news->translations[0];
                $en = $news->translations[1];
            }
            else {
                $es = $news->translations[1];
                $en = $news->translations[0];
            }
        @endphp
@else
    <form action="{{ route('store_news_path') }}" method="POST">
@endif

	{{ csrf_field() }}
	<div class="row">
        <div class="col-12 col-md-6">
                <img id="holder" style="margin-top:15px;max-height:500px;" src="{{ asset($news->cover_photo)}}"><br>
            <div class="input-group">
                <span class="input-group-btn">
                    <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
                        <i class="fa fa-picture-o"></i> Choose
                    </a>
                </span>
                <input id="thumbnail" class="form-control" type="text" name="filepath" value="{{ $news->cover_photo or old('filepath') }}">
            </div>
        </div>
    </div>
    <div class="row">
		<div class="col-md-6">
            <fieldset disabled class="col-12 mt-2"><img src="{{ asset('img/es-flag-32.png') }}" width="auto" height="auto" class="mr-3">Español</fieldset>
            <br>
            <div class="form-group col-12">
                <label for="es_title">Titulo</label>
                <input name="es_title" type="text" value="{{ $es->title or old('es_title') }}" class="form-control rounded-0">
            </div>
			<div class="form-group col-12">
                <label for="es_body">
                    </label>
                <textarea name="es_body" class="form-control rounded-0" id="es_body" placeholder="@lang('messages.sections.content_message')" rows="10">
                	{{ $es->description or old('es_body') }}
                </textarea>
            </div>
		</div>
		<div class="col-md-6">
            <fieldset disabled class="col-12 mt-2"><img src="{{ asset('img/us-flag-32.png') }}" width="auto" height="auto" class="mr-3">English</fieldset>
            <br>
            <div class="form-group col-12">
                <label for="en_title">Title</label>
                <input name="en_title" type="text" value="{{ $en->title or old('en_title') }}" class="form-control rounded-0">
            </div>
			<div class="form-group col-12">
                <label for="en_body">
                    </label>
                <textarea name="en_body" class="form-control rounded-0" id="en_body" placeholder="@lang('messages.sections.content_message')" rows="10">
                	{{ $en->description or old('en_body') }}
                </textarea>
            </div>
		</div>
	</div>
    <div class="col-12">
        <button class="btn btn-outline-success btn-lg ml-auto rounded-0" type="submit">@lang('messages.contact.send_button')</button>
    </div>
</form>