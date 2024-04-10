@props([
    "route",
    "disabled" => false
])

<li class="nav-item">
    <a href="{{ route($route) }}" @class(['dropdown-item', 'disabled' => $disabled, 'active' => request()->routeIs($route)])>
        {{ $slot }}
    </a>
</li>
