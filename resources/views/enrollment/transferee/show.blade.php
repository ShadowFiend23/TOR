<x-authenticated_layout>
  <div class="container-fluid">

    <div class="row">
      <div class="col-12 d-flex justify-content-end">
        <a href="../irregular/new" class='btn btn-info text-white'>Enroll</a>
      </div>
      <div class="col-12">
        <h4 class="text-black ms-2"><strong>Students Records</strong></h4>
        <div class="d-flex flex-column ms-4 mb-4">
          <strong class="text-black fw-bold my-2">Student Credentials</strong>
          <p class="text-black mb-0">Form 138</p>
          <p class="text-black mb-0">Transcript of Records(TOR)</p>
        </div>
      </div>
    </div>
    <div class="py-5 px-3" data-controller="transferee-curriculum" id="parentContainer">
      <div class="card" data-transferee-curriculum-target="container" id="container">
        <div class="card-body d-flex flex-column gap-4">
          <form action="">
            <div class="row">
              <div class="col-12 col-md-6 d-flex flex-row gap-2">
                <label for="previousschool">Previous School:</label>
                 <p> <strong>Eastern Visayas State University</strong></p>
              </div>
              <div class="col-12 col-md-6 d-flex flex-row gap-2">
                <label for="couse">Course:</label>
                <p> <strong>Bachelor of Science in Information Technology (BSIT)</strong></p>
              </div>
            </div>
            <div class="row">
            <div class="col-12 col-md-6 d-flex flex-row gap-2">
                <label for="schoolyear">School Year</label>
                <p> <strong>2021-2022</strong></p>
              </div>
              <div class="col-12 col-md-6 d-flex flex-row gap-2">
                <label for="semester">Semester</label>
                <p> <strong>First Semester</strong></p>
              </div>
            </div>
            <div class="row">
              <div class="col-12">
                <label for="semester">Remarks: </label>
                <p class="mt-2"><strong>Remarks nalang since gipili sa student man nga di magpa credit so no need to verify or input na sa mga subject nga iya na take.
(if gamay ra like 2 sem okay ra e input pero ug damo na magtype nalang cla ug PLEASE SEE THE ATTACHED FILE)</strong></p>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</x-authenticated_layout>
