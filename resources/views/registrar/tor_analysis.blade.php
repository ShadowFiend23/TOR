<x-registrar_layout>

<!-- Modal confirmation-->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body">
        <p class="fw-bold text-center">
          EDIT TOR PRICING
        </p>
        <label>Documentary stamp:</label>
        <input type="text" class="form-control form-control-sm" />
        <label>First page:</label>
        <input type="text" class="form-control form-control-sm" />
        <label>Additional Pages:</label>
        <input type="text" class="form-control form-control-sm" />
        <div class="text-end mt-3">
          <button type="button" class="btn btn-info btn-sm px-3" data-coreui-dismiss="modal">Update</button>
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
        <p class="fw-bold text-center">
          Edit Reasons for Request
        </p>
        <input type="text" class="form-control form-control-sm mb-2"/>
        <input type="text" class="form-control form-control-sm mb-2"/>
        <input type="text" class="form-control form-control-sm mb-2"/>
        <div class="text-end">
          <a href="#"><i class='bx bxs-plus-circle text-black' ></i></a>
        </div>
        <div class="text-end mt-3">
          <button type="button" class="btn btn-info btn-sm px-3" data-coreui-dismiss="modal">Update</button>
          <button type="button" class="btn btn-secondary btn-sm" data-coreui-dismiss="modal">Cancel</button>
        </div>
      </div>
    </div>
  </div>
</div>


  <div class="row gx-0">
    <div class="col-12 col-md-6 p-3">
      <div clas="card w-50">
        <div class="card-body bg-info-subtle p-3">
          <p class="fw-bold">CURRENT TOR PRICING</p>

          <p>Documentary Stamp: ₱40.00</p>
          <p>First page: ₱100.00</p>
          <p>Additional Pages: ₱40.00</p>
          <div class="w-100 d-flex justify-content-end">
            <button class="btn btn-link text-info" data-coreui-toggle="modal" data-coreui-target="#exampleModal">
              <i class='bx bx-edit-alt'></i>
            </button>
          </div>
        </div>
      </div>
    </div>
    <div class="col-12 col-md-6 p-3">
      <div clas="card w-50">
        <div class="card-body bg-warning-subtle p-3">
          <p class="fw-bold">PURPOSES FOR REQUESTING TOR</p>

          <p>Employment</p>
          <p>Board Exam</p>
          <p>Further Studies</p>
          <p>Transfer</p>
          <p>PD 907</p>
          <p>NC II</p>
          <p>Others</p>
          <div class="w-100 d-flex justify-content-end">
            <button class="btn btn-link text-info" data-coreui-toggle="modal" data-coreui-target="#successModal">
              <i class='bx bx-edit-alt'></i>
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
</x-registrar_layout>