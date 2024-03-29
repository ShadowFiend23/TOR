<x-authenticated_layout>
    @php
        $years = [
            1 => "1st",
            2 => "2nd",
            3 => "3rd",
            4 => "4th"
        ];
    @endphp

    <!-- Modal confirmation-->
<div class="modal fade" id="addSummerModal" tabindex="-1" aria-labelledby="addSummerLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-body">
          <h5>Add Summer</h5>

            <div class="row gx-0">
              <div class="col-12 p-1">
                <label>Select Year</label>
                <select name="semester" id="selectedSummerYear" class="form-select form-select-sm py-1">
                  <option hidden>--Select Year--</option>
                  <option value="1">1st Year</option>
                  <option value="2">2nd Year</option>
                  <option value="3">3rd Year</option>
                  <option value="4">4th Year</option>
                </select>
              </div>
            </div>
            <div class="d-flex justify-content-end gap-1 m-2">
              <button class="btn btn-info btn-sm" id="saveSummerBtn">Submit</button>
              <button type="button" class="btn btn-secondary btn-sm" data-coreui-dismiss="modal">Cancel</button>
            </div>
        </div>
      </div>
    </div>
  </div>

  <div class="container-fluid px-5">
    <div class="d-flex flex-column pt-4 ps-4 bg-dark">
      <h2 class="fs-4 text-center text-white">{{ $curriculum->curriculumName }}</h2>
      <div class="d-flex flex-column">
        <h4 class="fs-6  text-white">Course: <span class="text-decoration-underline">BSIT</span></h4>
      </div>
    </div>
    <form id="subjectsForm" class="p-4 shadow">
    <input type="hidden" name="id" value="{{ $curriculum->id }}" />
        @for($i=1; $i<=4; $i++)
            <h4 class="fs-6 ms-3 text-black p-3">{{ $years[$i] }} Year : FIRST SEMESTER </h4>
            <div class="row justify-content-center">
                <div class="row col-md-10">
                    <div class="col-3" id="subjectDiv{{ $i }}1">
                        <div class="text-black fw-bold">
                            Subject Code
                        </div>
                        <div class="my-3">
                            <input type="text" class="form-control subjectCodeInput" name="subjectCode[{{ $i }}1][]" value="IT 123">
                        </div>
                        <div class="my-3">
                            <input type="text" class="form-control subjectCodeInput" name="subjectCode[{{ $i }}1][]" value="IT 456">
                        </div>
                        <div class="my-3">
                            <input type="text" class="form-control subjectCodeInput" name="subjectCode[{{ $i }}1][]" value="IT 789">
                        </div>
                    </div>
                    <div class="col-6 col-md-5" id="descriptionDiv{{ $i }}1">
                        <div class="text-black fw-bold">
                            Descriptive Title
                        </div>
                        <div class="my-3">
                            <input type="text" class="form-control" name="description[{{ $i }}1][]" value="Sample only pre requisite look">
                        </div>
                        <div class="my-3">
                            <input type="text" class="form-control" name="description[{{ $i }}1][]" value="Sample only not pre requisite look">
                        </div>
                        <div class="my-3">
                            <input type="text" class="form-control" name="description[{{ $i }}1][]" value="Sample only pre requisite look">
                        </div>
                    </div>
                    <div class="col-2" id="creditsDiv{{ $i }}1">
                        <div class="text-black fw-bold">
                            Credits
                        </div>
                        <div class="my-3">
                            <input type="text" class="form-control" name="credits[{{ $i }}1][]" value="3">
                        </div>
                        <div class="my-3">
                            <input type="text" class="form-control" name="credits[{{ $i }}1][]" value="3">
                        </div>
                        <div class="my-3">
                            <input type="text" class="form-control" name="credits[{{ $i }}1][]" value="3">
                        </div>
                    </div>
                    <div class="col-1 col-md-2">
                        <div class="text-black fw-bold text-nowrap">
                            Pre-req
                        </div>
                        <div class="d-flex flex-column" id="preReqDiv{{ $i }}1">
                            <div class="form-check mt-3">
                                <input class="form-check-input preReqCheckbox" data-year="{{ $i }}" data-sem="1" type="checkbox" value="" style="width: 2rem; height: 2rem;">

                            </div>
                            <div class="form-check mt-3">
                                <input class="form-check-input preReqCheckbox" data-year="{{ $i }}" data-sem="1" type="checkbox" value="" style="width: 2rem; height: 2rem;">

                            </div>
                            <div class="form-check mt-3">
                                <input class="form-check-input preReqCheckbox" data-year="{{ $i }}" data-sem="1" type="checkbox" value="" style="width: 2rem; height: 2rem;">

                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-end my-2">
                        <button type="button" class="btn btn-info rounded-circle p-2 addSubject" data-year="{{ $i }}" data-sem="1"><svg xmlns="http://www.w3.org/2000/svg" height="16" width="14" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H48c-17.7 0-32 14.3-32 32s14.3 32 32 32H192V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H400c17.7 0 32-14.3 32-32s-14.3-32-32-32H256V80z"/></svg></button>
                    </div>
                </div>
            </div>

            <h4 class="fs-6 ms-3 text-black p-3">{{ $years[$i] }} Year : SECOND SEMESTER </h4>
            <div class="row justify-content-center">
                <div class="row col-md-10">
                    <div class="col-3" id="subjectDiv{{ $i }}2">
                        <div class="text-black fw-bold">
                            Subject Code
                        </div>
                        <div class="my-3">
                            <input type="text" class="form-control subjectCodeInput" name="subjectCode[{{ $i }}2][]" value="IT 123">
                        </div>
                        <div class="my-3">
                            <input type="text" class="form-control subjectCodeInput" name="subjectCode[{{ $i }}2][]" value="IT 456">
                        </div>
                        <div class="my-3">
                            <input type="text" class="form-control subjectCodeInput" name="subjectCode[{{ $i }}2][]" value="IT 789">
                        </div>
                    </div>
                    <div class="col-6 col-md-5" id="descriptionDiv{{ $i }}2">
                        <div class="text-black fw-bold">
                            Descriptive Title
                        </div>
                        <div class="my-3">
                            <input type="text" class="form-control" name="description[{{ $i }}2][]" value="Sample only pre requisite look">
                        </div>
                        <div class="my-3">
                            <input type="text" class="form-control" name="description[{{ $i }}2][]" value="Sample only not pre requisite look">
                        </div>
                        <div class="my-3">
                            <input type="text" class="form-control" name="description[{{ $i }}2][]" value="Sample only pre requisite look">
                        </div>
                    </div>
                    <div class="col-2" id="creditsDiv{{ $i }}2">
                        <div class="text-black fw-bold">
                            Credits
                        </div>
                        <div class="my-3">
                            <input type="text" class="form-control" name="credits[{{ $i }}2][]" value="3">
                        </div>
                        <div class="my-3">
                            <input type="text" class="form-control" name="credits[{{ $i }}2][]" value="3">
                        </div>
                        <div class="my-3">
                            <input type="text" class="form-control" name="credits[{{ $i }}2][]" value="3">
                        </div>
                    </div>
                    <div class="col-1 col-md-2">
                        <div class="text-black fw-bold text-nowrap">
                            Pre-req
                        </div>
                        <div class="d-flex flex-column" id="preReqDiv{{ $i }}2">
                            <div class="form-check mt-3">
                                <input class="form-check-input preReqCheckbox" data-year="{{ $i }}" data-sem="2" type="checkbox" value="" style="width: 2rem; height: 2rem;">

                            </div>
                            <div class="form-check mt-3">
                                <input class="form-check-input preReqCheckbox" data-year="{{ $i }}" data-sem="2" type="checkbox" value="" style="width: 2rem; height: 2rem;">

                            </div>
                            <div class="form-check mt-3">
                                <input class="form-check-input preReqCheckbox" data-year="{{ $i }}" data-sem="2" type="checkbox" value="" style="width: 2rem; height: 2rem;">

                            </div>
                        </div>
                    </div>
                    <div class="d-flex justify-content-end my-2">
                        <button type="button" class="btn btn-info rounded-circle p-2 addSubject" data-year="{{ $i }}" data-sem="2"><svg xmlns="http://www.w3.org/2000/svg" height="16" width="14" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H48c-17.7 0-32 14.3-32 32s14.3 32 32 32H192V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H400c17.7 0 32-14.3 32-32s-14.3-32-32-32H256V80z"/></svg></button>
                    </div>
                </div>
            </div>
        <br>
        @endfor

        <div id="mainSummer" style="display:none;">
            <h4 class="fs-6 ms-3 text-black p-3" id="summerYearTitle"></h4>
            <div class="row justify-content-center">
                <div class="row col-md-10">
                    <div class="col-3">
                        <div class="text-black fw-bold">
                            Subject Code
                        </div>
                        <div id="summerSubjects"></div>
                    </div>
                    <div class="col-6 col-md-5">
                        <div class="text-black fw-bold">
                            Descriptive Title
                        </div>
                        <div id="summerDescription"></div>
                    </div>
                    <div class="col-2">
                        <div class="text-black fw-bold">
                            Credits
                        </div>
                        <div id="summerCredits"></div>
                    </div>
                    <div class="col-1 col-md-2">
                        <div class="text-black fw-bold text-nowrap">
                            Pre-req
                        </div>
                        <div class="d-flex flex-column" id="summerPreReq"></div>
                    </div>
                    <div class="d-flex justify-content-end my-2">
                        <button type="button" class="btn btn-info rounded-circle p-2" id="addSummerSubjectBtn"><svg xmlns="http://www.w3.org/2000/svg" height="16" width="14" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M256 80c0-17.7-14.3-32-32-32s-32 14.3-32 32V224H48c-17.7 0-32 14.3-32 32s14.3 32 32 32H192V432c0 17.7 14.3 32 32 32s32-14.3 32-32V288H400c17.7 0 32-14.3 32-32s-14.3-32-32-32H256V80z"/></svg></button>
                    </div>
                </div>
            </div>
        </div>
        <div class="d-flex justify-content-end">
            <div class="px-3">
                <button type="button" class="btn btn-primary btn btn-info text-white" id="submitSubjects">
                    Submit
                </button>

                <button type="button" id="addSummerBtn" class="ms-2 btn btn-primary btn btn-info text-white">
                    Add Summer
                </button>
            </div>
        </div>
    </form>
    <div class="modal modal-lg fade" id="presubjectModal" data-coreui-backdrop="static" data-coreui-keyboard="false" aria-hidden="true" aria-labelledby="presubjectModalLabel" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header bg-dark ps-5">
              <h1 class="modal-title fs-5 text-white" id="exampleModalLabel">Pre-REQUISITE SUBJECTS</h1>
              <button type="button" class="btn-close" data-coreui-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body px-5">
              <p>Note: <span class="text-info">There are two selected prerequisite subjects for this semester. Please choose the prerequisites for this particular subject for the current semester.</span></p>
                <label for="curriculum-name" class="col-form-label text-black" id="preReqSubjectLabel"></label>
                <div class="input-group mb-3">
                  <input type="text"id="preReqChoices" />
                </div>
            </div>
            <div class="modal-footer px-5">
              <button type="button" class="btn btn-secondary" id="cancelPreReq">Cancel</button>
              <button type="button" class="btn btn-info text-white" id="savePreReq">Save changes</button>
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
                    <option value="semester">Semester</option>
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
  </div>
</x-authenticated_layout>
