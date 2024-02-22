@props([
    "href" => "#",
    "text" => "",
    "icon" => null,
])

<li>
    <a href="{{ $href }}" {{ $attributes->merge(['class' => 'dropdown-item']) }}>

        @if(isset($icon))
        <span class="me-1">
            <i class="fa-solid fa-fw fa-{{ $icon }}"></i>
        </span>
        @endif

        <span>{{ $text }}</span>
    </a>
</li>

