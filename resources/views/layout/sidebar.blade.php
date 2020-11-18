<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

  <!-- Sidebar - Brand -->
  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
    <div class="sidebar-brand-icon rotate-n-15">
      <!-- <i class="fas fa-laugh-wink"></i> -->
    </div>
    <div class="sidebar-brand-text mx-3">Dashboard</div>
  </a>

  <!-- Divider -->
  <hr class="sidebar-divider">

  <!-- Heading -->
  <div class="sidebar-heading" style="display: none;">
    Interface
  </div>

  <!-- Nav Item - Pages Collapse Menu -->
  <li class="nav-item">
    <a class="nav-link collapsed" href="{{ route('list_staff_index') }}" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
      <i class="fas fa-user fa-sm fa-fw text-gray-400"></i>
      <span>Staff manager</span>
    </a>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
{{--        <h6 CLASS="collapse-header">Custom Components:</h6>--}}
        <a class="collapse-item color-while" href="{{ route('list_staff_create') }}"><i class="fas fa-user-edit fa-sm fa-fw text-gray-400"></i> Add staff</a></br>
        <a class="collapse-item color-while" href="#"><i class="fas fa-user fa-sm fa-fw text-gray-400"></i> Profile</a>
    </div>
  </li>
  <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
      <!-- <i class="fas fa-fw fa-cog"></i> -->
      <i class="fas fa-fw fa-cog"></i>
      <span>salary management</span>
    </a>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
    </div>
  </li>
  <li class="nav-item">
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
      <!-- <i class="fas fa-fw fa-cog"></i> -->
      <i class="fas fa-envelope fa-fw"></i>
      <span>Attendance Manager</span>
    </a>
    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
    </div>
  </li>

</ul>
<!-- End of Sidebar -->
