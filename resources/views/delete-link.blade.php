@props(['url'])

@php
$uniqueId = uniqid();
@endphp

<a href="#" class="dropdown-item text-danger" data-bs-toggle="modal" data-bs-target="#modal_{{ $uniqueId }}">
    <span class="me-1"><i class="fa-solid fa-fw fa-trash"></i></span>
    <span>{{ trans('ui.delete') }}</span>
</a>

@push('bottom')
<div class="modal fade" id="modal_{{ $uniqueId }}" tabindex="-1">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content text-wrap">
      <div class="modal-header text-bg-danger">
        <h1 class="modal-title fs-5">{{ trans('ui.delete') }}</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="{{ $url }}" method="POST" id="deleteForm">
            @method("DELETE")
            @csrf
            <p class="m-0">{{ trans('ui.delete_text') }}</p>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">{{ trans('ui.close') }}</button>
        <button type="submit" form="deleteForm" class="btn btn-danger">{{ trans('ui.yes') }}</button>
      </div>
    </div>
  </div>
</div>
@endpush