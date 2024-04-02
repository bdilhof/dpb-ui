@props([
    "label",
    "name",
    "id",
    "checked" => false,
    "default" => null,
])

<div class="form-check">

    @if(isset($default))
    <input type="hidden" name="{{ $name }}" value="{{ $default }}">
    @endif

    <input {{ $attributes }}
        @checked($checked)
        class="form-check-input"
        name="{{ $name }}"
        type="checkbox"
        value="1"
        id="{{ $id }}"
    >

    <label for="{{ $id }}" class="form-check-label">
        {{ $label }}
    </label>
</div>
