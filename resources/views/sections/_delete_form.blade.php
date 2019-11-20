<form id="deleteform" action="{{ route('delete_section_path', ['section'=> $section->id])}}" method="POST">
    {{csrf_field()}}
    {{method_field('DELETE')}}
    <p class="lead">@lang('messages.actions.delete_confirm')</p>
    <div class="modal-footer">
    <button type="button" class="btn btn-outline-secondary" data-dismiss="modal">@lang('messages.actions.cancel')</button>
    <button type="submit" class="btn btn-outline-primary"><i class="fa fa-trash-o fa-lg"></i> @lang('messages.actions.delete')</button>
    </div>
</form>