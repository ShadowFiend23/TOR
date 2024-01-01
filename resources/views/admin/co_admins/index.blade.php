<x-admin_layout>


<div class="container-fluid px-3">
  <h5>Manage Employee Accounts</h5>
  <div>
    <div class="d-flex gap-1 align-items-center justify-content-end mb-4">
      <a href="/admin/co_admins/new" class="btn btn-info text-white">
        <i class='bx bx-plus' ></i> <span>Add co-admin</span>
      </a>
      <button class="btn btn-success text-white">
        <i class='bx bx-file' ></i> <span>Upload CSV</span>
      </button>
      <a href="/admin/co_admins/archived" class="btn btn-danger text-white">
        <i class='bx bx-box' ></i> <span>Archived Co-Admins</span>
      </a>
    </div>
    <table id="regular_datatable" class="table table-light" style="width:100%;">
      <thead>
          <tr>
              <th>Co-Admin ID</th>
              <th>Email</th>
              <th>Full Name</th>
              <th></th>
          </tr>
      </thead>
      <tbody>
        <tr>
          <td>REG123123</td>
          <td>regsample_one@evsu.edu.ph</td>
          <td>Reg S. Ample I.</td>
          <td>
            <div class="dropdown">
              <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" id="dropdownMenuButton" data-coreui-toggle="dropdown" aria-expanded="false">
                Actions
              </button>
              <ul class="dropdown-menu dropdown-menu-sm" aria-labelledby="dropdownMenuButton">
                <li class="d-flex flex-row justify-content-between">
                  <a class="dropdown-item text-info" href="#">
                    <i class='bx bx-show' ></i>
                    View
                  </a>
                </li>
                <li class="d-flex flex-row justify-content-between">
                  <a class="dropdown-item text-info" href="#">
                    <i class='bx bx-edit-alt' ></i>
                    Edit
                  </a>
                </li>
                <li class="d-flex flex-row justify-content-between">
                  <a class="dropdown-item text-info" href="#">
                    <i class='bx bx-archive-in' ></i>
                    Archive
                  </a>
                </li>
              </ul>
            </div>
          </td>
        </tr>
        <tr>
          <td>REG456456</td>
          <td>regsample_two@evsu.edu.ph</td>
          <td>Reg S. Ample II</td>
          <td>
            <div class="dropdown">
              <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" id="dropdownMenuButton" data-coreui-toggle="dropdown" aria-expanded="false">
                Actions
              </button>
              <ul class="dropdown-menu dropdown-menu-sm" aria-labelledby="dropdownMenuButton">
                <li class="d-flex flex-row justify-content-between">
                  <a class="dropdown-item text-info" href="#">
                    <i class='bx bx-show' ></i>
                    View
                  </a>
                </li>
                <li class="d-flex flex-row justify-content-between">
                  <a class="dropdown-item text-info" href="#">
                    <i class='bx bx-edit-alt' ></i>
                    Edit
                  </a>
                </li>
                <li class="d-flex flex-row justify-content-between">
                  <a class="dropdown-item text-info" href="#">
                    <i class='bx bx-archive-in' ></i>
                    Archive
                  </a>
                </li>
              </ul>
            </div>
          </td>
        </tr>
        <tr>
          <td>REG789789</td>
          <td>regsample_three@evsu.edu.ph</td>
          <td>Reg S. Ample III</td>
          <td>
            <div class="dropdown">
              <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" id="dropdownMenuButton" data-coreui-toggle="dropdown" aria-expanded="false">
                Actions
              </button>
              <ul class="dropdown-menu dropdown-menu-sm" aria-labelledby="dropdownMenuButton">
                <li class="d-flex flex-row justify-content-between">
                  <a class="dropdown-item text-info" href="#">
                    <i class='bx bx-show' ></i>
                    View
                  </a>
                </li>
                <li class="d-flex flex-row justify-content-between">
                  <a class="dropdown-item text-info" href="#">
                    <i class='bx bx-edit-alt' ></i>
                    Edit
                  </a>
                </li>
                <li class="d-flex flex-row justify-content-between">
                  <a class="dropdown-item text-info" href="#">
                    <i class='bx bx-archive-in' ></i>
                    Archive
                  </a>
                </li>
              </ul>
            </div>
          </td>
        </tr>
        <tr>
          <td>REG012012</td>
          <td>regsample_four@evsu.edu.ph</td>
          <td>Reg S. Ample IV</td>
          <td>
            <div class="dropdown">
              <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" id="dropdownMenuButton" data-coreui-toggle="dropdown" aria-expanded="false">
                Actions
              </button>
              <ul class="dropdown-menu dropdown-menu-sm" aria-labelledby="dropdownMenuButton">
                <li class="d-flex flex-row justify-content-between">
                  <a class="dropdown-item text-info" href="#">
                    <i class='bx bx-show' ></i>
                    View
                  </a>
                </li>
                <li class="d-flex flex-row justify-content-between">
                  <a class="dropdown-item text-info" href="#">
                    <i class='bx bx-edit-alt' ></i>
                    Edit
                  </a>
                </li>
                <li class="d-flex flex-row justify-content-between">
                  <a class="dropdown-item text-info" href="#">
                    <i class='bx bx-archive-in' ></i>
                    Archive
                  </a>
                </li>
              </ul>
            </div>
          </td>
        </tr>
        <tr>
          <td>REG345345</td>
          <td>regsample_five@evsu.edu.ph</td>
          <td>Reg S. Ample V</td>
          <td>
            <div class="dropdown">
              <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" id="dropdownMenuButton" data-coreui-toggle="dropdown" aria-expanded="false">
                Actions
              </button>
              <ul class="dropdown-menu dropdown-menu-sm" aria-labelledby="dropdownMenuButton">
                <li class="d-flex flex-row justify-content-between">
                  <a class="dropdown-item text-info" href="#">
                    <i class='bx bx-show' ></i>
                    View
                  </a>
                </li>
                <li class="d-flex flex-row justify-content-between">
                  <a class="dropdown-item text-info" href="#">
                    <i class='bx bx-edit-alt' ></i>
                    Edit
                  </a>
                </li>
                <li class="d-flex flex-row justify-content-between">
                  <a class="dropdown-item text-info" href="#">
                    <i class='bx bx-archive-in' ></i>
                    Archive
                  </a>
                </li>
              </ul>
            </div>
          </td>
        </tr>
        <tr>
          <td>REG678768</td>
          <td>regsample_six@evsu.edu.ph</td>
          <td>Reg S. Ample VI</td>
          <td>
            <div class="dropdown">
              <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" id="dropdownMenuButton" data-coreui-toggle="dropdown" aria-expanded="false">
                Actions
              </button>
              <ul class="dropdown-menu dropdown-menu-sm" aria-labelledby="dropdownMenuButton">
                <li class="d-flex flex-row justify-content-between">
                  <a class="dropdown-item text-info" href="#">
                    <i class='bx bx-show' ></i>
                    View
                  </a>
                </li>
                <li class="d-flex flex-row justify-content-between">
                  <a class="dropdown-item text-info" href="#">
                    <i class='bx bx-edit-alt' ></i>
                    Edit
                  </a>
                </li>
                <li class="d-flex flex-row justify-content-between">
                  <a class="dropdown-item text-info" href="#">
                    <i class='bx bx-archive-in' ></i>
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

</x-admin_layout>