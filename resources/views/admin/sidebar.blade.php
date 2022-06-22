<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('website.index') }}">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">TAHANEENA </div>
    </a>

    <!-- Divider -->
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
        <a class="nav-link" href="index.html">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">



    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsCategories"
            aria-expanded="true" aria-controls="collapsCategories">
            <i class="fas fa-fw fa-tags"></i>
            <span>Categories</span>
        </a>
        <div id="collapsCategories" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Custom Components:</h6>
                <a class="collapse-item" href="{{ route('admin.categories.index') }}">All Categories</a>
                <a class="collapse-item" href="{{ route('admin.categories.create') }}">Add New</a>
                <a class="collapse-item" href="{{ route('admin.categories.trash') }}">Trash</a>
            </div>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsCards"
            aria-expanded="true" aria-controls="collapsCards">
            <i class="fas fa-fw fa-cog"></i>
            <span>Cards</span>
        </a>
        <div id="collapsCards" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">Custom Components:</h6>
                <a class="collapse-item" href="{{ route('admin.cards.index') }}">All Cards</a>
                <a class="collapse-item" href="{{ route('admin.cards.create') }}">Add New</a>
                <a class="collapse-item" href="{{ route('admin.cards.trash') }}">Trash</a>
            </div>
        </div>
    </li>



    <!-- Divider -->
    <hr class="sidebar-divider">





    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->
