<x-authenticated_layout>
    @php
        if(isset($curriculum) && !empty($curriculum)){
            $course = $curriculum->courseName ?? "";
            $info   = json_decode($curriculum->info,true) ?? [];
        }

        $years = [
            1 => "1st",
            2 => "2nd",
            3 => "3rd",
            4 => "4th"
        ];
    @endphp
  <div class="container-fluid px-5">
    <div class="d-flex flex-column pt-4 ps-4 bg-dark">
      <h2 class="fs-4 text-center text-white">Generation Z</h2>
      <div class="d-flex flex-column">
        <h4 class="fs-6  text-white">Only: <span class="text-decoration-underline">{{ $course }}</span></h4>
      </div>
    </div>


    <div class="row">
        @for ($i=1; $i<=4; $i++)

        <div class="col-12">
            <div class="row pt-2">
                <div class="col-12 d-flex flex-row align-items-center justify-content-between ps-4">
                    <h4 class="fs-6 ms-3 text-black">{{ $years[$i] }} Year : FIRST SEMESTER </h4>
                    <div class="d-flex align-items-center justify-content-end mb-4">
                    @if($i === 1)
                        <button class="btn btn-primary border border-0hghh" data-coreui-target="#exampleModalToggle" data-coreui-toggle="modal" style='background-color: #FF5959'>
                            Save
                        </button>
                        <div class="dropdown ms-2">
                            <a class="btn btn-secondary dropdown-toggle" href="#" role="button" data-coreui-toggle="dropdown" aria-expanded="false">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 30 30" role="img"><title>Menu</title><path stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="2" d="M4 7h22M4 15h22M4 23h22"></path></svg>
                            </a>
                            <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Select Thisis/Capstone</a></li>
                            <li><a class="dropdown-item" href="#">Exclude for GWA</a></li>
                            <li><a class="dropdown-item" href="#">Download PDF</a></li>
                            </ul>
                        </div>
                    @endif
                </div>
            </div>
            <div class="col-12">
                <div class="container">
                <table class="table table-hover table-bordered shadow" style="width: 60vw;">
                    <thead>
                    <tr>
                        <th scope="col" class='fw-semibold text-center' style="width: 10%;">Code</th>
                        <th colspan="2" scope="col" class='fw-semibold text-center' style="width: 60%;">Description</th>
                        <th scope="col" class='fw-semibold text-center' style="width: 5%;">Credits</th>
                    </tr>
                    </thead>
                    <tbody>
                    @forelse($info['subjectCode'][$i . "1"] as $subjectCode)
                        <tr>
                            <th scope="row" class="text-center" style="width: 10%;">{{ $subjectCode }}</th>
                            <td colspan="2" class="ps-5" style="width: 60%;">{{ $info['description'][$i . "1"][$loop->index] }}</td>
                            <td class="text-center" style="width: 5%;">{{ $info['credits'][$i . "1"][$loop->index] }}</td>
                        </tr>
                    @endforeach

                    </tbody>
                </table>
                </div>
            </div>
            </div>
        </div>
        <div class="col-12">
            <h4 class="fs-6 ms-3 text-black">{{ $years[$i] }} Year : SECOND SEMESTER </h4>
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
                @forelse($info['subjectCode'][$i . "2"] as $subjectCode)
                    <tr>
                        <th scope="row" class="text-center" style="width: 10%;">{{ $subjectCode }}</th>
                        <td colspan="2" class="ps-5" style="width: 60%;">{{ $info['description'][$i . "2"][$loop->index] }}</td>
                        <td class="text-center" style="width: 5%;">{{ $info['credits'][$i . "2"][$loop->index] }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            </div>
        </div>
        @endfor
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

<div class="row">
    <div class="d-flex align-items-center justify-content-start mb-4">
        <a href="../curriculum/" class='text-decoration-none'>
        <svg width="12" height="20" viewBox="0 0 12 20" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M11.77 1.77L10 0L0 10L10 20L11.77 18.23L3.54 10L11.77 1.77Z" fill="#FF0000"/>
        </svg>
        Go Back
        </a>
    </div>
</div>
  <div class="modal fade modal-lg" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggle" tabindex="-1">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header bg-dark ps-5">
          <h1 class="modal-title fs-5 text-white" id="exampleModalToggleLabel2">Notice</h1>
          <button type="button" class="btn-close" data-coreui-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body px-5">
          <p class='text-black'>You've chosen <span class='text-info'>'IT 125 Computer Programming 2'</span> as a <span style='color: #FF5959'>thesis/capstone </span>for this curriculum. Your selection has been confirmed.</p>
        </div>
        <div class="modal-footer px-5">
          <a href="../curriculum/show" class="text-decoration-none btn btn-info text-white">Done</a>
        </div>
      </div>
    </div>
  </div>
</x-authenticated_layout>
