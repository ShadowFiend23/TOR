<x-admin_layout>

<!-- Modal confirmation-->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body">
        <h5>Alert</h5>
        <p>
          Do you really want to restore account_name?
        </p>
        <div class="text-end">
          <button type="button" class="btn btn-info btn-sm px-3" data-coreui-toggle="modal" data-coreui-target="#successModal">Ok</button>
          <button type="button" class="btn btn-secondary btn-sm" data-coreui-dismiss="modal">Cancel</button>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Modal success -->
<div class="modal fade" id="successModal" tabindex="-1" aria-labelledby="successModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body">
        <p>
          Account restored succesfully!
        </p>
        <div class="text-end">
          <button type="button" class="btn btn-info btn-sm px-3" data-coreui-dismiss="modal">Ok</button>
        </div>
      </div>
    </div>
  </div>
</div>


<div class="container-fluid px-3">
  <h5>Archived Employee Accounts</h5>
  <div>
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
                    <a href="#" class="text-info" data-coreui-toggle="modal" data-coreui-target="#exampleModal">Unarchive</a>
                </td>
            </tr>
        @empty

        @endforelse
      </tbody>
    </table>
  </div>
</div>

</x-admin_layout>
