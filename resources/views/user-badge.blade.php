@props(["user", "color" => false])

@if($color)
<span style="background-color: {{ $user->color }} !important" class="user-badge" title="{{ $user->nameFormatted }}">
    {{ $user->initials }}
</span>
@else
<span class="user-badge" title="{{ $user->nameFormatted }}">
    {{ $user->initials }}
</span>
@endif
