@extends('app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
    <form id="addDepartmentForm">
        @isset($department)
            <input type='hidden' value="{{ $department->id }}" name='id' />
        @endisset

        <label>File</label>
        <input type="file" name="file"
            @isset($department)
                value="{{ $department->departmentFile }}"
            @endisset
        />
        <label>Department Name</label>
        <input type="text" name="departmentName"
            @isset($department)
                value="{{ $department->departmentName }}"
            @endisset
        />
        <br><br>

        <label>Department Head</label>
        <input type="text" name="departmentHead"
            @isset($department)
                value="{{ $department->departmentHead }}"
            @endisset
        />
        <label>Email</label>
        <input type="text" name="email"
            @isset($department)
                value="{{ $department->email }}"
            @endisset
        />

        <button>Add Department</button>
    </form>
@endsection
