@props([
    "name",
    "label" => "",
    "id",
    "value" => "",
])

<div>
    @if($label)
    <label for="{{ $id }}" class="form-label">
        {{ $label }}
    </label>
    @endif

    <textarea {{ $attributes->merge(['class' => $getDefaultClass()]) }}
        id="{{ $id }}"
        name="{{ $name }}"
    >{!! html_entity_decode($value) !!}</textarea>

    @error($name)
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror

</div>
