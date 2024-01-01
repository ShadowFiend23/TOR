<x-authenticated_layout>
  <div class="container-lg px-5">
    <div class="d-flex flex-column pt-4 ps-4 bg-dark">
      <h2 class="fs-4 text-center text-white">Edit Generation Z</h2>
      <div class="d-flex flex-column">
        <h4 class="fs-6  text-white">Only: <span class="text-decoration-underline">BSIT</span></h4>
      </div>
    </div>

    <div class="row">
      <div class="col-12">
        <div class="row pt-2">
          <div class="col-12 d-flex flex-row align-items-center justify-content-between ps-4">
            <h4 class="fs-6 ms-3 text-black">1st Year : FIRST SEMESTER </h4>
            <div class="modal fade modal-lg" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggle" tabindex="-1">
              <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                  <div class="modal-header bg-dark ps-5">
                    <h1 class="modal-title fs-5 text-white" id="exampleModalToggleLabel2">Add Semester</h1>
                    <button type="button" class="btn-close" data-coreui-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body px-5">
                    <form action="post">
                      <label for="curriculum-name" class="col-form-label">Year Level</label>
                      <div class="input-group mb-3">
                        <select class="form-select" id="inputGroupSelect01">
                          <option selected>Select year level</option>
                          <option value="1">1st</option>
                          <option value="2">2nd</option>
                          <option value="3">3rd</option>
                          <option value="3">4th</option>
                        </select>
                      </div>
                      <label for="curriculum-name" class="col-form-label">Semester</label>
                      <div class="input-group mb-3">
                        <select class="form-select" id="inputGroupSelect01">
                          <option selected>Semester</option>
                          <option value="1">1</option>
                          <option value="2">2</option>
                          <option value="summer">Summmer</option>
                        </select>
                      </div>
                    </form>
                  </div>
                  <div class="modal-footer px-5">
                    <a href="../curriculum/show" class="text-decoration-none btn btn-info text-white">Submit</a>
                  </div>
                </div>
              </div>
            </div>

            <div class="d-flex align-items-center justify-content-end mb-4">
              <button class="btn btn-success text-white" data-coreui-target="#exampleModalToggle" data-coreui-toggle="modal">
                <span class="text-white">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-lg" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2"/>
                  </svg>
                </span>
                Add Semester
              </button>
            </div>
          </div>
          <div class="col-12">
            <div class="container">
              <table class="table table-hover table-bordered shadow" style="width: 60vw;">
                <thead>
                  <tr>
                    <th scope="col" class='fw-semibold' style="width: 10%;">Code</th>
                    <th colspan="2" scope="col" class='fw-semibold' style="width: 60%;">Description</th>
                    <th scope="col" class='fw-semibold' style="width: 5%;">Credits</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row" class="text-center" style="width: 10%;">FIL 001</th>
                    <td colspan="2" class="ps-5" style="width: 60%;">Akademiko sa Wikang Filipino</td>
                    <td class="text-center" style="width: 5%;">3</td>
                  </tr>
                  <tr>
                    <th scope="row" class="text-center" style="width: 10%;">IT 113</th>
                    <td colspan="2" class="ps-5" style="width: 60%;">Introduction to Computing *</td>
                    <td class="text-center" style="width: 5%;">3</td>
                  </tr>
                  <tr>
                    <th scope="row" class="text-center" style="width: 10%;">Math Enhance 1</th>
                    <td colspan="2" class="ps-5" style="width: 60%;">College Algebra & Trigonometry</td>
                    <td class="text-center" style="width: 5%;">3</td>
                  </tr>
                  <tr>
                    <th scope="row" class="text-center" style="width: 10%;">GEN.ED 001</th>
                    <td colspan="2" class="ps-5" style="width: 60%;">Purposive Communication</td>
                    <td class="text-center" style="width: 5%;">3</td>
                  </tr>
                  <tr>
                    <th scope="row" class="text-center" style="width: 10%;">DRR 113</th>
                    <td colspan="2" class="ps-5" style="width: 60%;">Disaster Risk Reduction and Education in Emergencies</td>
                    <td class="text-center" style="width: 5%;">3</td>
                  </tr>
                  <tr>
                    <th scope="row" class="text-center" style="width: 10%;">GEN.ED 004</th>
                    <td colspan="2" class="ps-5" style="width: 60%;">Mathematics in the Modern World</td>
                    <td class="text-center" style="width: 5%;">3</td>
                  </tr>
                  <tr>
                    <th scope="row" class="text-center" style="width: 10%;">IT 134</th>
                    <td colspan="2" class="ps-5" style="width: 60%;">Computer Programming I</td>
                    <td class="text-center" style="width: 5%;">3</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
      <div class="col-12">
        <h4 class="fs-6 ms-3 text-black">1st Year : SECOND SEMESTER </h4>
        <div class="container">
          <table class="table table-hover table-bordered shadow" style="width: 60vw;">
            <thead>
              <tr>
                <th scope="col" class="fw-semibold text-center" style="width: 10%;">Code</th>
                <th colspan="2" scope="col" class='fw-semibold text-center' style="width: 60%;">Description</th>
                <th scope="col" class='fw-semibold text-center' style="width: 5%;">Credits</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row" class="text-center" style="width: 10%;">IT 123</th>
                <td colspan="2" class="ps-5" style="width: 60%;">Introduction to Human Computer Interaction</td>
                <td class="text-center" style="width: 5%;">3</td>
              </tr>
              <tr>
                <th scope="row" class="text-center" style="width: 10%;">IT 124</th>
                <td colspan="2" class="ps-5" style="width: 60%;">Discrete Mathematics</td>
                <td class="text-center" style="width: 5%;">3</td>
              </tr>
              <tr>
                <th scope="row" class="text-center" style="width: 10%;">IT 125</th>
                <td colspan="2" class="ps-5" style="width: 60%;">Computer Programming 2</td>
                <td class="text-center" style="width: 5%;">3</td>
              </tr>
              <tr>
                <th scope="row" class="text-center" style="width: 10%;">GEN.ED 008</th>
                <td colspan="2" class="ps-5" style="width: 60%;">Science, Technology and Society</td>
                <td class="text-center" style="width: 5%;">3</td>
              </tr>
              <tr>
                <th scope="row" class="text-center" style="width: 10%;">GEN.ED 006</th>
                <td colspan="2" class="ps-5" style="width: 60%;">Ethics</td>
                <td class="text-center" style="width: 5%;">3</td>
              </tr>
              <tr>
                <th scope="row" class="text-center" style="width: 10%;">RIZAL</th>
                <td colspan="2" class="ps-5" style="width: 60%;">Life and Works of Rizal</td>
                <td class="text-center" style="width: 5%;">3</td>
              </tr>
              <tr>
                <th scope="row" class="text-center" style="width: 10%;">PE</th>
                <td colspan="2" class="ps-5" style="width: 60%;">PATH-Fit I Physical Activity Towards Health</td>
                <td class="text-center" style="width: 5%;">3</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      <div class="col-12">
        <h4 class="fs-6 ms-3 text-black">2nd Year : FIRST SEMESTER </h4>
        <div class="container">
          <table class="table table-hover table-bordered shadow" style="width: 60vw;">
            <thead>
              <tr>
                <th scope="col" class="fw-semibold text-center" style="width: 10%;">Code</th>
                <th colspan="2" scope="col" class='fw-semibold text-center' style="width: 60%;">Description</th>
                <th scope="col" class='fw-semibold text-center' style="width: 5%;">Credits</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row" class="text-center" style="width: 10%;">IT 211</th>
                <td colspan="2" class="ps-5" style="width: 60%;">Data Structures and Algorithms *</td>
                <td class="text-center" style="width: 5%;">3</td>
              </tr>
              <tr>
                <th scope="row" class="text-center" style="width: 10%;">IT 233</th>
                <td colspan="2" class="ps-5" style="width: 60%;">Object Oriented Programming *</td>
                <td class="text-center" style="width: 5%;">3</td>
              </tr>
              <tr>
                <th scope="row" class="text-center" style="width: 10%;">IT 253</th>
                <td colspan="2" class="ps-5" style="width: 60%;">Platform Technologies *</td>
                <td class="text-center" style="width: 5%;">3</td>
              </tr>
              <tr>
                <th scope="row" class="text-center" style="width: 10%;">IT 273</th>
                <td colspan="2" class="ps-5" style="width: 60%;">Web Systems and Technologies 1 *</td>
                <td class="text-center" style="width: 5%;">3</td>
              </tr>
              <tr>
                <th scope="row" class="text-center" style="width: 10%;">IT 293</th>
                <td colspan="2" class="ps-5" style="width: 60%;">Statistics and Probability</td>
                <td class="text-center" style="width: 5%;">3</td>
              </tr>
              <tr>
                <th scope="row" class="text-center" style="width: 10%;">CCNA 213</th>
                <td colspan="2" class="ps-5" style="width: 60%;">Introduction to Networks *</td>
                <td class="text-center" style="width: 5%;">3</td>
              </tr>
              <tr>
                <th scope="row" class="text-center" style="width: 10%;">RIZAL 001</th>
                <td colspan="2" class="ps-5" style="width: 60%;">Rizals's Life and Works</td>
                <td class="text-center" style="width: 5%;">3</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
      <div class="col-12">
        <h4 class="fs-6 ms-3 text-black">2nd Year : SECOND SEMESTER </h4>
        <div class="container">
          <table class="table table-hover table-bordered shadow" style="width: 60vw;">
            <thead>
              <tr>
                <th scope="col" class="fw-semibold text-center" style="width: 10%;">Code</th>
                <th colspan="2" scope="col" class='fw-semibold text-center' style="width: 60%;">Description</th>
                <th scope="col" class='fw-semibold text-center' style="width: 5%;">Credits</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row" class="text-center" style="width: 10%;">IT 223</th>
                <td colspan="2" class="ps-5" style="width: 60%;">Information Management *</td>
                <td class="text-center" style="width: 5%;">3</td>
              </tr>
              <tr>
                <th scope="row" class="text-center" style="width: 10%;">IT 243</th>
                <td colspan="2" class="ps-5" style="width: 60%;">Quantitative Methods</td>
                <td class="text-center" style="width: 5%;">3</td>
              </tr>
              <tr>
                <th scope="row" class="text-center" style="width: 10%;">IT 263</th>
                <td colspan="2" class="ps-5" style="width: 60%;">Interactive Programming and Technologies 1 *</td>
                <td class="text-center" style="width: 5%;">3</td>
              </tr>
              <tr>
                <th scope="row" class="text-center" style="width: 10%;">GEN. ED. 005</th>
                <td colspan="2" class="ps-5" style="width: 60%;">Art Appreciation</td>
                <td class="text-center" style="width: 5%;">3</td>
              </tr>
              <tr>
                <th scope="row" class="text-center" style="width: 10%;">GEN. ED. 008</th>
                <td colspan="2" class="ps-5" style="width: 60%;">Science, Technology and Society</td>
                <td class="text-center" style="width: 5%;">3</td>
              </tr>
              <tr>
                <th scope="row" class="text-center" style="width: 10%;">LIT 001</th>
                <td colspan="2" class="ps-5" style="width: 60%;">Panitikang Filipino</td>
                <td class="text-center" style="width: 5%;">3</td>
              </tr>
              <tr>
                <th scope="row" class="text-center" style="width: 10%;">CCNA 223</th>
                <td colspan="2" class="ps-5" style="width: 60%;">Routing and Switching Essentials *</td>
                <td class="text-center" style="width: 5%;">3</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>

      <div class="modal fade modal-lg" id="updateModalToggle" aria-hidden="true" aria-labelledby="updateModalToggle" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header bg-dark ps-5">
              <h1 class="modal-title fs-5 text-white" id="updateModalToggleLabel">Notice</h1>
              <button type="button" class="btn-close" data-coreui-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body px-5">
              <h2 class='text-success'>Sucessfully Update!</h2>
            </div>
            <div class="modal-footer px-5">
              <button class="btn btn-info text-white" data-coreui-toggle="modal">Ok</button>
            </div>
          </div>
        </div>
      </div>
      <div class="d-flex align-items-center justify-content-end mb-4">
        <button class="btn btn-info text-white" data-coreui-target="#updateModalToggle" data-coreui-toggle="modal">
          Update
        </button>
      </div>
    </div>
  </div>
</x-authenticated_layout>
