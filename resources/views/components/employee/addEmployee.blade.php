@extends('app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
    <form id="addEmployeeForm">
        @isset($employee)
            <input type='hidden' value="{{ $employee->id }}" name='id' />
        @endisset

        <label>Employee ID</label>
        <input type="text" name="employeeID"
            @isset($employee)
                value="{{ $employee->employeeID }}"
            @endisset
        />

        @if (Request::path() === "addEmployee" || Request::path() === "editEmployee")
            <label>Role</label>
            <select name="roleCode">
                <option value="evaluator">Evaluator</option>
                <option value="depHead">Department Head</option>
                <option value="inCharge">In-Charge</option>
                <option value="registrar">Registrar</option>
                <option value="SASO">SASO</option>
            </select>

            <label>Designation</label>
            <select name="designation">

            </select>
            <br><br>
        @endif


        <label>Last Name</label>
        <input type="text" name="lastName"
            @isset($employee)
                value="{{ $employee->lastName }}"
            @endisset
        />
        <label>First Name</label>
        <input type="text" name="firstName"
            @isset($employee)
                value="{{ $employee->firstName }}"
            @endisset
        />
        <br><br>

        <label>Middle Name</label>
        <input type="text" name="middleName"
            @isset($employee)
                value="{{ $employee->middleName }}"
            @endisset
        />
        <label>Suffix</label>
        <input type="text" name="suffix"
            @isset($employee)
                value="{{ $employee->suffix }}"
            @endisset
        />
        <br><br>

        <label>Email</label>
        <input type="text" name="email"
            @isset($employee)
                value="{{ $employee->email }}"
            @endisset
        />
        <label>Password</label>
        <input type="text" name="password">

        <button>Add Employee</button>
    </form>
@endsection
