<div class="nav navbar-nav ml-auto">
    <div class="nav-item dropdown">
        <a class="nav-link" href="#" data-toggle="dropdown">
            <span class="d-none d-md-inline">Username</span>

            {{-- todo: user icon --}}
            <img class="img-avatar" src="{{ asset('img/user-default.svg') }}" alt="username">
        </a>
        <div class="dropdown-menu dropdown-menu-right">
            <a class="dropdown-item" href="#">{{ __('Settings') }}</a>
            <a class="dropdown-item" href="#">{{ __('Log out') }}</a>
        </div>
    </div>
</div>