@props(["user", "color" => false])

@if($color)
<span style="background-color: {{ $user->color }} !important" class="badge rounded-pill text-uppercase text-bg-primary me-1" title="{{ $user->nameFormatted }}">
    {{ $user->initials }}
</span>
@else
<span class="badge rounded-pill text-uppercase text-bg-secondary me-1" title="{{ $user->nameFormatted }}">
    {{ $user->initials }}
</span>
@endif
