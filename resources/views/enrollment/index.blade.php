<x-authenticated_layout>
  <div class="container-fluid px-5">
    <div class="card border border-0 px-0 mx-0">
      <div class="card-header p-4  bg-dark">
        <h5 class="card-title text-white mt-2">Bachelor of Science in Information Technology: Students</h5>
      </div>
      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-body">
              <h5>Confirmation</h5>
              <p>
                Do you really want to unarchived account_name?
              </p>
              <div class="text-end">
                <button type="button" class="btn btn-info btn-sm px-3" data-coreui-toggle="modal" data-coreui-target="#successModal">Ok</button>
                <button type="button" class="btn btn-secondary btn-sm" data-coreui-dismiss="modal">Cancel</button>
              </div>
            </div>
          </div>
        </div>
      </div>


           <!-- Success Modal -->
           <div class="modal fade" id="successModal" tabindex="-1" aria-labelledby="successModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-body">
              <p>
                Account Successfully Restored!
              </p>
              <div class="text-end">
                <button type="button" class="btn btn-info btn-sm px-3" data-coreui-dismiss="modal">Ok</button>
              </div>
            </div>
          </div>
        </div>
      </div>


        <!-- Shiftee Modal -->
      <div class="modal modal-lg gfade" id="shifteeModal" tabindex="-1" aria-labelledby="shifteeModalLabel" aria-hidden="true">
        <div class="modal-dialog  modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header bg-dark ps-5">
              <h5 class="modal-title text-white" id="shifteeModalLabel">Enroll Student Name</h5>
              <button type="button" class="btn-close" data-coreui-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body px-5">
              <form>
                <label for="curriculum-name" class="col-form-label">Select type of Student</label>
                <div class="input-group mb-3">
                  <select class="form-select" id="inputGroupSelect01">
                    <option value="1">Shiftee</option>
                    <option value="2">Regular</option>
                    <option value="3">Transferee</option>
                  </select>
                </div>
                <label for="curriculum-name" class="col-form-label">Kindly choose the students credentials submitted during enrollment</label>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                  <label class="form-check-label" for="flexCheckDefault">
                    Form 138
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                  <label class="form-check-label" for="flexCheckDefault">
                    Grade 12 Report Card
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                  <label class="form-check-label" for="flexCheckDefault">
                    Certificate of Good Moral Character
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                  <label class="form-check-label" for="flexCheckDefault">
                    PSA
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                  <label class="form-check-label" for="flexCheckDefault">
                    Live Birth Certificate
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                  <label class="form-check-label" for="flexCheckDefault">
                    Transcript of Records (TOR)
                  </label>
                </div>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                  <label class="form-check-label" for="flexCheckDefault">
                    Other
                  </label>
                </div>
              </form>
            </div>
            <div class="modal-footer">
              <a href="../enrollment/shiftee/transfer_or_records/"  class="btn btn-info text-white"> Enroll Now </a>
            </div>
          </div>
        </div>
      </div>




      <div class="card-body shadow mt-2">
        <table id="student_list_table" class="table table-hover" style="width:100%;">
          <thead>
            <tr>
              <th>ID</th>
              <th>Name</th>
              <th>Curriculum Name</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>




            <!-- Regular Modal -->
            <div class="modal modal-lg gfade" id="regularModal" tabindex="-1" aria-labelledby="regularModalLabel" aria-hidden="true">
              <div class="modal-dialog  modal-dialog-centered">
                <div class="modal-content">
                  <div class="modal-header bg-dark ps-5">
                    <h5 class="modal-title text-white" id="regularModalLabel">Enroll Student Name</h5>
                    <button type="button" class="btn-close" data-coreui-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body px-5">
                    <form>
                      <label for="curriculum-name" class="col-form-label">Select type of Student</label>
                      <div class="input-group mb-3">
                        <select class="form-select" id="inputGroupSelect01">
                          <option value="1">Regular</option>
                          <option value="2">Transferee</option>
                          <option value="3">Shiftee</option>
                        </select>
                      </div>
                      <label for="curriculum-name" class="col-form-label">Kindly choose the students credentials submitted during enrollment</label>
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                          Form 138
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                          Grade 12 Report Card
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                          Certificate of Good Moral Character
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                          PSA
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                          Live Birth Certificate
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                          Transcript of Records (TOR)
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                        <label class="form-check-label" for="flexCheckDefault">
                          Other
                        </label>
                      </div>
                    </form>
                  </div>
                  <div class="modal-footer">
                    <a href="./regular/new"  class="btn btn-info text-white text-decoration-none">Enroll Now</a>
                  </div>
                </div>
              </div>
            </div>

            <tr>
              <td data-coreui-toggle="modal" data-coreui-target="#regularModal"><p class="mt-4">2023-30516</p></td>
              <td data-coreui-toggle="modal" data-coreui-target="#regularModal"><p class="mt-4">Rosalinda F. Delan(First Enrollment)</p></td>
              <td data-coreui-toggle="modal" data-coreui-target="#regularModal"><p class="mt-4">BSIT</p></td>
              <td>
                <div class="dropdown mt-3">
                  <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" id="dropdownMenuButton" data-coreui-toggle="dropdown" aria-expanded="false">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 30 30" role="img"><title>Menu</title><path stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="2" d="M4 7h22M4 15h22M4 23h22"></path></svg>
                  </button>
                  <ul class="dropdown-menu dropdown-menu-sm" aria-labelledby="dropdownMenuButton">
                    <li class="d-flex flex-row justify-content-between">
                      <a class="dropdown-item" href="../enrollment/regular/show">
                        <span class="text-info">
                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                            <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8M1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/>
                            <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5M4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0"/>
                          </svg>
                        </span>
                        View
                      </a>
                    </li>
                    <li class="d-flex flex-row justify-content-between">
                      <a class="dropdown-item" href="../enrollment/regular/edit">
                        <span class="text-info">
                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                            <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                            <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
                          </svg>
                        </span>
                        Edit
                      </a>
                    </li>
                  </ul>
                </div>
              </td>
            </tr>






            <tr>
              <td><p class="mt-4">2023-30516</p></td>
              <td><p class="mt-4">Rosalinda F. Delan(Irregular)</p></td>
              <td><p class="mt-4">BSIT</p></td>
              <td>
                <div class="dropdown mt-3">
                  <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" id="dropdownMenuButton" data-coreui-toggle="dropdown" aria-expanded="false">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 30 30" role="img"><title>Menu</title><path stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="2" d="M4 7h22M4 15h22M4 23h22"></path></svg>
                  </button>
                  <ul class="dropdown-menu dropdown-menu-sm" aria-labelledby="dropdownMenuButton">
                    <li class="d-flex flex-row justify-content-between">
                      <a class="dropdown-item" href="../enrollment/irregular/show">
                        <span class="text-info">
                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                            <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8M1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/>
                            <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5M4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0"/>
                          </svg>
                        </span>
                        View
                      </a>
                    </li>
                    <li class="d-flex flex-row justify-content-between">
                      <a class="dropdown-item" href="../enrollment/irregular/edit">
                        <span class="text-info">
                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class=regular"bi bi-pencil-square" viewBox="0 0 16 16">
                            <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                            <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
                          </svg>
                        </span>
                        Edit
                      </a>
                    </li>
                  </ul>
                </div>
              </td>
            </tr>


              <!-- Success Modal -->
              <div class="modal fade" id="successModal" tabindex="-1" aria-labelledby="successModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-body">
                      <p>
                        Account Successfully Restored!
                      </p>
                      <div class="text-end">
                        <button type="button" class="btn btn-info btn-sm px-3" data-coreui-dismiss="modal">Ok</button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>


                <!-- Transferee Modal -->
              <div class="modal modal-lg fade" id="transfereeModal" tabindex="-1" aria-labelledby="transfereeModalLabel" aria-hidden="true">
                <div class="modal-dialog  modal-dialog-centered">
                  <div class="modal-content">
                    <div class="modal-header bg-dark ps-5">
                      <h5 class="modal-title text-white" id="transfereeModalLabel">Enroll Student Name</h5>
                      <button type="button" class="btn-close" data-coreui-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body px-5">
                      <form>
                        <label for="curriculum-name" class="col-form-label">Select type of Student</label>
                        <div class="input-group mb-3">
                          <select class="form-select" id="inputGroupSelect01">
                            <option value="1">Transferee</option>
                            <option value="2">Regular</option>
                            <option value="3">Shiftee</option>
                          </select>
                        </div>
                        <label for="curriculum-name" class="col-form-label">Kindly choose the students credentials submitted during enrollment</label>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                          <label class="form-check-label" for="flexCheckDefault">
                            Form 138
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                          <label class="form-check-label" for="flexCheckDefault">
                            Grade 12 Report Card
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                          <label class="form-check-label" for="flexCheckDefault">
                            Certificate of Good Moral Character
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                          <label class="form-check-label" for="flexCheckDefault">
                            PSA
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                          <label class="form-check-label" for="flexCheckDefault">
                            Live Birth Certificate
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                          <label class="form-check-label" for="flexCheckDefault">
                            Transcript of Records (TOR)
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                          <label class="form-check-label" for="flexCheckDefault">
                            Other
                          </label>
                        </div>
                      </form>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-info text-white" data-coreui-target="#optionModalToggle" data-coreui-toggle="modal">Enroll Now</button>
                    </div>
                  </div>
                </div>
              </div>



              <div class="modal modal-lg fade" id="optionModalToggle" tabindex="-1" aria-labelledby="optionModalToggleLabel" aria-hidden="true">
                <div class="modal-dialog  modal-dialog-centered">
                  <div class="modal-content">
                    <div class="modal-header bg-dark ps-5">
                      <h5 class="modal-title text-white" id="optionModalToggleLabel">Enroll Student Name</h5>
                      <button type="button" class="btn-close" data-coreui-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body px-5">
                      <form>
                        <label for="curriculum-name" class="col-form-label">Choose an option</label>

                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
                          <label class="form-check-label" for="exampleRadios1">
                            Enroll Subjects from the Curriculum
                          </label>
                        </div>
                        <div class="form-check">
                          <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
                          <label class="form-check-label" for="exampleRadios2">
                            Credit Subjects
                          </label>
                        </div>
                      </form>
                    </div>
                    <div class="modal-footer d-flex justify-content-between">
                      <button type="button" class="btn btn-info bg-transparent border border-0" data-coreui-target="#transfereeModal" data-coreui-toggle="modal" style="color: #FF0000;">
                        <svg width="12" height="20" viewBox="0 0 12 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path d="M11.77 1.77L10 0L0 10L10 20L11.77 18.23L3.54 10L11.77 1.77Z" fill="#FF0000"/>
                        </svg>
                        Go Back
                      </button>
                      <a href="../enrollment/transferee/new" class="text-decoration-none btn btn-info text-white">Proceed</a>
                    </div>
                  </div>
                </div>
              </div>


            <tr>
              <td data-coreui-toggle="modal" data-coreui-target="#transfereeModal"><p class="mt-4">2023-30516</p></td>
              <td data-coreui-toggle="modal" data-coreui-target="#transfereeModal"><p class="mt-4">Rosalinda F. Delan(transferee)</p></td>
              <td data-coreui-toggle="modal" data-coreui-target="#transfereeModal"><p class="mt-4">BSIT</p></td>
              <td>
                <div class="dropdown mt-3">
                  <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" id="dropdownMenuButton" data-coreui-toggle="dropdown" aria-expanded="false">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 30 30" role="img"><title>Menu</title><path stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="2" d="M4 7h22M4 15h22M4 23h22"></path></svg>
                  </button>
                  <ul class="dropdown-menu dropdown-menu-sm" aria-labelledby="dropdownMenuButton">
                    <li class="d-flex flex-row justify-content-between">
                      <a class="dropdown-item" href="../enrollment/transferee/show">
                        <span class="text-info">
                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                            <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8M1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/>
                            <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5M4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0"/>
                          </svg>
                        </span>
                        View
                      </a>
                    </li>
                    <li class="d-flex flex-row justify-content-between">
                      <a class="dropdown-item" href="../enrollment/transferee/edit">
                        <span class="text-info">
                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                            <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                            <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
                          </svg>
                        </span>
                        Edit
                      </a>
                    </li>
                  </ul>
                </div>
              </td>
            </tr>

            <tr>
              <td data-coreui-toggle="modal" data-coreui-target="#shifteeModal"><p class="mt-4">2023-30516</p></td>
              <td data-coreui-toggle="modal" data-coreui-target="#shifteeModal"><p class="mt-4">Rosalinda F. Delan(shiftee)</p></td>
              <td data-coreui-toggle="modal" data-coreui-target="#shifteeModal"><p class="mt-4">BSIT</p></td>
              <td>
                <div class="dropdown mt-3">
                  <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" id="dropdownMenuButton" data-coreui-toggle="dropdown" aria-expanded="false">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 30 30" role="img"><title>Menu</title><path stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="2" d="M4 7h22M4 15h22M4 23h22"></path></svg>
                  </button>
                  <ul class="dropdown-menu dropdown-menu-sm" aria-labelledby="dropdownMenuButton">
                    <li class="d-flex flex-row justify-content-between">
                      <a class="dropdown-item" href="../enrollment/shiftee/show">
                        <span class="text-info">
                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                            <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8M1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/>
                            <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5M4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0"/>
                          </svg>
                        </span>
                        View
                      </a>
                    </li>
                    <li class="d-flex flex-row justify-content-between">
                      <a class="dropdown-item" href="../enrollment/shiftee/edit">
                        <span class="text-info">
                          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                            <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                            <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
                          </svg>
                        </span>
                        Edit
                      </a>
                    </li>
                  </ul>
                </div>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</x-authenticated_layout>
