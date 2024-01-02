@extends('app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
    <a href="{{ route('addEmployee') }}"><button>Add Employee</button></a>
    <table>
        <thead>
            <th>Employee ID</th>
            <th>Email</th>
            <th>Role</th>
            <th>Full Name</th>
            <th>Action</th>
        </thead>
        <tbody>
            @forelse ($employees as $employee)
                <tr>
                    <td>{{ $employee->employeeID }}</td>
                    <td>{{ $employee->email }}</td>
                    <td>{{ $employee->name }}</td>
                    <td>{{ "$employee->lastName, $employee->firstName" }}</td>
                    <td>
                        <a href="/editEmployee?id={{ $employee->id }}"><button class='editEmployeeBtn' data-id="{">Edit</button></a>
                        <button class='deleteEmployeeBtn' data-id="{{ $employee->id }}">Delete</button>
                    </td>
                </tr>
            @empty
                <p>No List of Employees</p>
            @endforelse
        </tbody>
    </table>
@endsection
