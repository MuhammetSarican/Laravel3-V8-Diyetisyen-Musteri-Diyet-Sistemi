<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{route('admin_home')}}">
        <div class="sidebar-brand-icon">
            <img src="{{asset('adminassets')}}/icons/gear.png" style="height: 55px">
        </div>
        <div class="sidebar-brand-text font-italic font-weight-light mx-3">Admin Panel</div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item active">
        <a class="nav-link" href="index.html">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        Interface
    </div>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
           aria-expanded="true" aria-controls="collapseTwo">
            <i class="fas fa-fw fa-cog"></i>
            <span>Components</span>
        </a>
        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Custom Components:</h6>
                <a class="collapse-item" href="buttons.html">Buttons</a>
                <a class="collapse-item" href="cards.html">Cards</a>
            </div>
        </div>
    </li>

    <!-- Nav Item - Utilities Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities"
           aria-expanded="true" aria-controls="collapseUtilities">
            <i class="fas fa-fw fa-wrench"></i>
            <span>Utilities</span>
        </a>
        <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
             data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Custom Utilities:</h6>
                <a class="collapse-item" href="utilities-color.html">Colors</a>
                <a class="collapse-item" href="utilities-border.html">Borders</a>
                <a class="collapse-item" href="utilities-animation.html">Animations</a>
                <a class="collapse-item" href="utilities-other.html">Other</a>
            </div>
        </div>
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
            Category
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link collapsed" href="{{route('admin_treatments')}}">
            <i class="fas fa-fw fa-folder"></i>
            Treatments
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link collapsed" href="{{route('admin_review')}}">
            <i class="fas fa-fw fa-folder"></i>
            Reviews
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link collapsed" href="{{route('admin_faq')}}">
            <i class="fas fa-fw fa-folder"></i>
            FAQ
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link collapsed" href="{{route('admin_orders')}}">
            <i class="fas fa-fw fa-folder"></i>
            Orders
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link collapsed" href="{{route('admin_users')}}">
            <i class="fas fa-fw fa-folder"></i>
            Users
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link collapsed" href="{{route('admin_appointments')}}">
            <i class="fas fa-fw fa-folder"></i>
            Appointments
        </a>
    </li>

</ul>
<hr class="sidebar-divider">
<div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
</div>
{{--data-toggle="collapse" data-target="#collapsePages"--}}
{{--aria-expanded="true" aria-controls="collapsePages"Aşağı Açılan Menü--}}
