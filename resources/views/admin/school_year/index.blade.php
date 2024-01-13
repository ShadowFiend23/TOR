<x-admin_layout>


<!-- Modal confirmation-->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-body">
        <h5>New School Year</h5>

        <form id="schoolYearForm">
          <div class="row gx-0">

            <div class="col-12 p-1">
              <label>Enter School Year<span class="text-danger">*</span></label>
              <div class="row">
                <div class="col-md-6">
                    <input type="number" class="form-control form-control-sm col-md-6" id="minSchoolYear" name="minYear" min="1900" max="2099" step="1" value="{{ date("Y") }}" />
                </div>
                <div class="col-md-6">
                    <input type="text" id="maxSchoolYear" class="form-control form-control-sm col-md-6" readonly value="{{ date("Y",strtotime('+1 year')) }}"/>
                </div>
              </div>
            </div>
            <div class="col-12 p-1">
              <label>Semester</label>
              <select name="semester" class="form-select form-select-sm py-1">
                <option value="1">FIRST SEMESTER</option>
                <option value="2">SECOND SEMESTER</option>
              </select>
            </div>
          </div>
          <div class="d-flex justify-content-end gap-1 m-2">
            <button class="btn btn-info btn-sm">Submit</button>
            <button type="button" class="btn btn-secondary btn-sm" data-coreui-dismiss="modal">Cancel</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- Modal success -->
<div class="modal fade" id="successModal" tabindex="-1" aria-labelledby="successModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body">
        <h5>Reminder</h5>
        <p>
          School year added succesfully!!
        </p>
        <div class="text-end">
          <button type="button" class="btn btn-info btn-sm px-3" data-coreui-dismiss="modal">Ok</button>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="container-fluid px-3">
  <h5>Academic Year</h5>
  <div>
    <div class="d-flex gap-1 align-items-center justify-content-end mb-4">
      <button class="btn btn-success btn-sm text-white" data-coreui-toggle="modal" data-coreui-target="#exampleModal">
        <i class='bx bx-plus' ></i> <span>New School Year</span>
      </button>
    </div>
    <table id="regular_datatable" class="table table-light" style="width:100%;">
      <thead>
        <tr>
          <th class="d-none"></th>
        </tr>
      </thead>
      <tbody>
        @foreach ($schoolYear as $year)
            @if($loop->last)
                <tr>
                    <td>
                        {{ "$year->minYear-$year->maxYear First Semester" }}
                        {{ $year->secondSem ? "" : "(active)" }}
                    </td>
                </tr>
                @if ($year->secondSem)
                    <tr>
                        <td>{{ "$year->minYear-$year->maxYear Second Semester" }} (active)</td>
                    </tr>
                @endif
            @else
                <tr>
                    <td>
                        {{ "$year->minYear-$year->maxYear First Semester" }}
                    </td>
                </tr>
                @if ($year->secondSem)
                    <tr>
                        <td>{{ "$year->minYear-$year->maxYear Second Semester" }}</td>
                    </tr>
                @endif
            @endif
        @endforeach
      </tbody>
    </table>
  </div>
</div>

</x-admin_layout>
