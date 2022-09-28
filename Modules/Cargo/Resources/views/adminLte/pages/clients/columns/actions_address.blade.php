@php
$user_role = auth()->user()->role;
$Client = 4;
@endphp

{{-- @if (auth()->user()->can('view-customers') ||
    $user_role == $Client)
    <a href="{{ fr_route('clients.show', $model->id) }}" class="btn btn-sm btn-secondary btn-action-table" data-toggle="tooltip" title="{{ __('view.view_profile') }}">
        <i class="fas fa-eye fa-fw"></i>
    </a>
@endif --}}

<!-- begin: Btn Edit Row -->
@if (auth()->user()->can('edit-customers') || $user_role == $Client)
    <a href="{{ fr_route('address.edit', $model->id) }}" class="btn btn-sm btn-secondary btn-action-table" data-toggle="tooltip" title="{{ __('view.edit') }}">
        <i class="fas fa-edit fa-fw"></i>
    </a>
@endif
<!-- end: Btn Edit Row -->



<!-- begin: Btn Delete Row -->
@if (auth()->user()->can('delete-customers') || $user_role == $Client)
    <a href="{{ fr_route('address.delete', $model->id) }}" class="btn btn-sm btn-secondary btn-action-table"
        data-toggle="tooltip" title="{{ __('view.delete') }}">
        <i class="fas fa-trash fa-fw"></i>
    </a>
@endif
<!-- end: Btn Delete Row -->


<!-- begin: Btn Delete Row -->
    {{-- <button type="button" href="{{ fr_route('delete-customers', $model->id) }}" data-callback="reload-table"
        data-table-id="{{ isset($table_id) ? $table_id : '' }}" data-model-name="{{ $model->name }}"
        data-modal-message="@lang('view.modal_message_delete')" data-modal-action="@lang('view.delete')"
        data-time-alert="2000" class="delete-row btn btn-sm btn-secondary btn-action-table btn-custom"
        data-toggle="tooltip" title="{{ __('view.delete') }}">
        <i class="fas fa-trash fa-fw"></i>
    </button> --}}



<!-- end: Btn Delete Row -->
