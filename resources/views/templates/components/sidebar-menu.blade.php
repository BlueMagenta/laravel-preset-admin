<div class="nav">
    <span class="nav-title">{{ __('Menu Title') }}</span>
    <div class="nav-item nav-dropdown">
        <a href="#" class="nav-link nav-dropdown-toggle">{{ __('Nested Menu Item') }}</a>
        <div class="nav-dropdown-items">
            <a href="{{ url('submenu') }}" class="nav-link">{{ __('Submenu') }}</a>
        </div>
    </div>
    <a href="#" class="nav-item nav-link">{{ __('Menu Item') }}</a>
</div>
