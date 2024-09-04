 <nav class="sidebar sidebar-offcanvas" id="sidebar">
  <ul class="nav">
    <li class="nav-item nav-profile">
      <a href="#" class="nav-link">
        <div class="nav-profile-text d-flex flex-column">
          <span class="font-weight-bold mb-2">Admin</span>
          <span class="text-secondary text-small">SSC/BITS</span>
        </div>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{ route('dashboard') }}">
        <span class="menu-title">Dashboard</span>
        <i class="mdi mdi-home menu-icon"></i>
      </a>
    </li>
     <li class="nav-item">
      <a class="nav-link" href="{{ route('payment') }}">
        <span class="menu-title">Students</span>
        <i class="mdi mdi-library-books menu-icon"></i>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{ route('attendance.log') }}">
        <span class="menu-title">View Attendances</span>
        <i class="mdi mdi-library-books menu-icon"></i>
      </a>
    </li>
    <li class="nav-item">
        <a class="nav-link collapsed" data-bs-toggle="collapse" href="#preferences" aria-expanded="false" aria-controls="preferences">
          <span class="menu-title">Preferences</span>
          <i class="menu-arrow"></i>
          <i class="mdi mdi-medical-bag menu-icon"></i>
        </a>
        <div class="collapse" id="preferences" style="">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="{{ route('acadyear.index') }}">School Year</a></li>
          </ul>
        </div>
    </li>
  </ul>
</nav>