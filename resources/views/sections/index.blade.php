@extends('layouts.admin_app')

<?php
App\Http\Controllers\LanguageController::setViewLanguage();
?>

@section('title', __('messages.sections.sections') . ' - Ilobasco')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3>
                    <span class="fa-stack fa-lg">
                        <i class="fa fa-circle  fa-stack-2x text-dark"></i>
                        <i class="fa fa-code fa-stack-1x text-white"></i>
                    </span>
                    @lang('messages.sections.sections')
                </h3>

                <div class="container pb-4">
                    <a href="{{route('create_section_path')}}" class="btn btn-outline-success">
                        <i class="fa fa-file-o fa-fw"></i> @lang('messages.actions.create')
                    </a>
                    @foreach($sections as $section)
                        <div class="card my-3 ">
                            <div class="card-header">
                                <div class="d-flex flex-row">

                                </div>
                                <div class="d-flex justify-content-end">
                                    {{-- <div class=" mr-2" role="group"> --}}

                                    <a href="{{route('edit_section_path', ['section'=> $section->id])}}" class="btn btn-outline-info"><i class="fa fa-pencil-square-o fa-fw"></i> @lang('messages.actions.edit')</a>

                                    <a class="btn btn-outline-danger ml-2" data-toggle="modal" data-target="#askConfirm" data-todelete="{{$section->id}}" href="{{route('confirm_delete_section_path',['section'=> $section->id])}}">
                                        <i class="fa fa-trash-o fa-lg"></i> @lang('messages.actions.delete')
                                    </a>


                                    {{-- </div> --}}
                                </div>
                            </div>
                            <div class="body p-3">
                                @if(count($section->translations))
                                    {!! $section->translations[0]->body !!}
                                @endif
                            </div>
                        </div>

                    @endforeach
                </div>
            </div>
        </div>
        @include('layouts._askconfirm')
    </div>
@endsection

@push('js-complements')
    <script>
        $('#askConfirm').on('show.bs.modal', function (event) {
            var button = $(event.relatedTarget);
            var id = button.data('todelete');
            var form = document.getElementById('deleteform');

            var route = "{{route('delete_section_path', ['section'=>'id'])}}";
            route = route.replace('id',id);
            form.action = route;
        })
    </script>
@endpush