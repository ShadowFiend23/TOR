<header class="header header-sticky p-0 mb-4 bg-primary">
  <div class="container-fluid px-4">
    <button class="header-toggler px-md-0 me-md-3 text-light" type="button" onclick="coreui.Sidebar.getInstance(document.querySelector('#sidebar')).toggle()">
      <i class='bx bx-menu'></i>
    </button>
    <ul class="header-nav ms-3">
      <li class="nav-item dropdown"><a class="nav-link py-0" data-coreui-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
          <div class="avatar avatar-md"><img class="avatar-img" src="{{ asset('images/avatar.png') }}" alt="Avatar Image"></div>
        </a>
        <div class="dropdown-menu dropdown-menu-end py-0" style="width: 200px !important;">
          <div class="bg-primary p-3 text-center">
            <div class="avatar avatar-md mb-2"><img class="avatar-img" src="{{ asset('images/avatar.png') }}" alt="Avatar Image"></div>
            <div class="text-light fs-sm">USERNAME</div>
          </div>
          <div>
            <a class="nav-link py-1 px-2" href="/student/update_photo">
              <i class='bx bx-image-alt' ></i>
              Update Photo
            </a>
            <a class="nav-link py-1 px-2" href="#">
              <i class='bx bx-cog' ></i>
              Account Settings
            </a>
            <a class="nav-link py-1 px-2" href="/student/update_password">
              <i class='bx bx-cog' ></i>
              Change Password
            </a>
            <div class="dropdown-divider"></div>
            <a class="nav-link text-end text-danger px-2 py-1" href="{{ route('logout') }}">
              <i class='bx bx-log-out' ></i>
              Logout
            </a>
          </div>
        </div>
      </li>
    </ul>
  </div>
</header>
