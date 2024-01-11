<x-admin_layout>
@php
    $data = [];
    if(isset($info['data'])){
        $data = $info['data'];
    }
@endphp
<!-- Modal -->
<div class="modal fade" id="employeeModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body">
        <h5>Reminder</h5>
        <p>
          "Employee created succesfully"
        </p>
        <div class="text-end">
          <button type="button" class="btn btn-info btn-sm px-3" data-coreui-dismiss="modal">Ok</button>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="container-lg px-3">
  <h3>{{ $info['title']}}</h3>
  <div>
    <form id="employeeForm">
        @if(!empty($data))
            <input type='hidden' value="{{ $data->id }}" name='id' />
        @endif
      <div class="row gx-0">
        <div class="col-12 col-md-4 p-1">
          <label for="employee_id">Employee ID<span class="text-danger">*</span></label>
          <input type="text" name="employeeID" class="form-control form-control-sm"
            @if(!empty($data))
                value="{{ $data->employeeID }}"
            @endif
          />
        </div>
        <div class="col-12 col-md-4 p-1">
          <label for="role">Role<span class="text-danger">*</span></label>
          <select name="roleCode" class="form-select form-select-sm py-1">
            <option value="registrar"
                @if (!empty($data) && $data->roleCode === 'registrar')
                    selected
                @endif
            >Registrar</option>

            <option value="saso"
                @if (!empty($data) && $data->roleCode === 'saso')
                    selected
                @endif
            >SASO</option>

            <option value="in-charge"
                @if (!empty($data) && $data->roleCode === 'in-charge')
                    selected
                @endif
            >In-Charge</option>
            <option value="department-head"
                @if (!empty($data) && $data->roleCode === 'department-head')
                    selected
                @endif
            >Department Head</option>
          </select>
        </div>
        {{-- <div class="col-12 col-md-4 p-1">
          <label for="designation">Designation</label>
          <select name="designation" class="form-select form-select-sm py-1">
            <option hidden>---</option>
          </select>
        </div> --}}
      </div>
      <div class="row gx-0">
        <div class="col-12 col-md-6 p-1">
          <label>Last Name</label>
          <input type="text" class="form-control form-control-sm" name="lastName"
            @if(!empty($data))
                value="{{ $data->lastName }}"
            @endisset
          />
        </div>
        <div class="col-12 col-md-6 p-1">
          <label>First Name</label>
          <input type="text" class="form-control form-control-sm" name="firstName"
            @if(!empty($data))
                value="{{ $data->firstName }}"
            @endisset
          />
        </div>
        <div class="col-12 col-md-6 p-1">
          <label>Middle Name</label>
          <input type="text" class="form-control form-control-sm" name="middleName"
            @if(!empty($data))
                value="{{ $data->middleName }}"
            @endisset
          />
        </div>
        <div class="col-12 col-md-6 p-1">
          <label>Suffix</label>
          <input type="text" class="form-control form-control-sm" name="suffix"
            @if(!empty($data))
                value="{{ $data->suffix }}"
            @endisset
          />
        </div>
        <div class="col-12 col-md-6 p-1">
          <label>Email</label>
          <input type="email" class="form-control form-control-sm" name="email"
            @if(!empty($data))
                value="{{ $data->email }}"
            @endisset
          />
        </div>
        <div class="col-12 col-md-6 p-1">
          <label>Password</label>
          <input type="password" class="form-control form-control-sm" name="password"/>
        </div>
      </div>
      <div class="d-flex justify-content-end gap-1 m-2">
        <button class="btn btn-info btn-sm">{{ $info['button'] }}</button>
        <button class="btn btn-secondary btn-sm">Cancel</button>
      </div>
    </form>
  </div>
</div>

</x-admin_layout>
