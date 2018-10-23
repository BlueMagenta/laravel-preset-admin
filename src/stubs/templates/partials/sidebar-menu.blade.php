<ul class="nav">

    {{--menu title--}}
    <li class="nav-title">Menu Title</li>

    {{--single menu--}}
    <li class="nav-item">
        <a class="nav-link" href="#">
            <i class="nav-icon fas fa-users"></i> Menu
        </a>
    </li>

    {{--nested menu--}}
    <li class="nav-item nav-dropdown">
        <a class="nav-link nav-dropdown-toggle" href="#">
            <i class="nav-icon fas fa-puzzle-piece"></i> Menu with sub
        </a>

        {{--submenus--}}
        <ul class="nav-dropdown-items">
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <i class="nav-icon fas fa-ambulance"></i> Submenu
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="#">
                    <i class="nav-icon fas fa-archive"></i> Submenu
                </a>
            </li>
        </ul>
    </li>
</ul>