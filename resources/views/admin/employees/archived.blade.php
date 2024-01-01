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
        <tr>
          <td>REG123123</td>
          <td>regsample_one@evsu.edu.ph</td>
          <td>In-charge/BSM</td>
          <td>Reg S. Ample I.</td>
          <td>
            <a href="#" class="text-info" data-coreui-toggle="modal" data-coreui-target="#exampleModal">Unarchive</a>
          </td>
        </tr>
        <tr>
          <td>REG456456</td>
          <td>regsample_two@evsu.edu.ph</td>
          <td>In-charge/BSIT</td>
          <td>Reg S. Ample II</td>
          <td>
            <a href="#" class="text-info" data-coreui-toggle="modal" data-coreui-target="#exampleModal">Unarchive</a>
          </td>
        </tr>
        <tr>
          <td>REG789789</td>
          <td>regsample_three@evsu.edu.ph</td>
          <td>Registrar</td>
          <td>Reg S. Ample III</td>
          <td>
            <a href="#" class="text-info" data-coreui-toggle="modal" data-coreui-target="#exampleModal">Unarchive</a>
          </td>
        </tr>
        <tr>
          <td>REG012012</td>
          <td>regsample_four@evsu.edu.ph</td>
          <td>SASO</td>
          <td>Reg S. Ample IV</td>
          <td>
            <a href="#" class="text-info" data-coreui-toggle="modal" data-coreui-target="#exampleModal">Unarchive</a>
          </td>
        </tr>
        <tr>
          <td>REG345345</td>
          <td>regsample_five@evsu.edu.ph</td>
          <td>Registrar</td>
          <td>Reg S. Ample V</td>
          <td>
            <a href="#" class="text-info" data-coreui-toggle="modal" data-coreui-target="#exampleModal">Unarchive</a>
          </td>
        </tr>
        <tr>
          <td>REG678768</td>
          <td>regsample_six@evsu.edu.ph</td>
          <td>Department Head/BSM</td>
          <td>Reg S. Ample VI</td>
          <td>
            <a href="#" class="text-info" data-coreui-toggle="modal" data-coreui-target="#exampleModal">Unarchive</a>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
</div>

</x-admin_layout>