<x-authenticated_layout>
  <div class="container-fluid px-5">
    <div class="card border border-0 px-0 mx-0">
      <div class="card-header p-4 text-center bg-dark">
        <h5 class="card-title text-white">ALL CURRICULUMS</h5>
      </div>
      <div class="card-body shadow">
        <table id="curriculum_list_table" class="table" style="width:100%;">
          <thead>
              <tr>
                  <th>Course</th>
                  <th>Curriculum Name</th>
                  <th>First Active</th>
                  <th>Last Active</th>
                  <th>Action</th>
              </tr>
          </thead>
          <tbody>
            @forelse ($curriculums as $curriculum)
                <tr>
                <td>{{ $curriculum->courseName }}</td>
                <td>{{ $curriculum->curriculumName }}</td>
                <td>1928</td>
                <td>1945</td>
                <td>
                    <div class="dropdown">
                    <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" id="dropdownMenuButton" data-coreui-toggle="dropdown" aria-expanded="false">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 30 30" role="img"><title>Menu</title><path stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="2" d="M4 7h22M4 15h22M4 23h22"></path></svg>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-sm" aria-labelledby="dropdownMenuButton">
                        <li class="d-flex flex-row justify-content-between">
                        <a class="dropdown-item" href="#">
                            <span class="text-info">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                                <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8M1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/>
                                <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5M4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0"/>
                            </svg>
                            </span>
                            View
                        </a>
                        </li>
                        <li class="d-flex flex-row justify-content-between">
                        <a class="dropdown-item" href="#">
                            <span class="text-info">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
                            </svg>
                            </span>
                            Edit
                        </a>
                        </li>
                    </ul>
                    </div>
                </td>
                </tr>
            @empty
            @endforelse
          </tbody>
        </table>

          <!-- For Generation Z -->
          <div class="modal fade modal-lg" id="editCurriculumModal" aria-hidden="true" aria-labelledby="editCurriculumModalLabel" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content">
                <div class="modal-header bg-dark ps-5">
                  <h1 class="modal-title fs-5 text-white" id="editCurriculumModalLabel">Edit Generation Z</h1>
                  <button type="button" class="btn-close" data-coreui-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body px-5">
                  <form action="post">
                    <div class="mb-3">
                      <label for="curriculum-name" class="col-form-label">Curriculum Name</label>
                      <input type="text" class="form-control" id="curriculum-name", placeholder="Enter Curriculum Name" value="Generation Z">
                    </div>
                  </form>
                </div>
                <div class="modal-footer px-5">
                  <button type="button" class="btn btn-secondary" data-coreui-dismiss="modal">Cancel</button>
                  <button type="button" class="btn btn-info text-white" data-coreui-target="#curriculumDialog" data-coreui-toggle="modal" >Save changes</button>
                </div>
              </div>
            </div>
          </div>

          <div class="modal fade modal-lg" id="curriculumDialog" aria-hidden="true" aria-labelledby="curriculumDialogLabel" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content">
                <div class="modal-header bg-dark ps-5">
                  <h1 class="modal-title fs-5 text-white" id="curriculumDialogLabel">Confirmation</h1>
                  <button type="button" class="btn-close" data-coreui-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body px-5">
                  <p>The curriculum name has been successfully edited. Do you want to edit or review <span class="text-danger">curriculum?</p>
                </div>
                <div class="modal-footer px-5">
                  <button class="btn btn-secondary" data-coreui-toggle="modal">No</button>
                  <a href="../curriculum/edit" class="btn btn-info text-white"> Yes </a>
                </div>
              </div>
            </div>
          </div>
      </div>
    </div>
  </div>
</x-authenticated_layout>

