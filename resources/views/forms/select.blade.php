@props([
    "name" => "",
    "items" => collect([]),
    "label" => "",
    "value" => null,
    "id" => "",
])

<div>

    <!-- Label -->
    @if($label)
    <label for="{{ $id }}" class="form-label">
        {{ $label }}
    </label>
    @endif

    <!-- Select -->
    <select {{ $attributes }} name="{{ $name }}" id="{{ $id }}" class="form-select">
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
