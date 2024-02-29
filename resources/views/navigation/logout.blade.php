<button type="submit" class="dropdown-item" form="logoutForm">
    <span class="me-1"><i class="fa-solid fa-fw fa-right-from-bracket"></i></span>
    <span>{{ trans('ui.logout') }}</span>
</button>

<form action="{{ route('logout') }}" method="POST" id="logoutForm" class="d-none">
    @csrf
</form>