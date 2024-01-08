<x-authenticated_layout>
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <h4 class="text-black ms-2 px-3"><strong>Edit Student Records</strong></h4>
      </div>
    </div>
    <div class="py-5 px-3" data-controller="transferee-curriculum" id="parentContainer">
      <div class="card" data-transferee-curriculum-target="container" id="container">
        <div class="card-body d-flex flex-column gap-4">
          <form action="">
            <div class="row">
              <div class="col-12 col-md-6">
                <label for="previousschool">Previous School</label>
                <input type="text" name="previousschool" class="form-control mt-2" id="previousschool">
              </div>
              <div class="col-12 col-md-6">
                <label for="couse">Course</label>
                <input type="text" name="couse" class="form-control mt-2" id="course">
              </div>
            </div>
            <div class="row">
              <div class="col-12 col-md-6">
                <label for="schoolyear">School Year</label>
                <input type="text"class="form-control mt-2" name="schoolyear" id="schoolyear">
              </div>
              <div class="col-12 col-md-6">
                <label for="semester">Semester</label>
                <select class="form-select mt-2" id="semester">
                  <option selected>First Semester</option>
                  <option value="1">Second Semester</option>
                </select>
              </div>
            </div>
            <div class="row">
              <div class="col-12">
                <label for="semester">Remarks</label>
                <textarea class="form-control mt-2" name="remarks" id="remarks"></textarea>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
    <div class="col-12">
      <div class="d-flex flex-row align-items-center">
        <h4 class="fs-6 ms-3 text-black">Course: <span class="">BSIT</span></h4>
        <h4 class="fs-6 ms-3 text-black">Year Level: <span class="">1st Year</span></h4>
        <h4 class="fs-6 ms-3 text-black">Semester: <span class="">FIRST SEMESTER</span></h4>
      </div>
        <div class="table-responsive px-3">
          <form id="editableForm">
            <table class="table table-hover table-bordered shadow" style="width: 80vw;">
              <thead>
                <tr>
                  <th scope="col" class='fw-semibold text-center' style="width: 10%;">Subject Code</th>
                  <th colspan="2" scope="col" class='fw-semibold text-center' style="width: 60%;">Subject Description</th>
                  <th scope="col" class='fw-semibold text-center' style="width: 5%;">Credits</th>
                  <th scope="col" class='fw-semibold text-center' style="width: 5%;">Grades</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row" class="text-center pt-3" style="width: 10%;">FIL 001</th>
                  <td colspan="2" class="ps-5 pt-3" style="width: 60%;">Akademiko sa Wikang Filipino</td>
                  <td class="text-center pt-3" style="width: 5%;">3</td>
                  <td class="text-center" style="width: 5%;"><input type="text" class="form-control" value="1.9"></td>
                </tr>
                <tr>
                  <th scope="row" class="text-center pt-3" style="width: 10%;">FIL 001</th>
                  <td colspan="2" class="ps-5 pt-3" style="width: 60%;">Akademiko sa Wikang Filipino</td>
                  <td class="text-center pt-3" style="width: 5%;">3</td>
                  <td class="text-center" style="width: 5%;"><input type="text" class="form-control" value="1.9"></td>
                </tr>
                <tr>
                  <th scope="row" class="text-center pt-3" style="width: 10%;">FIL 001</th>
                  <td colspan="2" class="ps-5 pt-3" style="width: 60%;">Akademiko sa Wikang Filipino</td>
                  <td class="text-center pt-3" style="width: 5%;">3</td>
                  <td class="text-center" style="width: 5%;"><input type="text" class="form-control" value="1.9"></td>
                </tr>
                <tr>
                  <th scope="row" class="text-center pt-3" style="width: 10%;">FIL 001</th>
                  <td colspan="2" class="ps-5 pt-3" style="width: 60%;">Akademiko sa Wikang Filipino</td>
                  <td class="text-center pt-3" style="width: 5%;">3</td>
                  <td class="text-center" style="width: 5%;"><input type="text" class="form-control" value="1.9"></td>
                </tr>
              </tbody>
            </table>
          </form>
        </div>
      </div>

      <div class="col-12">
        <div class="d-flex flex-row align-items-center">
          <h4 class="fs-6 ms-3 text-black">Course: <span class="">BSIT</span></h4>
          <h4 class="fs-6 ms-3 text-black">Year Level: <span class="">1nd Year</span></h4>
          <h4 class="fs-6 ms-3 text-black">Semester: <span class="">SECOND SEMESTER</span></h4>
        </div>
        <div class="table-responsive px-3">
          <form id="editableForm">
            <table class="table table-hover table-bordered shadow" style="width: 80vw;">
              <thead>
                <tr>
                  <th scope="col" class='fw-semibold text-center' style="width: 10%;">Subject Code</th>
                  <th colspan="2" scope="col" class='fw-semibold text-center' style="width: 60%;">Subject Description</th>
                  <th scope="col" class='fw-semibold text-center' style="width: 5%;">Credits</th>
                  <th scope="col" class='fw-semibold text-center' style="width: 5%;">Grades</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row" class="text-center pt-3" style="width: 10%;">FIL 001</th>
                  <td colspan="2" class="ps-5 pt-3" style="width: 60%;">Akademiko sa Wikang Filipino</td>
                  <td class="text-center pt-3" style="width: 5%;">3</td>
                  <td class="text-center" style="width: 5%;"><input type="text" class="form-control" value="1.9"></td>
                </tr>
                <tr>
                  <th scope="row" class="text-center pt-3" style="width: 10%;">FIL 001</th>
                  <td colspan="2" class="ps-5 pt-3" style="width: 60%;">Akademiko sa Wikang Filipino</td>
                  <td class="text-center pt-3" style="width: 5%;">3</td>
                  <td class="text-center" style="width: 5%;"><input type="text" class="form-control" value="1.9"></td>
                </tr>
                <tr>
                  <th scope="row" class="text-center pt-3" style="width: 10%;">FIL 001</th>
                  <td colspan="2" class="ps-5 pt-3" style="width: 60%;">Akademiko sa Wikang Filipino</td>
                  <td class="text-center pt-3" style="width: 5%;">3</td>
                  <td class="text-center" style="width: 5%;"><input type="text" class="form-control" value="1.9"></td>
                </tr>
                <tr>
                  <th scope="row" class="text-center pt-3" style="width: 10%;">FIL 001</th>
                  <td colspan="2" class="ps-5 pt-3" style="width: 60%;">Akademiko sa Wikang Filipino</td>
                  <td class="text-center pt-3" style="width: 5%;">3</td>
                  <td class="text-center" style="width: 5%;"><input type="text" class="form-control" value="1.9"></td>
                </tr>
              </tbody>
            </table>
          </form>
        </div>
      </div>

      <div class="col-12">
      <div class="d-flex flex-row align-items-center">
        <h4 class="fs-6 ms-3 text-black">Course: <span class="">BSIT</span></h4>
        <h4 class="fs-6 ms-3 text-black">Year Level: <span class="">2nd Year</span></h4>
        <h4 class="fs-6 ms-3 text-black">Semester: <span class="">FIRST SEMESTER</span></h4>
      </div>
      <div class="table-responsive px-3">
        <form id="editableForm">
          <table class="table table-hover table-bordered shadow" style="width: 80vw;">
            <thead>
              <tr>
                <th scope="col" class='fw-semibold text-center' style="width: 10%;">Subject Code</th>
                <th colspan="2" scope="col" class='fw-semibold text-center' style="width: 60%;">Subject Description</th>
                <th scope="col" class='fw-semibold text-center' style="width: 5%;">Credits</th>
                <th scope="col" class='fw-semibold text-center' style="width: 5%;">Grades</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row" class="text-center pt-3" style="width: 10%;">FIL 001</th>
                <td colspan="2" class="ps-5 pt-3" style="width: 60%;">Akademiko sa Wikang Filipino</td>
                <td class="text-center pt-3" style="width: 5%;">3</td>
                <td class="text-center" style="width: 5%;"><input type="text" class="form-control" value="1.9"></td>
              </tr>
              <tr>
                <th scope="row" class="text-center pt-3" style="width: 10%;">FIL 001</th>
                <td colspan="2" class="ps-5 pt-3" style="width: 60%;">Akademiko sa Wikang Filipino</td>
                <td class="text-center pt-3" style="width: 5%;">3</td>
                <td class="text-center" style="width: 5%;"><input type="text" class="form-control" value="1.9"></td>
              </tr>
              <tr>
                <th scope="row" class="text-center pt-3" style="width: 10%;">FIL 001</th>
                <td colspan="2" class="ps-5 pt-3" style="width: 60%;">Akademiko sa Wikang Filipino</td>
                <td class="text-center pt-3" style="width: 5%;">3</td>
                <td class="text-center" style="width: 5%;"><input type="text" class="form-control" value="1.9"></td>
              </tr>
              <tr>
                <th scope="row" class="text-center pt-3" style="width: 10%;">FIL 001</th>
                <td colspan="2" class="ps-5 pt-3" style="width: 60%;">Akademiko sa Wikang Filipino</td>
                <td class="text-center pt-3" style="width: 5%;">3</td>
                <td class="text-center" style="width: 5%;"><input type="text" class="form-control" value="1.9"></td>
              </tr>
            </tbody>
          </table>
        </form>
      </div>
    </div>



    <!-- Success Modal -->
    <div class="modal fade" id="successModal" tabindex="-1" aria-labelledby="successModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-body">
            <p>
              "Double-check the edited details for accuracy before saving. Thanks!"
            </p>
            <div class="text-end">
              <button type="button" class="btn btn-secondary btn-sm px-3 text-white" data-coreui-dismiss="modal">Back</button>
              <a href="../../enrollment" class='btn btn-info text-white btn-sm px-3 text-decoration-none'>Submit</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="d-flex justify-content-between p-5 me-4">
      <a href="../../enrollment/" class='text-decoration-none'>
      <svg width="12" height="20" viewBox="0 0 12 20" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M11.77 1.77L10 0L0 10L10 20L11.77 18.23L3.54 10L11.77 1.77Z" fill="#FF0000"/>
      </svg>
      Go Back
      </a>
      <button type="button" class="btn btn-info text-white" data-coreui-toggle="modal" data-coreui-target="#successModal">Update</button>
    </div>
  </div>
</x-authenticated_layout>
