@props([
    "user",
    "color" => false,
    "size" => 26
])

<span 
    class="user-badge bg-secondary" 
    title="{{ $user->nameFormatted }}" 
    @style([
        "width: {$size}px",
        "height: {$size}px",
        "line-height: {$size}px",
        $color ? "background-color: {$user->color} !important" : null,
    ])
>
    {{ $user->initials }}
</span>
