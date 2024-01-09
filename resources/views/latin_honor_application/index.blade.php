<x-authenticated_layout>
  <div class="container-fluid px-5">
    <div class="card border border-0 px-0 mx-0">

      <div class="card-header p-4  bg-dark">
        <h5 class="card-title text-white mt-2">Student List Meeting Latin Honors GPA Criteria</h5>
      </div>


      <div class="modal fade" id="appliedModal" tabindex="-1" aria-labelledby="appliedModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-body">
              <h5>Confirmation</h5>
              <p class="text-black">
                This student has met the Latin honor criteria and has applied for evaluation. Would you like to approve or review the records?
              </p>
              <div class="text-end">
                <a href="../latin_honor_application/review/" class="btn btn-secondary btn-sm px-3 text-white">Review</a>
                <button type="button" class="btn btn-info btn-sm text-white" data-coreui-target="#approvedModal" data-coreui-toggle="modal">Approved</button>
              </div>
            </div>
          </div>
        </div>
      </div>



      <div class="modal fade" id="approvedModal" tabindex="-1" aria-labelledby="approvedModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-body">
              <h5>Approved</h5>
              <p class="text-black">
                The evaluation for this student has been successfully approved, and the records have been forwarded to the assigned evaluator.
              </p>
              <div class="text-end">
                <button type="button" class="btn btn-secondary btn-sm px-3 text-white" data-coreui-toggle="modal" data-coreui-target="#appliedModal">Back</button>
                <button type="button" class="btn btn-info btn-sm text-white" data-coreui-dismiss="modal">Ok</button>
              </div>
            </div>
          </div>
        </div>
      </div>



      <div class="card-body shadow mt-2">
        <div class="d-flex flex-row align-items-center justify-content-end mb-5 gap-2 pt-0 m-0">
          <a href="../latin_honor_application/denied_application/" class="btn btn-primary text-white mt-3">Denied Application</a>
          <a href="../latin_honor_application/approved_students/" class="btn btn-success text-white mt-3">Approved Student</a>
        </div>
        <table id="student_list_table" class="table table-hover" style="width:100%;">
          <thead>
            <tr>
              <th>ID</th>
              <th>Name</th>
              <th>Course</th>
              <th>GWA</th>
              <th>Status</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td><p class="mt-4">2023-30516</p></td>
              <td><p class="mt-4">Rosalinda F. Delan</p></td>
              <td><p class="mt-4">BSIT</p></td>
              <td><p class="mt-4">1.1</p></td>
              <td>
                <button type="button" class="btn btn-success btn-sm text-white mt-3" data-coreui-toggle="modal" data-coreui-target="#appliedModal">
                  Applied
                </button>
              </td>
            </tr>
            <tr>
              <td><p class="mt-4">2023-30516</p></td>
              <td><p class="mt-4">Rosalinda F. Delan</p></td>
              <td><p class="mt-4">BSIT</p></td>
              <td><p class="mt-4">1.1</p></td>
              <td>
                <button type="button" class="btn btn-warning btn-sm text-white mt-3" data-coreui-toggle="modal" data-coreui-target="#pendingModal">
                  Pending
                </button>
              </td>
            </tr>
            <tr>
              <td><p class="mt-4">2023-30516</p></td>
              <td><p class="mt-4">Rosalinda F. Delan</p></td>
              <td><p class="mt-4">BSIT</p></td>
              <td><p class="mt-4">1.1</p></td>
              <td>
                <button type="button" class="btn btn-warning btn-sm text-white mt-3" data-coreui-toggle="modal" data-coreui-target="#pendingModal">
                  Pending
                </button>
              </td>
            </tr>
            <tr>
              <td><p class="mt-4">2023-30516</p></td>
              <td><p class="mt-4">Rosalinda F. Delan</p></td>
              <td><p class="mt-4">BSIT</p></td>
              <td><p class="mt-4">1.1</p></td>
              <td>
                <button type="button" class="btn btn-warning btn-sm text-white mt-3" data-coreui-toggle="modal" data-coreui-target="#pendingModal">
                  Pending
                </button>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</x-authenticated_layout>
