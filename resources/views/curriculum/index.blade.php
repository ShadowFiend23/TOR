<x-authenticated_layout>
    @php
        if(!$curriculums->isEmpty()){
            $created_at = $curriculums->map(function ($curriculum) {
                return collect($curriculum->toArray())
                    ->only(['created_at'])
                    ->all();
            });

            $created_at = date('Y-m-d H:i:s',strtotime(max($created_at->toArray())['created_at']));
        }
    @endphp
  <div class="container-fluid px-5">
    <div class="card border border-0 px-0 mx-0">
      <div class="card-header p-4 text-center bg-dark">
        <h5 class="card-title text-white">ALL CURRICULUMS for <a href="#" class="text-danger text-decoration-underline">
            @if(!$curriculums->isEmpty())
                {{ $curriculums[0]->courseName }}
            @endif
            </a></h5>
      </div>
      <div class="card-body shadow">
        <div class="container d-flex flex-row align-items-center justify-content-end px-0 py-2">
          <div class="modal fade modal-lg" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggle" tabindex="-1">
            <div class="modal-dialog modal-dialog-centered">
              <div class="modal-content">

                <form id="addCurriculumForm">
                    @if(!empty(Request::get('id')))
                        <input type="hidden" name='course' value="{{ Request::get('id') }}" />
                    @endif
                <div class="modal-header bg-dark ps-5">
                  <h1 class="modal-title fs-5 text-white" id="exampleModalToggleLabel2">Add Curriculum</h1>
                  <button type="button" class="btn-close" data-coreui-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body px-5">

                    <div class="mb-3">
                      <label for="curriculumName" class="col-form-label">Curriculum Name</label>
                      <input type="text" class="form-control" name="curriculumName" id="curriculumName", placeholder="Enter Curriculum Name">
                    </div>
                </div>
                <div class="modal-footer px-5">
                    <button class="text-decoration-none btn btn-info text-white">Submit</button>
                </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <div class="d-flex align-items-center justify-content-end mb-4">
          <button class="btn btn-success text-white" data-coreui-target="#exampleModalToggle" data-coreui-toggle="modal">
            <span class="text-white">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-lg" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M8 2a.5.5 0 0 1 .5.5v5h5a.5.5 0 0 1 0 1h-5v5a.5.5 0 0 1-1 0v-5h-5a.5.5 0 0 1 0-1h5v-5A.5.5 0 0 1 8 2"/>
              </svg>
            </span>
            Add New
          </button>
        </div>
        <table id="exportable_table" class="table" style="width:100%;">
          <thead>
              <tr>
                  <th>Curriculum Name</th>
                  <th>First Active</th>
                  <th>Last Active</th>
                  <th>Action</th>
              </tr>
          </thead>
          <tbody>
            @forelse ($curriculums as $curriculum)
                <tr class="fw-bold">
                    <td>{{ $curriculum->curriculumName }}</td>
                    <td>1997</td>
                    <td>
                        @if($created_at == $curriculum->created_at)
                            Still Active
                        @else
                            {{ $curriculum->created_at }}
                        @endif
                    </td>
                    <td>
                    <div class="dropdown">
                        <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" id="dropdownMenuButton" data-coreui-toggle="dropdown" aria-expanded="false">
                        Actions
                        </button>
                        <ul class="dropdown-menu dropdown-menu-sm" aria-labelledby="dropdownMenuButton">
                        <li class="d-flex flex-row justify-content-between">
                            <a class="dropdown-item" href="{{ route('showCurriculum') . "/?id=$curriculum->id" }}">
                            <span class="text-info">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                                <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8M1.173 8a13.133 13.133 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5c2.12 0 3.879 1.168 5.168 2.457A13.133 13.133 0 0 1 14.828 8c-.058.087-.122.183-.195.288-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5c-2.12 0-3.879-1.168-5.168-2.457A13.134 13.134 0 0 1 1.172 8z"/>
                                <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5M4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0"/>
                                </svg>
                            </span>
                            View
                            </a>
                        </li>
                        {{-- <li class="d-flex flex-row justify-content-between">
                            <a class="dropdown-item editCurBtn" data-curname="{{ $curriculum->curriculumName }}" data-curid="{{ $curriculum->id }}" href="" data-coreui-toggle="modal" data-coreui-target="#editCurriculumModal">
                            <span class="text-info">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                                <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5z"/>
                                </svg>
                            </span>
                            Edit
                            </a>
                        </li> --}}
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
                  <h1 class="modal-title fs-5 text-white" id="editCurriculumModalLabel"></h1>
                  <button type="button" class="btn-close" data-coreui-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body px-5">
                  <form id="curriculumNameForm">
                    <input type='hidden' name='id' value="" id="curriculumNameID" />
                    <div class="mb-3">
                      <label for="curriculum-name" class="col-form-label">Curriculum Name</label>
                      <input type="text" class="form-control" id="curriculumNameInput" name="curriculumName" placeholder="Enter Curriculum Name" value="">
                    </div>
                  </form>
                </div>
                <div class="modal-footer px-5">
                  <button type="button" class="btn btn-secondary" data-coreui-dismiss="modal">Cancel</button>
                  <button type="button" class="btn btn-info text-white" id="saveCurriculumName" data-coreui-target="#curriculumDialog" data-coreui-toggle="modal" >Save changes</button>
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

