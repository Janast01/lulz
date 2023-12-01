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
      <a class="nav-link" href="{{ route('payment.search') }}">
        <span class="menu-title">Payment</span>
        <i class="mdi mdi-library-books menu-icon"></i>
      </a>
    </li>
    <li class="nav-item">
        <a class="nav-link collapsed" data-bs-toggle="collapse" href="#general-pages" aria-expanded="false" aria-controls="general-pages">
          <span class="menu-title">Attendances</span>
          <i class="menu-arrow"></i>
          <i class="mdi mdi-medical-bag menu-icon"></i>
        </a>
        <div class="collapse" id="general-pages" style="">
          <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href="{{ route('attendance.log') }}">View Attendances</a></li>
          </ul>
        </div>
    </li>
     <li class="nav-item">
         <a class="nav-link" href="{{ route('academicyear.index') }}">
           <span class="menu-title">School Year</span>
           <i class="mdi mdi-library-books menu-icon"></i>
        </a>
    </li>
  </ul>
</nav>