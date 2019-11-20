<div class="modal fade" id="askConfirm" tabindex="-1" role="dialog" aria-labelledby="modal-title" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modal-title">@lang('messages.actions.title_confirm')</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="deleteform" action="{{ route('delete_section_path', ['section'=> $section->id])}}" method="POST">
                    {{csrf_field()}}
                    {{method_field('DELETE')}}
                    <p class="lead">@lang('messages.actions.delete_confirm')</p>
                    <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">@lang('messages.actions.cancel')</button>
                    <button type="submit" class="btn btn-outline-primary"><i class="fa fa-trash-o fa-lg"></i> @lang('messages.actions.delete')</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>



