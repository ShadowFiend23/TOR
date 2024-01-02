<x-admin_layout>


<div class="container-fluid px-3">
  <h5>Manage Students</h5>
  <span>BACHELOR OF SCIENCE IN INFORMATION TECHNOLOGY</span>
  <div>
    <div class="d-flex gap-1 align-items-center justify-content-end mb-4">
      <a href="/admin/course_id/students/new" class="btn btn-success text-white">
        <i class='bx bx-plus' ></i> <span>Add Student</span>
      </a>
      <a href="/admin/course_id/students/archived" class="btn btn-dark text-white">
        <i class='bx bx-box' ></i> <span>Archived Students</span>
      </a>
    </div>
    <table id="regular_datatable" class="table table-light" style="width:100%;">
      <thead>
          <tr>
              <th>Avatar</th>
              <th>Email</th>
              <th>Student ID</th>
              <th>Full Name</th>
              <th>Curriculum</th>
              <th></th>
          </tr>
      </thead>
      <tbody>
        <tr>
          <td>
            <div class="avatar avatar-sm">
              <img class="avatar-img" src="{{ asset('images/avatar.png') }}">
            </div>
          </td>
          <td>regsample_one@evsu.edu.ph</td>
          <td>2021-12345</td>
          <td>Reg S. Ample I.</td>
          <td>Old</td>
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
          <td>
            <div class="avatar avatar-sm">
              <img class="avatar-img" src="{{ asset('images/avatar.png') }}">
            </div>
          </td>
          <td>regsample_two@evsu.edu.ph</td>
          <td>2021-20201</td>
          <td>Reg S. Ample II</td>
          <td>New</td>
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
          <td>
            <div class="avatar avatar-sm">
              <img class="avatar-img" src="{{ asset('images/avatar.png') }}">
            </div>
          </td>
          <td>regsample_three@evsu.edu.ph</td>
          <td>2021-67890</td>
          <td>Reg S. Ample III</td>
          <td>New</td>
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