<header class="app-header fixed-top">
  <!-- Start of the Navigation Bar -->
  <div class="app-header-inner">
    <div class="container-fluid d-flex flex-row px-0">
      <div class="app-branding m-0 p-0 bg-primary d-flex align-items-center justify-content-center" style="width: 18rem">
        <a class="app-logo" href="index.html"><img class="logo-icon me-2" src="{{ asset('images/logo.png') }}" alt="logo"><span class="logo-text text-white fs-4">EVSU-OC</span></a>
      </div>
      <div class="app-header-content bg-danger container-fluid pt-0 pt-md-2">
        <div class="row justify-content-between align-items-center pt-3 py-sm-0 py-md-0">
          <div class="col-auto">
            <a id="sidepanel-toggler" class="sidepanel-toggler text-white" href="#">
              <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" role="img"><title>Menu</title><path stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="2" d="M4 7h22M4 15h22M4 23h22"></path></svg>
            </a>
          </div>

          <div class="app-utilities col-auto pb-0 pb-sm-2">
            <div class="app-utility-item app-user-dropdown dropdown">
              <a class="dropdown-toggle" id="user-dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false"><img src="{{ asset('images/avatar.png') }}" alt="user profile"></a>
                <ul class="dropdown-menu" aria-labelledby="user-dropdown-toggle">
                  <li><a class="dropdown-item" href="account">Account</a></li>
                  <li><a class="dropdown-item" href="settings">Settings</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" href="login">Log Out</a></li>
                </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End of the Navigation Bar-->
</header>
