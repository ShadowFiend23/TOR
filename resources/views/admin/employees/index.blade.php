<x-admin_layout>


<div class="container-fluid px-3">
  <h5>Manage Employee Accounts</h5>
  <div>
    <div class="d-flex gap-1 align-items-center justify-content-end mb-4">
      <a href="/admin/employees/new" class="btn btn-info text-white">
        <i class='bx bx-plus' ></i> <span>Add employee</span>
      </a>
      <button class="btn btn-success text-white">
        <i class='bx bx-file' ></i> <span>Upload CSV</span>
      </button>
      <a href="/admin/employees/archived" class="btn btn-danger text-white">
        <i class='bx bx-box' ></i> <span>Archived Employee</span>
      </a>
    </div>
    <table id="regular_datatable" class="table table-light" style="width:100%;">
      <thead>
          <tr>
              <th>Employee ID</th>
              <th>Email</th>
              <th>Role</th>
              <th>Full Name</th>
              <th></th>
          </tr>
      </thead>
      <tbody>
        @forelse ($employees as $employee)
            <tr>
                <td>{{ $employee->employeeID }}</td>
                <td>{{ $employee->email }}</td>
                <td>{{ $employee->name }}</td>
                <td>{{ "$employee->lastName, $employee->firstName" }}</td>
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
                        <a class="dropdown-item text-info" href="{{ route('editEmployee'). "/?id=$employee->id" }}">
                            <i class='bx bx-edit-alt' ></i>
                            Edit
                        </a>
                        </li>
                        <li class="d-flex flex-row justify-content-between">
                        <a class="dropdown-item text-info" href="{{ route('deleteEmployee'). "/?id=$employee->id" }}">
                            <i class='bx bx-archive-in' ></i>
                            Archive
                        </a>
                        </li>
                    </ul>
                    </div>
                </td>
                </tr>
        @empty

        @endforelse
      </tbody>
    </table>
  </div>
</div>

</x-admin_layout>
