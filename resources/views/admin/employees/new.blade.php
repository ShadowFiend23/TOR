<x-admin_layout>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body">
        <h5>Reminder</h5>
        <p>
          "Employee created succesfully"
        </p>
        <div class="text-end">
          <button type="button" class="btn btn-info btn-sm px-3" data-coreui-dismiss="modal">Ok</button>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="container-lg px-3">
  <h3>Add employee</h3>
  <div>
    <form action="javascript:void(0)">
      <div class="row gx-0">
        <div class="col-12 col-md-4 p-1">
          <label for="employee_id">Employee ID<span class="text-danger">*</span></label>
          <input type="text" name="employee_id" class="form-control form-control-sm"/>
        </div>
        <div class="col-12 col-md-4 p-1">
          <label for="role">Role<span class="text-danger">*</span></label>
          <select name="role" class="form-select form-select-sm py-1">
            <option value="registrar">Registrar</option>
            <option value="saso">SASO</option>
            <option value="in_charge">In-Charge</option>
            <option value="department_head">Department Head</option>
          </select>
        </div>
        <div class="col-12 col-md-4 p-1">
          <label for="designation">Designation</label>
          <select name="---" class="form-select form-select-sm py-1">
            <option value="---">---</option>
          </select>
        </div>
      </div>
      <div class="row gx-0">
        <div class="col-12 col-md-6 p-1">
          <label>Last Name</label>
          <input type="text" class="form-control form-control-sm"/>
        </div>
        <div class="col-12 col-md-6 p-1">
          <label>First Name</label>
          <input type="text" class="form-control form-control-sm"/>
        </div>
        <div class="col-12 col-md-6 p-1">
          <label>Middle Name</label>
          <input type="text" class="form-control form-control-sm"/>
        </div>
        <div class="col-12 col-md-6 p-1">
          <label>Suffix</label>
          <input type="text" class="form-control form-control-sm"/>
        </div>
        <div class="col-12 col-md-6 p-1">
          <label>Email</label>
          <input type="email" class="form-control form-control-sm"/>
        </div>
        <div class="col-12 col-md-6 p-1">
          <label>Password</label>
          <input type="password" class="form-control form-control-sm"/>
        </div>
      </div>
      <div class="d-flex justify-content-end gap-1 m-2">
        <button class="btn btn-info btn-sm" data-coreui-toggle="modal" data-coreui-target="#exampleModal">Add Employee</button>
        <button class="btn btn-secondary btn-sm">Cancel</button>
      </div>
    </form>
  </div>
</div>

</x-admin_layout>