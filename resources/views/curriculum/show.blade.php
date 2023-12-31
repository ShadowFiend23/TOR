<x-authenticated_layout>
  <div class="container-lg px-3">
    <div class="d-flex flex-column pt-4 ps-4 bg-dark">
      <h2 class="fs-4 text-center text-white">Generation Z</h2>
      <div class="d-flex flex-column">
        <h4 class="fs-6  text-white">Course: <span class="text-decoration-underline">BSIT</span></h4>
        <h4 class="fs-6 text-white ">Year Level: <span class="text-decoration-underline">3rd Year</span></h4>
        <h4 class="fs-6 text-white ">Semester: <span class="text-decoration-underline">1</span>  </h4>
      </div>
    </div>
    <form action="" method="get" class="p-4 shadow">
      <div class="row">
        <div class="col-3">
          <div class="text-black fw-bold">
            Subject Code
          </div>
          <div class="my-3">
            <input type="text" class="form-control" id="curriculum-name" value="IT 123">
          </div>
          <div class="my-3">
            <input type="text" class="form-control" id="curriculum-name" value="IT 456">
          </div>
          <div class="my-3">
            <input type="text" class="form-control" id="curriculum-name" value="IT 789">
          </div>
        </div>
        <div class="col-6 col-md-5">
          <div class="text-black fw-bold">
            Descriptive Title
          </div>
          <div class="my-3">
            <input type="text" class="form-control" id="curriculum-name" value="Sample only pre requisite look">
          </div>
          <div class="my-3">
            <input type="text" class="form-control" id="curriculum-name" value="Sample only not pre requisite look">
          </div>
          <div class="my-3">
            <input type="text" class="form-control" id="curriculum-name" value="Sample only pre requisite look">
          </div>
        </div>
        <div class="col-2">
          <div class="text-black fw-bold">
            Credits
          </div>
          <div class="my-3">
            <input type="text" class="form-control" id="curriculum-name" value="3">
          </div>
          <div class="my-3">
            <input type="text" class="form-control" id="curriculum-name" value="3">
          </div>
          <div class="my-3">
            <input type="text" class="form-control" id="curriculum-name" value="3">
          </div>
        </div>
        <div class="col-1 col-md-2">
          <div class="text-black fw-bold text-nowrap">
            Pre-req
          </div>
          <div class="d-flex flex-column">
            <div class="form-check my-3">
              <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" style="width: 2rem; height: 2rem;">
            </div>
            <div class="form-check my-1">
              <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" style="width: 2rem; height: 2rem;">
            </div>
            <div class="form-check my-3">
              <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" style="width: 2rem; height: 2rem;">
            </div>
          </div>
        </div>
        <div class="d-flex justify-content-end">
          <div class="modal modal-lg fade" id="presubjectModal" aria-hidden="true" aria-labelledby="presubjectModalLabel" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content">
                <div class="modal-header bg-dark ps-5">
                  <h1 class="modal-title fs-5 text-white" id="exampleModalLabel">Pre-REQUISITE SUBJECTS</h1>
                  <button type="button" class="btn-close" data-coreui-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body px-5">
                  <p>Note: <span class="text-info">There are two selected prerequisite subjects for this semester. Please choose the prerequisites for this particular subject for the current semester.</span></p>
                    <label for="curriculum-name" class="col-form-label text-black">IT 213  Sample Only Pre Requisite look </label>
                    <div class="input-group mb-3">
                      <select class="form-select" id="inputGroupSelect01">
                        <option selected></option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                      </select>
                    </div>
                    <label for="curriculum-name" class="col-form-label text-black">IT 456 Sample Only Pre Requisite look </label>
                    <div class="input-group mb-3">
                      <select class="form-select" id="inputGroupSelect01">
                        <option selected></option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                      </select>
                    </div>
                </div>
                <div class="modal-footer px-5">
                  <button type="button" class="btn btn-secondary" data-coreui-dismiss="modal">Cancel</button>
                  <button type="button" class="btn btn-info text-white" data-coreui-target="#presubjectDialog" data-coreui-toggle="modal" >Save changes</button>
                </div>
              </div>
            </div>
          </div>

          <div class="modal modal-lg fade" id="presubjectDialog" aria-hidden="true" aria-labelledby="presubjectDialogLabel" tabindex="-2">
            <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content">
                <div class="modal-header bg-dark ps-5">
                  <h1 class="modal-title fs-5 text-white" id="presubjectDialogLabel">Confirmation</h1>
                  <button type="button" class="btn-close" data-coreui-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body px-5">
                  <p>Loading curriculum for <span class="text-danger">3rd Year, 1st Semester, BSIT course. Generation Z, success!</span> Are you ready to proceed with loading for the other semester?</p>
                    <label for="curriculum-name" class="col-form-label text-black">Year Level</label>
                    <div class="input-group mb-3">
                      <select class="form-select" id="inputGroupSelect01">
                        <option selected>Select year level</option>
                        <option value="1">1st</option>
                        <option value="2">2nd</option>
                        <option value="3">3rd</option>
                        <option value="3">4th</option>
                      </select>
                    </div>
                    <label for="curriculum-name" class="col-form-label text-black">Semester</label>
                    <div class="input-group mb-3">
                      <select class="form-select" id="inputGroupSelect01">
                        <option selected>Semester</option>
                        <option value="1">1</option>
                        <option value="2">2</option>
                      </select>
                    </div>
                </div>
                <div class="modal-footer px-5">
                  <button class="btn btn-secondary" data-coreui-toggle="modal">Cancel</button>
                  <button type="button" class="btn btn-info text-white" data-coreui-dismiss="modal">Confirm</button>
                </div>
              </div>
            </div>
          </div>

          <div class="modal modal-lg fade" id="alertEmtySelect" aria-hidden="true" aria-labelledby="alertEmtySelectLabel" tabindex="-2">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header bg-dark ps-5">
                  <h1 class="modal-title fs-5 text-white" id="alertEmtySelectLabel">Alert!</h1>
                  <button type="button" class="btn-close" data-coreui-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body px-5">
                  <p>Loading curriculum for <span class="text-danger">3rd Year, 1st Semester, BSIT course. Generation Z, success!</span> Please note that this semester's curriculum doesn't have selected prerequisite subjects.</p>
                </div>
                <div class="modal-footer px-5">
                  <button class="btn btn-secondary" data-coreui-toggle="modal">Close</button>
                </div>
              </div>
            </div>
          </div>
          

          <button type="button" class="btn btn-primary btn btn-info text-white" data-coreui-target="#presubjectModal"data-coreui-toggle="modal">
            Submit
          </button>


          <button type="button" class="ms-2 btn btn-primary btn btn-info text-white" data-coreui-target="#alertEmtySelect"data-coreui-toggle="modal">
            Sample Alert
          </button>
        </div>
      </div>
    </form>
  </div>
</x-authenticated_layout>
