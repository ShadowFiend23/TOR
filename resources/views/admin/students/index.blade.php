<x-admin_layout>

<div class="container-lg px-5">
  <h1 class="app-page-title">Departments</h1>
  <div class="d-flex align-items-center justify-content-end p-2">
    <a href="/admin/departments/new"  class="btn btn-success shadow text-white"><span class="text-white">

      <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-lg" viewBox="0 0 16 16">
        <path fill-rule="evenodd" d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2"/>
      </svg>
    </span>Add New</a>
  </div>
  <div class="row g-4 mb-4">
    <div class="col-12 col-md-6">
        <div class="card shadow-sm bg-danger rounded-0">
          <div class="d-flex justify-content-between align-items-center p-3">
            <a href="/admin/courses" class="fs-4 nav-link text-white">Computer Science Department</a>
            <a href="/admin/departments/edit" class="text-decoration-none">
              <span class="text-white">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                  <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                  <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
                </svg>
              </span>
            </a>
          </div>
          <div class="card-body d-flex justify-content-start align-items-start">
            <div class="d-flex flex-column align-items-center justify-content-center">
              <h1 class="text-white m-0">3</h1>
              <p class="text-white">Courses</p>
            </div>
          </div>
          <div class="card-footer">
            Dept. Head: Myka Mamirta
          </div>
        </div>
    </div>

    <div class="col-12 col-md-6">
      <div class="card shadow-sm bg-info rounded-0">
        <div class="d-flex justify-content-between align-items-center p-3">
          <a href="/admin/courses" class="fs-4 nav-link text-white">Education Department</a>
          <a href="/admin/departments/edit" class="text-decoration-none">
            <span class="text-white">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
              </svg>
            </span>
          </a>
        </div>
        <div class="card-body d-flex justify-content-start align-items-start">
          <div class="d-flex flex-column align-items-center justify-content-center">
            <h1 class="text-white m-0">5</h1>
            <p class="text-white">Courses</p>
          </div>
        </div>
        <div class="card-footer">
          Dept. Head: Rosalinda Delan
        </div>
      </div>
    </div>

  </div>
</div>
</x-admin_layout>