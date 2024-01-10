<x-evaluator_layout>
  <div class="container-fluid px-5">
    <div class="card border border-0 px-0 mx-0">
      <div class="card-header p-4  bg-dark">
        <h3 class="card-title text-white mt-2">Computer Studies Department</h3>
      </div>
      <div class="card-body shadow mt-2">
        <table id="student_list_table" class="table table-hover" style="width:100%;">
          <thead>
            <tr>
              <th>ID</th>
              <th>Name</th>
              <th>Course</th>
              <th>GWA</th>
              <th>Enterview Score</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td onclick="window.location.href = '../evaluator/student/show'"><p class="mt-4">2023-30516</p></td>
              <td onclick="window.location.href = '../evaluator/student/show'"><p class="mt-4">Rosalinda F. Delan</p></td>
              <td><p class="mt-4">BSIT</p></td>
              <td><p class="mt-4">1.1</p></td>
              <td><p class="mt-4">70</p></td>
              <td>
                <a href="../evaluator/show" class="text-decoration-none">
                  <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-eye mt-3 ms-2" viewBox="0 0 16 16">
                    <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8M1.173 8a13 13 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5s3.879 1.168 5.168 2.457A13 13 0 0 1 14.828 8q-.086.13-.195.288c-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5s-3.879-1.168-5.168-2.457A13 13 0 0 1 1.172 8z"/>
                    <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5M4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0"/>
                  </svg>
                </a>
              </td>
            </tr>
            <tr>
              <td onclick="window.location.href = '../evaluator/student/show'"><p class="mt-4">2023-32412</p></td>
              <td onclick="window.location.href = '../evaluator/student/show'"><p class="mt-4">Osamo F. Dazai</p></td>
              <td><p class="mt-4">BSIT</p></td>
              <td><p class="mt-4">1.1</p></td>
              <td><p class="mt-4">70</p></td>
              <td>
                <a href="../evaluator/show" class="text-decoration-none">
                  <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-eye mt-3 ms-2" viewBox="0 0 16 16">
                    <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8M1.173 8a13 13 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5s3.879 1.168 5.168 2.457A13 13 0 0 1 14.828 8q-.086.13-.195.288c-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5s-3.879-1.168-5.168-2.457A13 13 0 0 1 1.172 8z"/>
                    <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5M4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0"/>
                  </svg>
                </a>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</x-evaluator_layout>
