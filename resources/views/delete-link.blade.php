@props(['url'])

<a href="#" data-bs-toggle="modal" data-bs-target="#modal_{{ $uniqueId }}" {{ $attributes }}>
  @if($slot->isEmpty())
    <span class="btn btn-sm btn-outline-danger">
      <i class="fa-solid fa-fw fa-trash"></i>
    </span>
  @else
    {{ $slot }}
  @endif
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
        <form action="{{ $url }}" method="POST" id="deleteForm_{{ $uniqueId }}">
            @method("DELETE")
            @csrf
            <p class="m-0">{{ trans('ui.delete_text') }}</p>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">{{ trans('ui.close') }}</button>
        <button type="submit" form="deleteForm_{{ $uniqueId }}" class="btn btn-danger">{{ trans('ui.yes') }}</button>
      </div>
    </div>
  </div>
</div>
@endpush
