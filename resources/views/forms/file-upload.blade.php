@props([
    "label" => "",
    "name",
    "id",
    "helpText"
])

<div>

    @if($label)
    <label for="attachment" class="form-label">
        {{ $label }}
    </label>
    @endif

    <input @class(["form-control", "is-invalid" => $errors->has($name)]) type="file" id="{{ $id }}" name="{{ $name }}">

    @if($helpText)
    <div class="form-text">
        {{ $helpText }}
    </div>
    @endif

    @error($name)
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror

</div>