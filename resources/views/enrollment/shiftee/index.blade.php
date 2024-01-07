<x-authenticated_layout>
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <h4 class="text-black ms-2 px-3"><strong>Transfer from <a href="#">Bachelor of Science in Architecture (BSAr)</a></strong></h4>
      </div>
    </div>

    <div class="container mt-4">
      <div class="d-flex flex-column p-4">
        <p class='text-black'>Student ID: <strong>2020-39516</strong></p>
        <p class='text-black'>Email: <strong>rosalinda.delan@evsu.edu.ph</strong></p>
        <p class='text-black'>Name: <strong>Rosalinda F. Delan</strong></p>
        <p class='text-black'>Course: <strong>Bachelor of Science in Industrial Tech</strong></p>
      </div>

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



    <!-- Success Modal -->
    <div class="modal fade" id="successModal" tabindex="-1" aria-labelledby="successModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-body">
            <p class="text-primary">The records have transferred successfully! There are subjects eligible for credit. Would you like to proceed with enrolling and crediting these subjects, or do you prefer to enroll without crediting this particular subject?
            </p>
            <p class="mt-2 text-primary">
              list sa subject here:
            </p>
            <p class="m-0">
              and this subject if ma credit cya din mag yellow nana ngadto
              sa curriculum pero selectable ghapon cya
              not like sa irreg nga di jud ma select basta
              pre requesite
            </p>

            <div class="text-end">
              <button type="button" class="btn btn-secondary btn-sm px-3 text-white" data-coreui-dismiss="modal">Credit </button>
              <a href="../../enrollment/new" class='btn btn-info text-white btn-sm px-3 text-decoration-none'>Enroll</a>
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
      <button type="button" class="btn btn-info text-white" data-coreui-toggle="modal" data-coreui-target="#successModal">Forward</button>
    </div>


  </div>
</x-authenticated_layout>
