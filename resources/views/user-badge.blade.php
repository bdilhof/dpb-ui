@props([
    "user",
    "color" => false,
    "size" => 26
])

@if($color)
<span style="width: {{ $size }}px; height: {{ $size }}px; line-height: {{ $size }}px; background-color: {{ $user->color }} !important;" class="user-badge bg-secondary" title="{{ $user->nameFormatted }}">
    {{ $user->initials }}
</span>
@else
<span style="width: {{ $size }}px; height: {{ $size }}px; line-height: {{ $size }}px;" class="user-badge bg-secondary" title="{{ $user->nameFormatted }}">
    {{ $user->initials }}
</span>
@endif
