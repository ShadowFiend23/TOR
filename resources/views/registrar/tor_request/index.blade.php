<x-registrar_layout>

    <div class="container-fluid px-3">
      <h5>List of Students</h5>
      <div>
        <table id="regular_datatable" class="table table-light" style="width:100%;">
          <thead>
              <tr>
                  <th>Avatar</th>
                  <th>Student ID</th>
                  <th>Full Name</th>
                  <th>Course</th>
                  <th>Curriculum</th>
                  <th></th>
              </tr>
          </thead>
          <tbody>
            @foreach($students as $student)
                <tr>
                    <td>
                    <div class="avatar avatar-sm">
                        <img class="avatar-img" src="{{ asset('images/avatar.png') }}">
                    </div>
                    </td>
                    <td>{{ $student->studentID }}</td>
                    <td>{{ "$student->firstName $student->lastName" }}</td>
                    <td>{{ $student->courseName }}</td>
                    <td>{{ $student->curriculumName }}</td>
                    <td>
                        <div class="dropdown">
                            <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" id="dropdownMenuButton" data-coreui-toggle="dropdown" aria-expanded="false">
                            Actions
                            </button>
                            <ul class="dropdown-menu dropdown-menu-sm" aria-labelledby="dropdownMenuButton">
                                <li class="d-flex flex-row justify-content-between">
                                    <a class="dropdown-item text-info" href="{{ route('viewTor') . "?id=$student->studentID" }}">
                                    <i class='bx bx-show' ></i>
                                    Request
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </td>
                </tr>

            @endforeach
          </tbody>
        </table>
      </div>
    </div>

    </x-registrar_layout>
