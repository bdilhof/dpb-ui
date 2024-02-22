@props([
    "label",
    "name",
    "id",
    "checked" => false
])

<div class="form-check">
    <input type="hidden" name="{{ $name }}" value="0">
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