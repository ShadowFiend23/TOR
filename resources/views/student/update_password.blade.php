<x-student_layout>
  <div class="contaier-fluid border mx-1 bg-white p-3">
    <section class="content-header">
      <h3><strong>Change Password</strong> <br> SY: 2023-2024 SEM: 1</h3>
    </section>

    <div class="card shadow">
      <div class="card-header"> 
        <i class='bx bx-cog' ></i> Change Password
      </div>
      <div class="card-body">
          <form action="javascript:void(0)" id="form" class="needs-validation" novalidate>
            <div class="row gx-0 my-3">
              <label class="col-1 text-end">Old Password</label>
              <div class="col-11 px-3">
                <input type="password" required class="form-control form-control-sm col-8" />
                <div class="invalid-feedback">
                  Old password is required
                </div>
              </div>
            </div>
            <div class="row gx-0 my-3">
              <label class="col-1 text-end">New Password</label>
              <div class="col-11 px-3">
                <input type="password" required class="form-control form-control-sm col-8" />
                <div class="invalid-feedback">
                 New password is required
                </div>
              </div>
            </div>
            <div class="row gx-0 my-3">
              <label class="col-1 text-end">Confirm Password</label>
              <div class="col-11 px-3">
                <input type="password" required class="form-control form-control-sm col-8" />
                <div class="invalid-feedback">
                  Confirm password is required and cannot be empty
                </div>
              </div>
            </div>
            <div class="row gx-0 my-3">
              <div class="col-1" ></div>
              <div class="col-11 px-3">
                <button onclick="document.getElementById('form').classList='was-validated';" class="btn btn-primary btn-sm">Change Password</button>
                <button onclick="document.getElementById('form').reset();document.getElementById('form').classList='needs-validation';" class="btn btn-secondary btn-sm">Clear</button>
              </div>
            </div>
          </form>
      </div>
    </div>
  </div>
</div>

</x-student_layout>