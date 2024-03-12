@props(["text"])

<div class="dropdown">

    <button
        {{ $attributes->merge(['class' => 'btn btn-outline-secondary dropdown-toggle']) }}
        type="button"
        data-bs-toggle="dropdown"
        aria-expanded="false">
        {{ $text }}
    </button>

    <ul class="dropdown-menu dropdown-menu-end">
        {{ $slot }}
    </ul>

</div>