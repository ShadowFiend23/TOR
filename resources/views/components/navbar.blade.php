<header class="header header-sticky mb-4 bg-primary">
  <div class="container-fluid">
    <button class="header-toggler px-md-0 me-md-3 text-light" type="button" onclick="coreui.Sidebar.getInstance(document.querySelector('#sidebar')).toggle()">
      <i class='bx bx-menu'></i>
    </button>
    <ul class="header-nav ms-3">
      <li class="nav-item dropdown"><a class="nav-link py-0" data-coreui-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
          <div class="avatar avatar-md"><img class="avatar-img" src="{{ asset('images/avatar.png') }}"></div>
        </a>
        <div class="dropdown-menu dropdown-menu-end">
          <a class="dropdown-item" href="#">
            <svg class="icon me-2">
              <i class='bx bxs-user-account' ></i>
            </svg> 
            Account
          </a>
          <a class="dropdown-item" href="#">
            <svg class="icon me-2">
              <i class='bx bx-cog' ></i>
            </svg> Settings
          </a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">
            <svg class="icon me-2">
              <i class='bx bx-log-out' ></i>
            </svg> Logout
          </a>
        </div>
      </li>
    </ul>
  </div>
</header>