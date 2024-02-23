@props(["route", "title", "disabled" => false])

<li class="nav-item">
    <a href="{{ route($route) }}" @class(['nav-link', 'disabled' => $disabled, 'active' => request()->routeIs($route)])>
        {{ $title }}
    </a>
</li>
