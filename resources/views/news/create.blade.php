@extends('layouts.admin_app')

<?php
App\Http\Controllers\LanguageController::setViewLanguage();
?>

@section('title', __('messages.news.create_news') . ' - Ilobasco')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3>
                    <span class="fa-stack fa-lg">
                        <i class="fa fa-circle  fa-stack-2x text-dark"></i>
                        <i class="fa fa-code fa-stack-1x text-white"></i>
                    </span>
                    @lang('messages.news.create_news')
                </h3>
                @include('news._form', ["news" => $news])
            </div>
        </div>
    </div>
@endsection

@push('js-complements')
	<script src="{{ asset('js/tinymce/tinymce.min.js') }}"></script>
    <script src="{{ asset('vendor/laravel-filemanager/js/lfm.js') }}"></script>
    <script>
        $('#lfm').filemanager('image');
        var editor_config = {
            path_absolute : "{{ url()->to('/') }}/",
            selector: "textarea",
            plugins: [
                "advlist autolink lists link image preview hr anchor pagebreak",
                "code fullscreen",
                "nonbreaking save table contextmenu directionality",
                " paste textcolor colorpicker textpattern"
            ],
            toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image | code",
            menubar: false,
            relative_urls: false,
            file_browser_callback : function(field_name, url, type, win) {
                var x = window.innerWidth || document.documentElement.clientWidth || document.getElementsByTagName('body')[0].clientWidth;
                var y = window.innerHeight|| document.documentElement.clientHeight|| document.getElementsByTagName('body')[0].clientHeight;

                var cmsURL = editor_config.path_absolute + 'laravel-filemanager?field_name=' + field_name;
                if (type == 'image') {
                    cmsURL = cmsURL + "&type=Images";
                } else {
                    cmsURL = cmsURL + "&type=Files";
                }

                tinyMCE.activeEditor.windowManager.open({
                    file : cmsURL,
                    title : 'Filemanager',
                    width : x * 0.8,
                    height : y * 0.8,
                    resizable : "yes",
                    close_previous : "no"
                });
            }
        };

        tinymce.init(editor_config);
	</script>

@endpush