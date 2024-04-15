@props([
    "id",
    "text",
    "loadingText" => "..."
])

<button {{ $attributes->merge(['class' => 'btn btn-block btn-primary w-100']) }} id="{{ $id }}" type="submit" onclick="addSpinerAndDisable('#{{ $id }}', '{{ $loadingText }}')">
    {{ $text }}
</button>
