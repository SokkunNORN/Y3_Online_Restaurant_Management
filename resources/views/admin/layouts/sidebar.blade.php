
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/admin">
        <div class="sidebar-brand-icon rotate-n-15">
        <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">Restaurant</div>
    </a>

    <hr class="sidebar-divider my-0">

    <li class="nav-item {{ request()->is('admin/dashboard*') ? 'active' : '' }}">
        <a class="nav-link" href="/admin/dashboard">
        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Dashboard</span></a>
    </li>

    <hr class="sidebar-divider">

    <div class="sidebar-heading">
        Interface
    </div>

    <li class="nav-item {{ request()->is('admin/button*') || request()->is('admin/card*') ? 'active' : '' }}">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
        <i class="fas fa-fw fa-cog"></i>
        <span>Components</span>
        </a>
        <div id="collapseTwo" class="collapse {{ request()->is('admin/button*') || request()->is('admin/card*') ? 'show' : '' }}" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Custom Components:</h6>
            <a class="collapse-item {{ request()->is('admin/buttons*') ? 'active' : '' }}" href="/admin/buttons">Buttons</a>
            <a class="collapse-item {{ request()->is('admin/card*') ? 'active' : '' }}" href="/admin/card">Cards</a>
        </div>
        </div>
    </li>

    <hr class="sidebar-divider">

    <li class="nav-item {{ request()->is('admin/chart*') ? 'active' : '' }}">
        <a class="nav-link" href="/admin/chart">
        <i class="fas fa-fw fa-chart-area"></i>
        <span>Charts</span></a>
    </li>

    <li class="nav-item {{ request()->is('admin/table*') ? 'active' : '' }}">
        <a class="nav-link" href="/admin/table">
        <i class="fas fa-fw fa-table"></i>
        <span>Tables</span></a>
    </li>

    <hr class="sidebar-divider d-none d-md-block">

    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
