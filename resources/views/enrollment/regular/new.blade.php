<x-authenticated_layout>
    @php
        $subjects     = json_decode($info['subjects'],true);
        $subjectCodes = $subjects['subjectCode'];
        $descriptions = $subjects['description'];
        $credits      = $subjects['credits'];
        $course       = $info["course"];
        $credentials  = $info["credentials"];
        $data         = $info["data"];

        $ordinal = [
            "1st",
            "2nd",
            "3rd",
            "4th"
        ];
    @endphp
  <div class="container-fluid px-5">
    @foreach ($subjectCodes as $key => $year)

        @php
            $yearSem = (string)$key;
        @endphp
            @foreach ($data as $type => $val)
                <input type='hidden' value="{{ $val }}" name="{{ $type }}" />
            @endforeach

            @foreach ($credentials as $credential)
                <input type='hidden' value="{{ $credential }}" name="credentials[]" />
            @endforeach
            <div class="row">
                <div class="col-12">
                    <div class="row pt-2">
                        <div class="col-12 d-flex flex-row align-items-center justify-content-between">
                        <div class="d-flex flex-row align-items-center">
                            <h4 class="fs-6 ms-3 text-black">Course: <span class="">{{ $course->courseName }}</span></h4>
                            <h4 class="fs-6 ms-3 text-black">Year Level: <span class="">{{ $ordinal[$yearSem[0] - 1] }} Year</span></h4>
                            <h4 class="fs-6 ms-3 text-black">Semester: <span class="">{{ $ordinal[$yearSem[1] - 1] }} Semester</span></h4>
                        </div>
                        </div>
                        <div class="col-12">
                        <div class="container-fluid">
                            <table class="table table-hover table-bordered shadow" style="width: 80vw;">

                            <thead>
                                <tr>
                                <th scope="col" class='fw-semibold text-center' style="width: 10%;">Subject Code</th>
                                <th colspan="2" scope="col" class='fw-semibold text-center' style="width: 60%;">Subject Description</th>
                                <th scope="col" class='fw-semibold text-center' style="width: 5%;">Credits</th>
                                <th scope="col" class='fw-semibold text-center' style="width: 5%;">✔️</th>
                                </tr>
                            </thead>
                            <tbody>
                @foreach ($year as $subjectCode)
                    <tr data-subject="{{ $subjectCode }}">
                        <th scope="row" class="text-center" style="width: 10%;">{{ $subjectCode }}</th>
                        <td colspan="2" class="ps-5" style="width: 60%;">{{ $descriptions[$key][$loop->index] }}</td>
                        <td class="text-center" style="width: 5%;">{{ $credits[$key][$loop->index] }}</td>
                        <td class="text-center" style="width: 5%;">
                            <div class="form-check ms-4">
                            <input class="form-check-input checkboxEnrollSubject" type="checkbox" name="enrollSubjects" id="flexCheckDefault" style="width: 1.5rem; height: 1.5rem;">
                            </div>
                        </td>
                    </tr>
                @endforeach

                                </tbody>
                            </table>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
    @endforeach


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


      <div class="modal modal-lg gfade" id="selectedSubjectModal" tabindex="-1" aria-labelledby="selectedSubjectModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header bg-dark ps-5">
              <h5 class="modal-title text-white" id="selectedSubjectModalLabel">Please confirm if these are all the subjects intended for enrollment?</h5>
              <button type="button" class="btn-close" data-coreui-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <h4 class="fs-6 ms-3 text-black">1st Year : SECOND SEMESTER </h4>
                <div class="container">
                  <table class="table table-hover table-bordered shadow">
                    <thead>
                      <tr>
                        <th scope="col" class="fw-semibold text-center" style="width: 10%;">Subject Code</th>
                        <th colspan="2" scope="col" class='fw-semibold text-center' style="width: 60%;">SubjectDescription</th>
                        <th scope="col" class='fw-semibold text-center' style="width: 5%;">Credits</th>
                      </tr>
                    </thead>
                    <tbody id="selectedSubjectTbody">

                    </tbody>
                  </table>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary text-white" data-coreui-dismiss="modal">Back</button>
              <a href="../../enrollment/regular/show" class="btn btn-info text-white">Submit</a>
            </div>
          </div>
        </div>
      </div>



      <div class="d-flex flex-row align-items-center justify-content-between mb-4 px-4">
        <a href="../curriculum/" class='text-decoration-none'>
          <svg width="12" height="20" viewBox="0 0 12 20" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M11.77 1.77L10 0L0 10L10 20L11.77 18.23L3.54 10L11.77 1.77Z" fill="#FF0000"/>
          </svg>
          Go Back
        </a>

        <button class="btn btn-info border border-0 text-white" id="submitEnrollmentSubjects">
          Submit
        </button>
      </div>
    </div>
  </div>

</x-authenticated_layout>

