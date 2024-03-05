<nav class="navbar navbar-expand-lg bg-white border-bottom">
  <div class="container-xl">

    <!-- Logo -->
    <a class="navbar-brand" href="{{ route($homepage) }}">
        <div class="d-flex align-items-center gap-2">
            <x-ui::logo width="35" height="35" />
            <span>{{ config("app.name") }}</span>
        </div>
    </a>

    <!-- Navbar toggle -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Main menu -->
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        @auth
          @foreach($items as $item)
            <li @class(['nav-item', 'dropdown' => array_key_exists('subpages', $item)])>
              @if(array_key_exists('subpages', $item))
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  {{ $item['label'] }}
                </a>
                <ul class="dropdown-menu">
                  @foreach($item['subpages'] as $subpage)
                  <li>
                    <a class="dropdown-item" href="{{ route($subpage['url']) }}">
                      {{ $subpage['label'] }}
                    </a>
                  </li>
                  @endforeach              
                </ul>
              @else
                <a @class(['nav-link', 'active' => request()->routeIs($item['url'])]) href="{{ route($item['url']) }}">
                  {{ $item['label'] }}
                </a>
              @endif
            </li>
          @endforeach
        @endauth
      </ul>

      <!-- User navigation -->
      <ul class="navbar-nav mb-2 mb-lg-0">
        <li class="nav-item dropdown">
            @auth
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                <i class="fa-regular fa-user me-1"></i>
                {{ auth()->user()->fullName }}
            </a>
            <ul class="dropdown-menu dropdown-menu-end">
                <li>
                    <a href="{{ route('profile.edit') }}" @class(['dropdown-item', 'active' => request()->routeIs('profile.edit')])>
                        <span class="me-1"><i class="fa-solid fa-fw fa-user-gear"></i></span>
                        <span>Nastavenia</span>
                    </a>
                </li>
                <li>
                  <x-ui::navigation.logout />
                </li>
            </ul>
            @else
                <a class="nav-link" href="{{ route('login') }}">{{ trans('auth.login') }}</a>
            @endauth
        </li>
      </ul>
    </div>
  </div>
</nav>