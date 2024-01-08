<x-authenticated_layout>
  <div class="container-fluid px-5">
    <div class="card border border-0 px-0 mx-0">
      <div class="card-header p-4  bg-dark">
        <h5 class="card-title text-white mt-2">Transfer Records</h5>
      </div>
      <div class="card-body shadow mt-2">
        <table id="student_list_table" class="table table-hover" style="width:100%;">
          <thead>
            <tr>
              <th>Student ID</th>
              <th>Name</th>
              <th>Department</th>
              <th>Course</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td data-coreui-toggle="modal" data-coreui-target="#regularModal"><p class="mt-4">2023-30516</p></td>
              <td data-coreui-toggle="modal" data-coreui-target="#regularModal"><p class="mt-4">Rosalinda F. Delan</p></td>
              <td data-coreui-toggle="modal" data-coreui-target="#regularModal"><p class="mt-4">Education</p></td>
              <td data-coreui-toggle="modal" data-coreui-target="#regularModal"><p class="mt-4">Bachelor of Science in Industrial Tech</p></td>
              <td>
                <a href="../../enrollment/shiftee/" class="btn btn-primary text-white mt-3">Transfer</a>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</x-authenticated_layout>
