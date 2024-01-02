<x-unauthenticated_layout>
  <div class="container-fluid p-0 vh-100 d-flex flex-column justify-content-between"
      style="
        background-image: url({{ asset('images/evsu_bg_transparent_1.png') }});
        background-size: cover;
      ">
    <div>
      <div class="bg-primary pb-2">
        <div class="bg-white w-100 text-center">
          <img src="{{ asset('images/logo-v2.png') }}" class="img-fluid p-3" />
        </div>
      </div>
      <div class="row gx-0">
        <div class="col-12 col-md-4 p-2 p-md-4">
          <div class="card bg-success position-relative">
            <div class="position-absolute w-100 end-0 bottom-0">
              <img src="{{ asset('images_2/bg-logo.png') }}" class="img-fluid w-100"/>
            </div>
            <div class="card-body w-50 mx-auto" style="z-index: 9999;" >
              <img src="{{ asset('images/student.png') }}" class="img-fluid"/>
            </div>
            <div class="card-footer text-center" style="z-index: 9999;" >
              <a href="#" class="nav-link text-light fs-4 fw-bold">Student Portal</a>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-4 p-2 p-md-4">
          <div class="card bg-info position-relative">
            <div class="position-absolute w-100 end-0 bottom-0">
              <img src="{{ asset('images_2/bg-logo.png') }}" class="img-fluid w-100"/>
            </div>
            <div class="card-body w-50 mx-auto" style="z-index: 9999;" >
              <img src="{{ asset('images/employee.png') }}" class="img-fluid"/>
            </div>
            <div class="card-footer text-center" style="z-index: 9999;" >
              <a href="#" class="nav-link text-light fs-4 fw-bold">Employee Portal</a>
            </div>
          </div>
        </div>
        <div class="col-12 col-md-4 p-2 p-md-4">
          <div class="card bg-danger position-relative">
            <div class="position-absolute w-100 end-0 bottom-0">
              <img src="{{ asset('images_2/bg-logo.png') }}" class="img-fluid w-100"/>
            </div>
            <div class="card-body w-50 mx-auto" style="z-index: 9999;" >
              <img src="{{ asset('images/evaluator-portal.png') }}" class="img-fluid"/>
            </div>
            <div class="card-footer text-center" style="z-index: 9999;" >
              <a href="#" class="nav-link text-light fs-4 fw-bold">Evaluator Portal</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="text-center mt-5 mt-md-1">
      <h5 class="fw-bold">
        EVSU-OC Integrated Transcript of Records and Latin Honors System
      </h5>
      <p>Eastern Visayas State University - Copyright © 2012-2023 All Rights Reserved</p>
    </div>
  </div>

</x-unauthenticated_layout>