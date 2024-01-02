<x-authenticated_layout>
@php
    $data = [];
    if(isset($info['data'])){
        $data = $info['data'];
    }
@endphp
<div class="container-lg px-5">
  <div class="row">
    <div class="col-12 text-center py-5">
      <div class="d-flex flex-column shadow bg-white">
        <div class="px-4">
          <div class="auth-form-container text-start">
            <form class="auth-form auth-signup-form" id="courseForm">
              <div class="container">
                <div class="header pt-4 text-start">
                  <h1>{{ $info['title'] }}</h1>
                </div>
                <div class="d-flex flex-column flex-lg-row gap-2">
                  <div class="input-group mb-3 gap-2 flex-column">
                    <div class="course mb-3">
                      <label class="sr-only mb-2" for="course-name">Course Name</label>
                      <input id="course-name" name="courseName" type="text" class="form-control course-name" required="required"
                        @if(!empty($data))
                            value="{{ $data->courseName }}"
                        @endisset
                      >
                    </div>
                    <div class="course mb-3">
                      <label for="exampleSelect1" class="form-label mb-2">Course In-Charge ID</label>
                      <select name='inChargeID' class="form-select" id="exampleSelect1">
                        <option value='1'>1</option>
                        <option value='2'>2</option>
                      </select>
                    </div>
                    <div class="course mb-3">
                      <label class="sr-only mb-2" for="email">In-Charge Email</label>
                      <input id="email" name="email" type="email" class="form-control email" disabled>
                    </div>
                  </div>
                  <div class="input-group mb-3 gap-2 flex-column">
                    <div class="course mb-3">
                      <label class="sr-only mb-2" for="course-acronym">Course Acronym</label>
                      <input id="course-acronym" name="acronym" type="text" class="form-control course-acronym" required="required"
                        @if(!empty($data))
                            value="{{ $data->acronym }}"
                        @endisset
                      >
                    </div>
                    <div class="course mb-3">
                      <label for="exampleColorInput" class="sr-only mb-2">Select Background Color of this course</label>
                      <input type="color" name="color" class="form-control form-control-color w-100" id="exampleColorInput" title="Choose your color"
                        @if(!empty($data))
                            value="{{ $data->color }}"
                        @endisset
                      >
                    </div>
                  </div>
                </div>
              </div>
              <div class="input-group mb-3 gap-2 d-flex flex-column  align-items-center justify-content-between p-2 ">
                <div class="cta-container w-100 d-flex justify-content-end gap-2 mt-2">
                  <a href="{{ route('department') }}" class="btn btn-secondary shadow text-decoration-none">Cancel</a>
                  <button type="submit" class="btn btn-info text-white shadow">{{ $info['button'] }}</button>
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
