<x-authenticated_layout>

<div class="container-xl" id="app-content" style="margin-left: 25rem; margin-top: 2rem;">
  <div class="row">
    <div class="col-12 text-center py-5">
      <div class="d-flex flex-column shadow">
        <div class="app-auth-body px-4">
          <div class="auth-form-container text-start mx-auto">
            <form class="auth-form auth-signup-form ">
              <div class="container">
                <div class="header pt-4 text-start">
                  <h1 class="app-page-title">Edit Course</h1>
                </div>
                <div class="d-flex flex-column flex-lg-row gap-2">
                  <div class="input-group mb-3 gap-2 flex-column">
                    <div class="course mb-3">
                      <label class="sr-only mb-2" for="course-name">Course Name</label>
                      <input id="course-name" name="course-name" type="text" class="form-control course-name" required="required" value="Bachelor of Science in Information Technology">
                    </div>
                    <div class="course mb-3">
                      <label for="exampleSelect1" class="form-label mb-2">Course In-Charge ID</label>
                      <select class="form-select" id="exampleSelect1">
                        <option>1</option>
                        <option>2</option>
                      </select>
                    </div>
                    <div class="course mb-3">
                      <label class="sr-only mb-2" for="email">In-Change Email</label>
                      <input id="email" name="email" type="email" class="form-control email" required="required" value="example@gmail.com">
                    </div>
                  </div>
                  <div class="input-group mb-3 gap-2 flex-column">
                    <div class="course mb-3">
                      <label class="sr-only mb-2" for="course-acronym">Course Acronym</label>
                      <input id="course-acronym" name="course-acronym" type="text" class="form-control course-acronym" required="required" value="BSIT">
                    </div>
                    <div class="course mb-3">
                      <label for="exampleColorInput" class="sr-only mb-2">Select Background Color of this course</label>
                      <input type="color" class="form-control form-control-color w-100" id="exampleColorInput" value="#563d7c" title="Choose your color">
                    </div>
                  </div>
                </div>
              </div>
              <div class="input-group mb-3 gap-2 d-flex flex-column  align-items-center justify-content-between p-2 ">
                <div class="cta-container w-100 d-flex justify-content-end gap-2 mt-2">
                  <a href="../department/" class="btn btn-secondary shadow text-decoration-none">Cancel</a>
                  <button type="submit" class="btn btn-info text-white shadow">Update</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

</x-authenticated_layout>
