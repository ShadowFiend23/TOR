<x-student_layout>
  <div class="contaier-fluid border mx-1 bg-white vh-100 p-3 pb-5">
    <div>
      <div>NOTE:</div>
      <div>
        Please make the payment at the cashier as <br>
        prompted in the pop-up after submission. Kindly <br>
        present your payment receipt at the Registrar's <br>
        office to receive your TOR. <br>
      </div>
    </div>
    <div class="w-100 d-flex justify-content-center flex-column align-items-center">
      <h1>Reason for your Request</h1>
      <select class="form-select w-50" aria-label="Default select example">
        <option selected>EMPLOYMENT</option>
        <option value="1">BOARD EXAM</option>
        <option value="2">Graduation</option>
        <option value="3">FURTHER STUDIES</option>
        <option value="3">TRANSFER</option>
        <option value="3">PD 907</option>
        <option value="3">NC II</option>
        <option value="3">Migrant</option>
        <option value="3">OTHERS</option>
      </select>
      <div class="d-flex justify-content-end my-5 w-50">
        <button class="btn btn-info btn-lg" data-coreui-toggle="modal" data-coreui-target="#staticBackdrop">SUBMIT</button>
      </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop" data-coreui-backdrop="static" data-coreui-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-header border-0">
            NOTE: <br>Input your Capstoone Title or Thesis Title
          </div>
          <div class="modal-body text-center">
            <h1>Capstone Title</h1>
            <input class="form-control form-control-lg" />
          </div>
          <div class="modal-footer border-0">
            <button type="button" class="btn btn-info text-light" data-coreui-toggle="modal" data-coreui-target="#staticBackdrop2">Update</button>
            <button type="button" class="btn btn-dark" data-coreui-dismiss="modal">Cancel</button>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="staticBackdrop2" data-coreui-backdrop="static" data-coreui-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-body text-center">
            <h3>
              Your Transcript of Records<br>
              (TOR) consists of three pages.<br>
              A payment of <span class="text-danger">₱200</span> is required<br>
              at the cashier's office.
            </h3>
          </div>
          <div class="modal-footer border-0">
            <button type="button" class="btn btn-info" data-coreui-dismiss="modal">Ok</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

</x-student_layout>