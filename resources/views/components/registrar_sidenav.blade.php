<div class="sidebar sidebar-dark sidebar-fixed" id="sidebar">
  <div class="sidebar-header d-flex justify-content-center" style="background-color: #861212;">
    <div class="sidebar-brand">
      <a class="text-decoration-none fw-bold d-flex align-items-end gap-2" href="index.html">
        <img src="{{ asset('images/logo.png') }}" alt="logo" height="32">
        <span class="text-white lh-0 pb-1">EVSU-OC</span>
      </a>
    </div>
  </div>
  <div class="d-none d-md-flex p-3 gap-2">
    <div class="avatar avatar-lg">
      <img class="avatar-img" src="{{ asset('images/avatar.png') }}">
    </div>
    <div class="info-wrapper d-flex flex-column gap-2">
      <p class="fw-bold mb-0 text-white">Registrar</p>
      <div class="icon-wrapper d-flex flex-row gap-2">
        <a class="text-decoration-none text-white border border-white d-flex align-items-center justify-content-center py-1 px-2" href="#">
          <i class='bx bx-cog' ></i>
        </a>

        <a class="text-decoration-none text-white border border-white d-flex align-items-center justify-content-center py-1 px-2" href="#">
          <i class='bx bx-log-out bx-rotate-180' ></i>
        </a>
      </div>
    </div>
  </div>
  <ul class="sidebar-nav simplebar -scrollable-y" data-coreui="navigation" data-simplebar="init">
    <li class="nav-item w-100">
      <a class="nav-link" href="{{ route('admin') }}">
        <i class='bx bx-desktop' ></i>
        <span class="mx-1">Dashboard</span>
      </a>
    </li>
    <li class="nav-item w-100">
      <a class="nav-link" href="{{ route('employees') }}">
        <i class='bx bxs-graduation'></i>
        <span class="mx-1">Courses</span>
      </a>
    </li>
    <li class="nav-item w-100">
      <a class="nav-link" href="{{ route('departments') }}">
        <i class='bx bx-file' ></i>
        <span class="mx-1">Curriculum</span>
      </a>
    </li>
    <li class="nav-item w-100">
      <a class="nav-link" href="{{ route('students') }}">
        <i class='bx bx-list-check' ></i>
        <span class="mx-1">TOR Request</span>
      </a>
    </li>
    <li class="nav-item w-100">
      <a class="nav-link" href="{{ route('schoolYear') }}">
        <i class='bx bx-analyse' ></i>
        <span class="mx-1">TOR Analysis</span>
      </a>
    </li>
    <li class="nav-item w-100">
      <a class="nav-link" href="{{ route('coAdmin') }}">
        <i class='bx bx-receipt' ></i>
        <span class="mx-1">Transactional Logs</span>
      </a>
    </li>
  </ul>
</div>
