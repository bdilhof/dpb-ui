@props([
    "active" => false,
    "title"
])

<li class="nav-item dropdown">
    <a href="#" @class(['nav-link dropdown-toggle', 'active' => $active]) data-bs-toggle="dropdown" aria-expanded="false">
        {{ $title }}
    </a>
    <ul class="dropdown-menu">
        {{ $slot }}
    </ul>
</li>
