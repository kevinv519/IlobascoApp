@if( $section->isNotEmpty())
<form action="{{ route('update_section_path',['section'=> $section[0]->id]) }}" method="POST">
	{{method_field('put')}}

@else

<form action="{{ route('store_section_path') }}" method="POST">

	
@endif

	{{csrf_field()}}
	<div class="row">
		<div class="col-md-6">
			<div class="form-group col-12">
                <label for="es_body">
                    <img src="{{ asset('img/es-flag-32.png') }}" width="auto" height="auto" class="mr-3">Español</label>
                <textarea name="es_body" class="form-control rounded-0" id="es_body" placeholder="@lang('messages.sections.content_message')" rows="10">
                	@if( $section->isNotEmpty())
	            		@if($section[0]->lang == 'es')
	            			{{$section[0]->body or old('es_body')}}
	            		@elseif($section[1]->lang == 'es')
	            			{{$section[1]->body or old('es_body')}}
	            		@endif
	            	@endif
                </textarea>
            </div>
		</div>
		<div class="col-md-6">
			<div class="form-group col-12">
                <label for="en_body">
                    <img src="{{ asset('img/us-flag-32.png') }}" width="auto" height="auto" class="mr-3">English</label>
                <textarea name="en_body" class="form-control rounded-0" id="en_body" placeholder="@lang('messages.sections.content_message')" rows="10">
                	@if( $section->isNotEmpty())
			        	@if($section[0]->lang == 'en')
			    			{{$section[0]->body or old('es_body')}}
			    		@elseif($section[1]->lang == 'en')
			    			{{$section[0]->body or old('es_body')}}
			    		@endif
			    	@endif
                </textarea>
            </div>
		</div>
	</div>
    <div class="col-12">
        <button class="btn btn-outline-success btn-lg ml-auto rounded-0" type="submit">@lang('messages.contact.send_button')</button>
    </div>
</form>