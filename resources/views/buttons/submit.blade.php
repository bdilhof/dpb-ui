@props(["id", "text", "loadingText" => "..."])

<button id="{{ $id }}" type="submit" class="btn btn-block btn-primary w-100" onclick="addSpinerAndDisable('#{{ $id }}', '{{ $loadingText }}')">
    {{ $text }}
</button>
