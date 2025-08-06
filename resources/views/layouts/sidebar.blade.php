<!-- HEAD -->
<head>
  <link rel="stylesheet" href="{{ asset('admin_assets/css/sb-admin-2.min.css') }}">
  <link rel="stylesheet" href="{{ asset('admin_assets/vendor/fontawesome-free/css/all.min.css') }}">
  <script src="{{ asset('admin_assets/js/sb-admin-2.min.js') }}"></script>
</head>

<!-- SIDEBAR -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

  <!-- Sidebar - Brand -->
  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('dashboard') }}">
    <div class="sidebar-brand-icon rotate-n-15">
      <i class="fas fa-laugh-wink"></i>
    </div>
    <div class="sidebar-brand-text mx-3">SB Admin <sup>2</sup></div>
  </a>

  <!-- Divider -->
  <hr class="sidebar-divider my-0">

  <!-- Nav Item - Dashboard -->
  <li class="nav-item {{ request()->routeIs('dashboard') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('dashboard') }}">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Dashboard</span>
    </a>
  </li>

  <!-- Nav Item - Product -->
  <li class="nav-item {{ request()->routeIs('dashboard') ? 'active' : '' }}">
    <a class="nav-link" href="{{ route('dashboard') }}">
      <i class="fas fa-fw fa-box"></i>
      <span>View</span>
    </a>
  </li>

  <!-- Nav Item - Profile -->
  <li class="nav-item {{ request()->is('profile') ? 'active' : '' }}">
    <a class="nav-link" href="/profile">
      <i class="fas fa-fw fa-user"></i>
      <span>Profile</span>
    </a>
  </li>

  <!-- Divider -->
  <hr class="sidebar-divider d-none d-md-block">

  <!-- Sidebar Toggler (Sidebar) -->
  <div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
  </div>

</ul>
