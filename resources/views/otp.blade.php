<x-unauthenticated_layout>

  <div class="vh-100 container-fluid d-flex justify-content-center align-items-center"
      style="
        background-image: url({{ asset('images/evsu_bg_transparent.png') }});
        background-size: cover;
      "
  >
    <div class="card p-4">
      <div class="d-flex justify-content-center flex-column align-items-center">
        <div class="avatar avatar-xl">
          <img class="avatar-img" src="{{ asset('images/logo.png') }}">
        </div>
        <h4>Employee Registration System</h4>
        <p>OTP VERIFICATION</p>
      </div>
      <div>
        <form  action="javascript:void(0)" class="form">
          <div class="p-2">
            <label>Enter OTP Code: </label>
            <div class="input-group">
              <span class="input-group-text" id="basic-addon1"><i class='bx bx-lock-alt' ></i></span>
              <input type="text" class="form-control form-control-sm">
            </div>
          </div>
          <div class="p-2">
            <button class="btn btn-primary btn-sm w-100">Confirm</button>
          </div>
          <div class="text-start p-2">
            We gave you a one-time password through email
          </div>
          <div class="text-start p-2">
            <span class="fw-bold text-primary">NOTE: </span>
            Before contacting us, please check your 
            <br>junk/spam folder, since email delivery issues
            <br>caused by automated bots are fairly prevalent.
          </div>
          <div class="p-2">
            <a href="#" class="text-decoration-none text-info">
              <i class='bx bx-arrow-back'></i> Go back
            </a>
          </div>
        </form>
      </div>
    </div>
  </div>

</x-unauthenticated_layout>