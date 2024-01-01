<x-admin_layout>


<!-- Modal confirmation-->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-body">
        <h5>New School Year</h5>
        
        <form action="javascript:void(0)">
          <div class="row gx-0">
            <div class="col-12 p-1">
              <label>Enter School Year<span class="text-danger">*</span></label>
              <input type="text" class="form-control form-control-sm" placeholder="Format: 2023-2024"/>
            </div>
            <div class="col-12 p-1">
              <label>Designation</label>
              <select name="SEMESTER" class="form-select form-select-sm py-1">
                <option value="1">FIRST SEMESTER</option>
                <option value="2">SECOND SEMESTER</option>
              </select>
            </div>
          </div>
          <div class="d-flex justify-content-end gap-1 m-2">
            <button class="btn btn-info btn-sm" data-coreui-toggle="modal" data-coreui-target="#successModal">Submit</button>
            <button class="btn btn-secondary btn-sm" data-coreui-dismiss="modal">Cancel</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- Modal success -->
<div class="modal fade" id="successModal" tabindex="-1" aria-labelledby="successModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body">
        <h5>Reminder</h5>
        <p>
          School year added succesfully!!
        </p>
        <div class="text-end">
          <button type="button" class="btn btn-info btn-sm px-3" data-coreui-dismiss="modal">Ok</button>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="container-fluid px-3">
  <h5>Academic Year</h5>
  <div>
    <div class="d-flex gap-1 align-items-center justify-content-end mb-4">
      <button class="btn btn-success btn-sm text-white" data-coreui-toggle="modal" data-coreui-target="#exampleModal">
        <i class='bx bx-plus' ></i> <span>New School Year</span>
      </button>
    </div>
    <table id="regular_datatable" class="table table-light" style="width:100%;">
      <thead>
        <tr>
          <th class="d-none"></th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>2018-2019 FIRST SEMESTER</td>
        </tr>
        <tr>
          <td>2018-2019 SECOND-SEMESTER</td>
        </tr>
        <tr>
          <td>2019-2020 FIRST SEMESTER</td>
        </tr>
        <tr>
          <td>2019-2020 SECOND SEMESTER</td>
        </tr>
        <tr>
          <td>2020-2021 FIRST SEMESTER</td>
        </tr>
        <tr>
          <td>2020-2021 SECOND SEMESTER</td>
        </tr>
      </tbody>
    </table>
  </div>
</div>

</x-admin_layout>