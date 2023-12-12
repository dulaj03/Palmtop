<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
  <!-- Sidebar - Brand -->
  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
    <div class="sidebar-brand-text mx-3">PalmTop Admin</div>
  </a>

  <!-- Nav Item - Dashboard -->
  <li class="nav-item">
    <a class="nav-link" href="index.php">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Dashboard</span></a>
  </li>

  <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true"
      aria-controls="collapseTwo">
      <i class="fas fa-fw fa-cog"></i>
      <span>Devices</span>
    </a>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
      <div class="bg-white py-2 collapse-inner rounded">
        <a class="collapse-item" href="view_devices.php">Device list</a>
        <a class="collapse-item" href="add_device.php">New Device</a>
      </div>
    </div>
  </li>

  <!-- Nav Item - Orders -->
  <li class="nav-item">
    <a class="nav-link" href="orders.php">
      <i class="fas fa-fw fa-table"></i>
      <span>Orders</span></a>
  </li>

  <!-- Divider -->
  <hr class="sidebar-divider d-none d-md-block" />

  <!-- Sidebar Toggler (Sidebar) -->
  <div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
  </div>
</ul>