<x-unauthenticated_layout>

  <div class="vh-100 container-fluid d-flex justify-content-center align-items-center"
      style="
        background-image: url({{ asset('images/evsu_bg_transparent.png') }});
        background-size: cover;
      "
  >
    <div class="card p-3">
      <div class="d-flex justify-content-center flex-column align-items-center">
        <div class="avatar avatar-xl">
          <img class="avatar-img" src="{{ asset('images/logo.png') }}">
        </div>
        <h4>Employee Registration System</h4>
        <p>CREATE YOUR ACCOUNT</p>
      </div>
      <div>
        <form  action="javascript:void(0)" class="form">
          <div class="row gx-0">
            <div class="col-12 col-md-4 p-2">
              <label>First Name</label>
              <input type="text" class="form-control form-control-sm"/>
            </div>
            <div class="col-12 col-md-4 p-2">
              <label>Last Name</label>
              <input type="text" class="form-control form-control-sm"/>
            </div>
            <div class="col-12 col-md-4 p-2">
              <label>Middle Name</label>
              <input type="text" class="form-control form-control-sm"/>
            </div>
          </div>
          <div class="row gx-0">
            <div class="col-12 col-md-6 p-2">
              <label>Enter password</label>
              <input type="password" class="form-control form-control-sm"/>
            </div>
            <div class="col-12 col-md-6 p-2">
              <label>Confirm password</label>
              <input type="password" class="form-control form-control-sm"/>
            </div>
          </div>
          <div class="p-2">
            <label>Choose Profile Photo: </label>
            <input type="file" class="form-control form-control-sm"/>
          </div>
          <div class="p-2">
            <div class="form-check">
              <input class="form-check-input " type="checkbox" value="" id="flexCheckDefault">
              <label class="form-check-label" for="flexCheckDefault">
                I agree to all <strong>Terms</strong> and <strong>Conditions</strong>
              </label>
            </div>
          </div>
          <div class="p-2">
            <button class="btn btn-primary btn-sm w-100">Confirm</button>
          </div>
          <div class="text-end p-2">
            <a href="#" class="text-decoration-none text-info">signin</a>
          </div>
        </form>
      </div>
    </div>
  </div>

</x-unauthenticated_layout>