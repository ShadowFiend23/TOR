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
  <h5>Archived Student Accounts</h5>
  <br>
  <div>
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
            <a href="#" class="text-info" data-coreui-toggle="modal" data-coreui-target="#exampleModal">Unarchive</a>
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
            <a href="#" class="text-info" data-coreui-toggle="modal" data-coreui-target="#exampleModal">Unarchive</a>
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
            <a href="#" class="text-info" data-coreui-toggle="modal" data-coreui-target="#exampleModal">Unarchive</a>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</div>

</x-admin_layout>