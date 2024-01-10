<x-admin_layout>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body">
        <h5>Reminder</h5>
        <p>
          "Student account created succesfully"
        </p>
        <div class="text-end">
          <button type="button" class="btn btn-info btn-sm px-3" data-coreui-dismiss="modal">Ok</button>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="container-lg px-3">
  <h3>Add new student</h3>
  <div>
    <form id="studentForm">
        <input type="hidden" name="course" value={{ Request::get('id') }} />
      <div class="row gx-0">
        <div class="col-12 col-md-4 p-1">
          <label>Student ID<span class="text-danger">*</span></label>
          <input type="text" name="studentID" class="form-control form-control-sm"/>
        </div>
      </div>
      <div class="row gx-0">
        <div class="col-12 col-md-6 p-1">
          <label>Last Name</label>
          <input type="text" name="lastName" class="form-control form-control-sm"/>
        </div>
        <div class="col-12 col-md-6 p-1">
          <label>First Name</label>
          <input type="text" name="firstName" class="form-control form-control-sm"/>
        </div>
        <div class="col-12 col-md-6 p-1">
          <label>Middle Name</label>
          <input type="text" name="middleName" class="form-control form-control-sm"/>
        </div>
        <div class="col-12 col-md-6 p-1">
          <label>Suffix</label>
          <input type="text" name="suffix" class="form-control form-control-sm"/>
        </div>
        <div class="col-12 col-md-6 p-1">
          <label>Email</label>
          <input type="email" name="email" class="form-control form-control-sm"/>
        </div>
        <div class="col-12 col-md-6 p-1">
          <label>Password</label>
          <input type="password" name="password" class="form-control form-control-sm"/>
        </div>
      </div>
      <div class="d-flex justify-content-end gap-1 m-2">
        <button class="btn btn-info btn-sm" data-coreui-toggle="modal" data-coreui-target="#exampleModal">Submit</button>
        <button type="button" class="btn btn-secondary btn-sm">Cancel</button>
      </div>
    </form>
  </div>
</div>

</x-admin_layout>
