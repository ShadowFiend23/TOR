<x-authenticated_layout>
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <h4 class="text-black ms-2 px-3"><strong>Enroll Subjects from the Curriculum</strong></h4>
      </div>
    </div>

    <div class="py-5 px-3" data-controller="transferee-curriculum" id="parentContainer">
      <div class="card" data-transferee-curriculum-target="container" id="container">
        <div class="card-body d-flex flex-column gap-4">
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
        </div>
      </div>
      <div class="d-flex justify-content-end align-items-center mt-2 gap-2">
        <button class="btn btn-primary text-white rounded-circle" data-action="transferee-curriculum#addContainer">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="20" fill="currentColor" class="bi bi-plus-lg" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2"/>
          </svg>
        </button>

        <button class="btn btn-primary text-white rounded-circle d-none" data-action="transferee-curriculum#removeContainer" id="remover">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="20" fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
            <path d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5M8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5m3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0"/>
          </svg>
        </button>
      </div>
    </div>


    <!-- Success Modal -->
    <div class="modal fade" id="successModal" tabindex="-1" aria-labelledby="successModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-body">
            <p>
            The student records have been successfully recorded. Kindly proceed to enroll the subjects for the student now.
            </p>
            <div class="text-end">
              <button type="button" class="btn btn-secondary btn-sm px-3 text-white" data-coreui-dismiss="modal">Back</button>
              <a href="../../enrollment/regular/new" class='btn btn-info text-white btn-sm px-3 text-decoration-none'>Proceed</a>
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
      <button type="button" class="btn btn-info text-white" data-coreui-toggle="modal" data-coreui-target="#successModal">Submit</button>
    </div>


  </div>
</x-authenticated_layout>
