<x-admin_layout>

<div class="container-lg px-3">
  <div class="card shadow rounded-0 border-0">
    <div class="card-body">
      <h3>Add New Department</h3>
      <div>
        <form id="adminDepartmentForm">
          <div class="row gx-0">
            <div class="col-12 col-md-6 p-1">
              <label>Department Name</label>
              <input type="text" name="departmentName" class="form-control form-control-sm"/>
            </div>
            <div class="col-12 col-md-6 p-1">
              <label>Department Head Email</label>
              <input type="email" name="departmentEmail" class="form-control form-control-sm"/>
            </div>
            <div class="col-12 col-md-6 p-1">
              <label>Head of Department ID</label>
              <select name="departmentHead" class="form-select form-select-sm py-1">
                <option value="department">Department Head</option>
                <option value="department2">Department Head 2</option>
              </select>
            </div>
            <div class="col-12 col-md-6 p-1">
              <label>Select Background Color of this department</label>
              <input type="color" name="departmentColor" class="form-control form-control-sm" id="exampleColorInput" value="#563d7c" title="Choose your color">
            </div>
          </div>
          <div class="d-flex justify-content-end gap-1 m-2">
            <button type="button" class="btn btn-secondary btn-sm">Cancel</button>
            <button class="btn btn-info btn-sm">Submit</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

</x-admin_layout>
