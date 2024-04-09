@props([
    "label" => "",
    "id",
    "name",
    "options",
    "value" => null
])

<div>

    @if($label)
    <label class="form-label" for="{{ $id }}">{{ $label }}</label>
    @endif

    <select data-placeholder="{{ trans('ui.choose') }}" name="{{ $name }}" id="{{ $id }}" @class(["js-select2", "is-invalid" => $errors->has($name)])>
        <option @selected(!$value) disabled>{{ trans('ui.choose') }}</option>
        @foreach($options as $option)
        <option @selected($value == $option->value) value="{{ $option->value }}">{{ $option->label }}</option>           
        @endforeach
    </select>

    @error($name)
        <div class="invalid-feedback">
            {{ $message }}
        </div>
    @enderror
</div>
