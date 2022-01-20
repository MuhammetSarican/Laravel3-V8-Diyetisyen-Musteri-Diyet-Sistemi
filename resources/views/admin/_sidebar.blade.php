<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion toggled" id="accordionSidebar">
    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{route('admin_home')}}">
        <div class="sidebar-brand-icon">
            <img src="{{asset('adminassets')}}/icons/gear.png" style="height: 55px">
        </div>
        <div class="sidebar-brand-text font-italic font-weight-light mx-2">DiyetSis Admin Panel</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="{{route('admin_home')}}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        PAGES
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="{{route('admin_category')}}">
            <i class="fas fa-fw fa-folder"></i>
            <span>Categories</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link collapsed" href="{{route('admin_treatments')}}">
            <i class="fas fa-fw fa-folder"></i>
            <span>Treatments</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link collapsed" href="{{route('admin_review')}}">
            <i class="fas fa-fw fa-folder"></i>
            <span>Reviews</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link collapsed" href="{{route('admin_faq')}}">
            <i class="fas fa-fw fa-folder"></i>
            <span>FAQ's</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities1"
           aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fas fa-fw fa-folder"></i>
            <span>Orders</span>
        </a>
        <div id="collapseUtilities1" class="collapse" aria-labelledby="headingUtilities"
             data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <a class="collapse-item" href="{{route('admin_orders',['status'=>'new'])}}">New</a>
                <a class="collapse-item" href="{{route('admin_orders',['status'=>'accepted'])}}">Accepted</a>
                <a class="collapse-item" href="{{route('admin_orders',['status'=>'denied'])}}">Denied</a>
            </div>
        </div>
    </li>
    <li class="nav-item">
        <a class="nav-link collapsed" href="{{route('admin_users')}}">
            <i class="fas fa-fw fa-folder"></i>
            <span>Users</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link collapsed" href="{{route('admin_appointments')}}">
            <i class="fas fa-fw fa-folder"></i>
            <span>Appointments</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link collapsed" href="{{route('admin_processes')}}">
            <i class="fas fa-fw fa-folder"></i>
            <span>Processes</span>
        </a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>


{{--data-toggle="collapse" data-target="#collapsePages"--}}
{{--aria-expanded="true" aria-controls="collapsePages"Aşağı Açılan Menü--}}
