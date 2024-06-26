@props([
    "color" => "secondary"
])

<div class="modal fade" tabindex="-1" {{ $attributes }}>
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content text-wrap">

      @if(isset($header))
      <div class="modal-header text-bg-{{ $color }}">
        <h1 class="modal-title fs-5" id="exampleModalLabel">
          {{ $header }}
        </h1>
        <button type="button" @class(['btn-close', 'btn-close-white' => $color === 'dark']) data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      @endif

      <div class="modal-body">
        {{ $slot }}
      </div>

      @if(isset($footer))
      <div class="modal-footer">
        {{ $footer }}
      </div>
      @endif

    </div>
  </div>
</div>
