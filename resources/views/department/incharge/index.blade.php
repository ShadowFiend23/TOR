<x-authenticated_layout>
  <div class="container-fluid px-5">
    <div class="card border border-0 px-0 mx-0">
      <div class="card-header p-4  bg-dark">
        <h5 class="card-title text-white mt-2">Transcript of Records </h5>
      </div>

      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-body">
              <h5>Confirmation</h5>
              <p>
                Do you really want to unarchived account_name?
              </p>
              <div class="text-end">
                <button type="button" class="btn btn-info btn-sm px-3" data-coreui-toggle="modal" data-coreui-target="#successModal">Ok</button>
                <button type="button" class="btn btn-secondary btn-sm" data-coreui-dismiss="modal">Cancel</button>
              </div>
            </div>
          </div>
        </div>
      </div>



      <!-- Success Modal -->
      <div class="modal fade" id="successModal" tabindex="-1" aria-labelledby="successModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-body">
              <p>
                Account Successfully Restored!
              </p>
              <div class="text-end">
                <button type="button" class="btn btn-info btn-sm px-3" data-coreui-dismiss="modal">Ok</button>
              </div>
            </div>
          </div>
        </div>
      </div>

        <!-- Modal -->
      <div class="modal modal-lg gfade" id="archiveModal" tabindex="-1" aria-labelledby="archiveModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header bg-dark ps-5">
              <h5 class="modal-title text-white" id="archiveModalLabel">Archived IN-CHARGE</h5>
              <button type="button" class="btn-close" data-coreui-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">Admin ID</th>
                    <th scope="col">Email</th>
                    <th scope="col">Name</th>
                    <th scope="col">Designation</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">23</th>
                    <td>admin123@evsu.edu.ph</td>
                    <td>Rosalinda F. Delan</td>
                    <td>Co-Admin</td>
                    <td>
                      <a href="#" class="text-info text-decoration-none" data-coreui-toggle="modal" data-coreui-target="#exampleModal">Unarchive</a>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-coreui-dismiss="modal">Cancel</button>
            </div>
          </div>
        </div>
      </div>

      <div class="d-flex align-items-center justify-content-end p-2">
        <button class="btn btn-info shadow text-white" data-coreui-toggle="modal" data-coreui-target="#archiveModal">
          <span class="text-white">
            Archived IN-CHARGE
          </span>
        </button>
      </div>
      <div class="card-body shadow mt-2">
        <table id="incharge_table" class="table" style="width:100%;">
          <thead>
              <tr>
                  <th>Avatar</th>
                  <th>Name</th>
                  <th>Email</th>
                  <th>Employee ID</th>
                  <th>Gender</th>
                  <th>Designation</th>
                  <th>Action</th>
              </tr>
          </thead>
          <tbody>
            <tr>
              <td>
                <div class="avatar avatar-xl">
                  <img class="avatar-img" src="{{ asset('images/logo.png') }}">
                </div>
              </td>
              <td><p class="mt-4">Rosalinda F. Delan</p></td>
              <td><p class="mt-4">sample@evsu.edu.ph</p></td>
              <td><p class="mt-4">2023-30516</p></td>
              <td><p class="mt-4">Female</p></td>
              <td><p class="mt-4">BSIT</p></td>
              <td>
                <div class="dropdown mt-3">
                  <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" id="dropdownMenuButton" data-coreui-toggle="dropdown" aria-expanded="false">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 30 30" role="img"><title>Menu</title><path stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="2" d="M4 7h22M4 15h22M4 23h22"></path></svg>
                  </button>
                  <ul class="dropdown-menu dropdown-menu-sm" aria-labelledby="dropdownMenuButton">
                    <li class="d-flex flex-row justify-content-between">
                      <a class="dropdown-item" href="#">
                        <span class="text-info">
                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                            <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8M1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/>
                            <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5M4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0"/>
                          </svg>
                        </span>
                        View
                      </a>
                    </li>
                    <li class="d-flex flex-row justify-content-between">
                      <a class="dropdown-item" href="#">
                        <span class="text-info">
                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                            <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                            <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
                          </svg>
                        </span>
                        Change Pass
                      </a>
                    </li>
                    <li class="d-flex flex-row justify-content-between">
                      <a class="dropdown-item" href="#">
                        <span class="text-info">
                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-archive" viewBox="0 0 16 16">
                            <path d="M0 2a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1v7.5a2.5 2.5 0 0 1-2.5 2.5h-9A2.5 2.5 0 0 1 1 12.5V5a1 1 0 0 1-1-1zm2 3v7.5A1.5 1.5 0 0 0 3.5 14h9a1.5 1.5 0 0 0 1.5-1.5V5zm13-3H1v2h14zM5 7.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5"/>
                          </svg>
                        </span>
                        Archive
                      </a>
                    </li>
                  </ul>
                </div>
              </td>
            </tr>
            <tr>
              <td>
                <div class="avatar avatar-xl">
                  <img class="avatar-img" src="{{ asset('images/logo.png') }}">
                </div>
              </td>
              <td><p class="mt-4">Myka G. Marmita</p></td>
              <td><p class="mt-4">sample@evsu.edu.ph</p></td>
              <td><p class="mt-4">2023-30516</p></td>
              <td><p class="mt-4">Female</p></td>
              <td><p class="mt-4">Bom</p></td>
              <td>
                <div class="dropdown mt-3">
                  <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" id="dropdownMenuButton" data-coreui-toggle="dropdown" aria-expanded="false">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 30 30" role="img"><title>Menu</title><path stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="2" d="M4 7h22M4 15h22M4 23h22"></path></svg>
                  </button>
                  <ul class="dropdown-menu dropdown-menu-sm" aria-labelledby="dropdownMenuButton">
                    <li class="d-flex flex-row justify-content-between">
                      <a class="dropdown-item" href="#">
                        <span class="text-info">
                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                            <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8M1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/>
                            <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5M4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0"/>
                          </svg>
                        </span>
                        View
                      </a>
                    </li>
                    <li class="d-flex flex-row justify-content-between">
                      <a class="dropdown-item" href="#">
                        <span class="text-info">
                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                            <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                            <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
                          </svg>
                        </span>
                        Change Pass
                      </a>
                    </li>
                    <li class="d-flex flex-row justify-content-between">
                      <a class="dropdown-item" href="#">
                        <span class="text-info">
                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-archive" viewBox="0 0 16 16">
                            <path d="M0 2a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v2a1 1 0 0 1-1 1v7.5a2.5 2.5 0 0 1-2.5 2.5h-9A2.5 2.5 0 0 1 1 12.5V5a1 1 0 0 1-1-1zm2 3v7.5A1.5 1.5 0 0 0 3.5 14h9a1.5 1.5 0 0 0 1.5-1.5V5zm13-3H1v2h14zM5 7.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5"/>
                          </svg>
                        </span>
                        Archive
                      </a>
                    </li>
                  </ul>
                </div>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</x-authenticated_layout>

