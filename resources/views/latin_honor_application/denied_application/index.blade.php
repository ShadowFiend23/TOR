<x-authenticated_layout>
  <div class="container-fluid px-5">
    <div class="card border border-0 px-0 mx-0">
      <div class="card-header p-4  bg-dark">
        <h5 class="card-title text-white mt-2">Denied Application List</h5>
      </div>
      <div class="card-body shadow mt-2">
        <div class="d-flex flex-row align-items-center justify-content-end mb-5 gap-2 pt-0 m-0">
          <a href="./" class="btn btn-primary text-white mt-3">Denied Application</a>
          <a href="../../latin_honor_application/approved_students/" class="btn btn-success text-white mt-3">Approved Student</a>
        </div>
        <table id="student_list_table" class="table table-hover" style="width:100%;">
          <thead>
            <tr>
              <th>ID</th>
              <th>Name</th>
              <th>Course</th>
              <th>GWA</th>
              <th>Status</th>
            </tr>
            </a>
          </thead>
          <tbody>
            <tr onclick="window.location.href = '/latin_honor_application/denied_application/review';">
              <td><p class="mt-4">2023-30516</p></td>
              <td><p class="mt-4">Rosalinda F. Delan</p></td>
              <td><p class="mt-4">BSIT</p></td>
              <td><p class="mt-4">1.1</p></td>
              <td>
                <button type="button" class="btn btn-danger btn-sm text-white mt-3">
                    Denied
                </button>
              </td>
            </tr>
            <tr onclick="window.location.href = '/latin_honor_application/denied_application/review';">
              <td><p class="mt-4">2023-30516</p></td>
              <td><p class="mt-4">Rosalinda F. Delan</p></td>
              <td><p class="mt-4">BSIT</p></td>
              <td><p class="mt-4">1.1</p></td>
              <td>
                <button type="button" class="btn btn-danger btn-sm text-white mt-3">
                  Denied
                </button>
              </td>
            </tr>
            <tr onclick="window.location.href = '/latin_honor_application/denied_application/review';">
              <td><p class="mt-4">2023-30516</p></td>
              <td><p class="mt-4">Rosalinda F. Delan</p></td>
              <td><p class="mt-4">BSIT</p></td>
              <td><p class="mt-4">1.1</p></td>
              <td>
                <button type="button" class="btn btn-danger btn-sm text-white mt-3">
                  Denied
                </button>
              </td>
            </tr>
            <tr onclick="window.location.href = '/latin_honor_application/denied_application/review';">
              <td><p class="mt-4">2023-30516</p></td>
              <td><p class="mt-4">Rosalinda F. Delan</p></td>
              <td><p class="mt-4">BSIT</p></td>
              <td><p class="mt-4">1.1</p></td>
              <td>
                <button type="button" class="btn btn-danger btn-sm text-white mt-3">
                  Denied
                </button>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</x-authenticated_layout>
