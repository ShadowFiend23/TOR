<x-authenticated_layout>
  <div class="container-fluid">
    <div class="row">
      <div class="col-12 d-flex justify-content-end">
        <a href="../irregular/new" class='btn btn-info text-white'>Enroll</a>
      </div>
      <div class="col-12">
        <h4 class="text-black ms-2"><strong>Edit Student Records</strong></h4>
        <div class="py-5 px-3"style="width: 30rem;">
          <div class="card">
            <div class="card-header">
              <div class="card-title text-center">
                <strong>Student Credentials</strong>
              </div>
            </div>

            <div class="card-body d-flex flex-column gap-2">
              <div class="form-check">
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" checked>
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
                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" checked>
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
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="d-flex flex-row align-items-center justify-content-between pt-4 px-4">
        <p class="text-black">Department : <strong>Computer Studies</strong></p>
        <p class="text-black">Previous Course :  <strong>Bachelor of Science in Information Technology (BSIT)</strong></p>
      </div>
      <div class="px-4 mt-4">
        <div class="card">
          <div class="card-header d-flex flex-row align-items-center justify-content-around pt-4">
              <p>School Year : <strong>2021-2022</strong></p>
              <p>Semester: <strong>2</strong></p>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table">
                <tr>
                    <th style="width: 5%">Grade</th>
                    <th style="width: 15%">Subject Code</th>
                    <th >Subhect Description</th>
                    <th style="width: 7%">Credits</th>
                </tr>
                <tr>
                  <td> 1.5 </td>
                  <td> IT 134 </td>
                  <td> Computer Programming 1 </td>
                  <td> 1 </td>
                </tr>
                <tr>
                  <td> 1.1 </td>
                  <td> GEN ED 001 </td>
                  <td> Purposive Communication </td>
                  <td> 1 </td>
                </tr>
                <tr>
                  <td> 2.0 </td>
                  <td> MATH ENHANCE 1 </td>
                  <td> College Algebra and Trigonometry </td>
                  <td> 1 </td>
                </tr>
                <tr>
                  <td> 1.9 </td>
                  <td> GEN ED 004 </td>
                  <td> Mathematics in the Modern world </td>
                  <td> 1 </td>
                </tr>
                <tr>
                  <td> 1.1 </td>
                  <td> GEN ED 009 </td>
                  <td> The Entrepreneurial Mind </td>
                  <td> 1 </td>
                </tr>
                <tr>
                  <td> 1.6 </td>
                  <td> IT 113 </td>
                  <td> Introduction to Computing </td>
                  <td> 1 </td>
                </tr>
                <tr>
                  <td> 1.2 </td>
                  <td> NSTP 113 </td>
                  <td> CWTS, LTS, MTS(Naval or Air Force) </td>
                  <td> 1 </td>
                </tr>
                <tr>
                  <td> 1.4 </td>
                  <td> DRR 113 </td>
                  <td> Disaster Risk Reduction and Education in Emergencies </td>
                  <td> 1 </td>
                </tr>
                <tr>
                  <td> 2.2 </td>
                  <td> GEN ED 002 </td>
                  <td> Understanding the Self </td>
                  <td> 1 </td>
                </tr>
                <tr>
                  <td> 1.0 </td>
                  <td> PATHFIT 112 </td>
                  <td> Movement Competency Training </td>
                  <td> 1 </td>
                </tr>
              </table>
            </div>
          </div>
        </div>

        <div class="row mt-2">
          <div class="col-12 d-flex flex-row align-items-center justify-content-center gap-4">
            <label for="semester" class="text-black">Remarks</label>
            <textarea class="form-control mt-2" name="remarks" id="remarks"></textarea>
          </div>
        </div>
      </div>
    </div>

    <div class="accordion mt-4" id="accordionExample">
      <div class="accordion-item text-white">
        <h2 class="accordion-header">
          <button class="accordion-button bg-dark text-white" type="button" data-coreui-toggle="collapse" data-coreui-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
            <span class="fs-4 me-2"><i class='bx bx-list-ul' ></i></span>
              Course : OC BSIT,
              AY : 2021-2022,
              Sem : 1
          </button>
        </h2>
        <div id="collapseOne" class="accordion-collapse collapse show" data-coreui-parent="#accordionExample">
          <div class="accordion-body">
            <div class="panel-body" style="display: block;">
              <div class="table-responsive">
                <table class="table ">
                  <tr>
                      <th style="width: 5%">Grade</th>
                      <th style="width: 15%">Code</th>
                      <th style="width: 7%">Sec.</th>
                      <th >Description</th>
                  </tr>
                  <tr>
                    <td><input type="text" name="" id="" value="1.5" class="form-control"></td>
                    <td class="pt-3">IT 134 </td>
                    <td class="pt-3"> 1A </td>
                    <td class="pt-3"> Computer Programming 1 </td>
                  </tr>
                  <tr>
                    <td><input type="text" name="" id="" value="1.1" class="form-control"></td>
                    <td class="pt-3"> GEN ED 001 </td>
                    <td class="pt-3"> 1A </td>
                    <td class="pt-3"> Purposive Communication </td>
                  </tr>
                  <tr>
                    <td><input type="text" name="" id="" value="2.0" class="form-control"></td>
                    <td class="pt-3"> MATH ENHANCE 1 </td>
                    <td class="pt-3"> 1A </td>
                    <td class="pt-3"> College Algebra and Trigonometry </td>
                  </tr>
                  <tr>
                    <td><input type="text" name="" id="" value="1.9" class="form-control"></td>
                    <td class="pt-3"> GEN ED 004 </td>
                    <td class="pt-3"> 1A </td>
                    <td class="pt-3"> Mathematics in the Modern world </td>
                  </tr>
                  <tr>
                  <td><input type="text" name="" id="" value="1.1" class="form-control"></td>
                    <td class="pt-3"> GEN ED 009 </td>
                    <td class="pt-3"> 1A </td>
                    <td class="pt-3"> The Entrepreneurial Mind </td>
                  </tr>
                  <tr>
                    <td><input type="text" name="" id="" value="1.6" class="form-control"></td>
                    <td class="pt-3"> IT 113 </td>
                    <td class="pt-3"> 1A </td>
                    <td class="pt-3"> Introduction to Computing </td>
                  </tr>
                  <tr>
                    <td><input type="text" name="" id="" value="1.2" class="form-control"></td>
                    <td class="pt-3"> NSTP 113 </td>
                    <td class="pt-3"> 1A </td>
                    <td class="pt-3"> CWTS, LTS, MTS(Naval or Air Force) </td>
                  </tr>
                  <tr>
                    <td><input type="text" name="" id="" value="1.4" class="form-control"></td>
                    <td class="pt-3"> DRR 113 </td>
                    <td class="pt-3"> 1A </td>
                    <td class="pt-3"> Disaster Risk Reduction and Education in Emergencies </td>
                  </tr>
                  <tr>
                    <td><input type="text" name="" id="" value="2.2" class="form-control"></td>
                    <td class="pt-3"> GEN ED 002 </td>
                    <td class="pt-3"> 1A </td>
                    <td class="pt-3"> Understanding the Self </td>
                  </tr>
                  <tr>
                    <td><input type="text" name="" id="" value="1.0" class="form-control"></td>
                    <td class="pt-3"> PATHFIT 112 </td>
                    <td class="pt-3"> 1A </td>
                    <td class="pt-3"> Movement Competency Training </td>
                  </tr>
                </table>
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
  </div>
</x-authenticated_layout>
