{{-- 
    sidebar component. usually containing menu
--}}

{{--disable this by default since mostly is unused. uncomment to activate--}}
{{--Sidebar user panel--}}
{{-- <div class="user-panel">
    <div class="pull-left image">
        <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
    </div>
    <div class="pull-left info">
        <p>Alexander Pierce</p>
        <!-- Status -->
        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
    </div>
</div> --}}

{{--search form--}}
{{-- <form action="#" method="get" class="sidebar-form">
    <div class="input-group">
        <input type="text" name="q" class="form-control" placeholder="Search...">
        <span class="input-group-btn">
            <button type="submit" name="search" id="search-btn" class="btn btn-flat">
                <i class="fa fa-search"></i>
            </button>
        </span>
    </div>
</form> --}}


{{--Sidebar Menu--}}
<ul class="sidebar-menu" data-widget="tree">
    <li class="header">HEADER</li>

    <li class="active">
        <a href="#"><i class="fa fa-link"></i> <span>Link</span></a>
    </li>

    <li>
        <a href="#"><i class="fa fa-link"></i> <span>Another Link</span></a>
    </li>

    <li class="treeview">
        <a href="#"><i class="fa fa-link"></i> <span>Multilevel</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
        </a>

        <ul class="treeview-menu">
            <li><a href="#">Link in level 2</a></li>
            <li><a href="#">Link in level 2</a></li>
        </ul>
    </li>
</ul>