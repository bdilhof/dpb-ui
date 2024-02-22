@props([
    "name",
    "items",
    "label",
    "value" => null
])

<div>

    <!-- Label -->
    <label for="assigned_to" class="form-label">{{ $label }}</label>

    <!-- Select -->
    <select {{ $attributes }} name="{{ $name }}" class="form-select">
        <option selected disabled>{{ trans('ui.choose') }}</option>
        @foreach($items as $item)
        <option @selected($item->value == $value) value="{{ $item->value }}">{{ $item->label }}</option>
        @endforeach
    </select>

    @error($name)
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror

</div>