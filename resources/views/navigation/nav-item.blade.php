@props(["route", "title", "disabled" => false])

<li>
    <a href="{{ route($route) }}" @class(['dropdown-item', 'disabled' => $disabled, 'active' => request()->routeIs($route)])>
        {{ $title }}
    </a>
</li>
