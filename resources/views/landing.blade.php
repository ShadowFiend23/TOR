<x-unauthenticated_layout>
  <div class="main-wrapper">
    <header>
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="logo-container">
                <img src="{{ asset('images/logo-v2.png') }}" alt="Eastern Visayas State University">
            </div>
          </div>
        </div>
      </div>
    </header>
    <section class="content-area">
      <div class="container-fluid">
        <div class="row d-flex gx-5 align-items-center justify-content-around">
          <div class="col-xs-6 col-sm-4 col-md-4 col-lg-4" style="max-width: 30rem;">
            <a class="app-icon-link" href="http://localhost/evsu-oc/student" title="">
              <div style="background-color: #2b972c" class="app-icon-container">
                  <img class="img-icon" src="{{ asset('images_2/student-portal.png') }}" alt="EVSU Student Portal">
              </div>
            </a>
          </div>
          <div class="col-xs-6 col-sm-4 col-md-4 col-lg-4" style="max-width: 30rem;">
            <a class="app-icon-link" href="/login" title="">
              <div style="background-color: #9c27b0" class="app-icon-container">
                  <img class="img-icon" src="{{ asset('images_2/free-ed-is.png') }}" alt="EVSU Employee Portal">
              </div>
            </a>
          </div>
          <div class="col-xs-6 col-sm-4 col-md-4 col-lg-4" style="max-width: 30rem;">
            <a target="_blank" class="app-icon-link" href="https://apps.evsu.edu.ph/admissions" title="">
              <div style="background-color: #db4437" class="app-icon-container">
                  <img class="img-icon" src="{{ asset('images_2/evaluator_portal.png') }}" alt="EVSU Online Admission">
              </div>
            </a>
          </div>
        </div>
      </div>

      <div class="container">
        <div class="row">
          <div class="col-md-12">
              <h1 class="site-title text-center">EVSU-OC Integrated Transcript of Records and Latin Honors System</h1>
          </div>
        </div>
      </div>
    </section>
    <footer class="footer">
      <div class="row">
        <div class="col-md-12">
            <p class="text-center">Eastern Visayas State University - Copyright © 2012-2023 All Rights Reserved</p>
        </div>
      </div>
    </footer>
  </div>
</x-unauthenticated_layout>
