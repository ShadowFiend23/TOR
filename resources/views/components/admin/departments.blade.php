@extends('app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
    <a href="{{ route('addDepartment') }}"><button>Add Department</button></a>
    <table>
        <thead>
            <th>Department Name</th>
            <th>Department Head</th>
            <th>Action</th>
        </thead>
        <tbody>
            @forelse ($departments as $department)
                <tr>
                    <td>{{ $department->departmentName }}</td>
                    <td>{{ "$department->lastName, $department->firstName" }}</td>
                    <td>
                        <a href="/editDepartment?id={{ $department->id }}"><button class='editDepartmentBtn'>Edit</button></a>
                        <button class='deleteDepartmentBtn' data-id="{{ $department->id }}">Delete</button>
                    </td>
                </tr>
            @empty
                <p>No List of Departments</p>
            @endforelse
        </tbody>
    </table>
@endsection
