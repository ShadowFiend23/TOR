<x-unauthenticated_layout>
  <div class="container p-4">
    <form id="studentApplicationForm">
    <div class="card">
      <div class="card-header text-center">
        <img src="{{ asset('images/logo-v2.png') }}" />
      </div>
      <div class="card-body">
        <div>
          <h4>Personal Information</h4>
        </div>
        <div class="row gx-0">
          <div class="col-4 p-1">
            <label>Last Name</label>
            <input type="text" class="form-control form-control-sm" name="lastName" value="{{ $student->lastName }}"/>
          </div>
          <div class="col-4 p-1">
            <label>First Name</label>
            <input type="text" class="form-control form-control-sm" name="firstName" value="{{ $student->firstName }}"/>
          </div>
          <div class="col-2 p-1">
            <label>Middle Initial</label>
            <input type="text" class="form-control form-control-sm" name="middleName" value="{{ $student->middleName }}"/>
          </div>
          <div class="col-2 p-1">
            <label>Suffix</label>
            <input type="text" class="form-control form-control-sm" name="suffix" value="{{ $student->suffix }}"/>
          </div>
        </div>
        <div class="row gx-0">
          <div class="col-4 p-1">
            <label>Date of Birth</label>
            <input type="date" class="form-control form-control-sm" name="birthDate" value="{{ $student->birthDate }}"/>
          </div>
          <div class="col-4 p-1">
            <label>Place of Birth</label>
            <input type="text" class="form-control form-control-sm" name="birthPlace" value="{{ $student->birthPlace }}"/>
          </div>
        </div>
      </div>
      <div class="card-body">
        <div>
          <h4>Address</h4>
        </div>
        <div class="row gx-0">
          <div class="col-4 p-1">
            <label>Street</label>
            <input type="text" class="form-control form-control-sm" name="street" value="{{ $student->street }}"/>
          </div>
          <div class="col-4 p-1">
            <label>Barangay</label>
            <input type="text" class="form-control form-control-sm" name="barangay" value="{{ $student->barangay }}"/>
          </div>
          <div class="col-4 p-1">
            <label>Town</label>
            <input type="text" class="form-control form-control-sm" name="town" value="{{ $student->town }}" />
          </div>
        </div>
        <br>
        <div class="row gx-0">
          <div class="col-4 p-1">
            <label>Parents/Guardian</label>
            <input type="text" class="form-control form-control-sm" name="guardian" value="{{ $student->guardian }}"/>
          </div>
          <div class="col-4 p-1">
            <label>Address</label>
            <input type="text" class="form-control form-control-sm" name="guardianAddress" value="{{ $student->guardianAddress }}"/>
          </div>
        </div>
        <div class="row gx-0">
          <div class="col-4 p-1">
            <label>NCEE Percentile Rank</label>
            <input type="text" class="form-control form-control-sm" name="ncee" value="{{ $student->ncee }}"/>
          </div>
          <div class="col-4 p-1">
            <label>Date Taken</label>
            <input type="date" class="form-control form-control-sm" name="nceeDate" value="{{ $student->nceeDate }}"/>
          </div>
          <div class="col-4 p-1">
            <label>Place</label>
            <input type="text" class="form-control form-control-sm" name="nceePlace" value="{{ $student->nceePlace }}"/>
          </div>
        </div>
      </div>
      <div class="card-body">
        <div>
          <h4>Preliminary Education</h4>
        </div>
        <div class="row gx-0">
          <div class="col-10 p-1">
            <label>Elementary</label>
            <input type="text" class="form-control form-control-sm" name="elementarySchool" value="{{ $student->elementary }}"/>
          </div>
          <div class="col-2 p-1">
            <label>Year</label>
            <input type="input" class="form-control form-control-sm" name="elementaryYear" value="{{ $student->elementaryYear }}"/>
          </div>
        </div>
        <div class="row gx-0">
          <div class="col-10 p-1">
            <label>Secondary</label>
            <input type="text" class="form-control form-control-sm" name="secondarySchool" value="{{ $student->secondarySchool }}"/>
          </div>
          <div class="col-2 p-1">
            <label>Year</label>
            <input type="input" class="form-control form-control-sm" name="secondaryYear" value="{{ $student->secondaryYear }}"/>
          </div>
        </div>
      </div>
      <div class="card-body">
        <div>
          <h4>State of Admission </h4>
        </div>
        <div class="row gx-0">
          {{-- <div class="col-4 p-1">
            <label>Course</label>
            <input type="text" class="form-control form-control-sm" name=""/>
          </div>
          <div class="col-4 p-1">
            <label>Date of Admission</label>
            <input type="date" class="form-control form-control-sm"/>
          </div>
        </div> --}}
        <div class="row gx-0">
          <div class="col-4 p-1">
            <label>Student Photo</label>
            <input type="file" class="form-control form-control-sm" name="photo" value="{{ $student->photo }}"/>
          </div>
          <div class="col-4 p-1">
            <label>Password</label>
            <input type="password" class="form-control form-control-sm" name="password"/>
          </div>
          <div class="col-4 p-1">
            <label>Confirm Password</label>
            <input type="password" class="form-control form-control-sm"/>
          </div>
        </div>
      </div>
      <div class="card-footer d-flex justify-content-between">
        <a href="#" class="btn btn-light bg-transparent text-primary">
          <i class='bx bx-left-arrow-alt'></i> Back
        </a>
        <button class="btn btn-info">Submit</button>
      </div>
    </div>
    </form>
  </div>
</x-unauthenticated_layout>
