@extends('layouts.layout')
@section('title', 'Index')

@section('content')
    <div class="container">
        <h1 class="text-center p-2">Employee managment system</h1>
        {{-- @if ($success)
        <div class="alter alter-success">{{$success}}</div>
        @endif --}}
        <table class="table table-bordered">
            <thead>
                <th>ID</th>
                <th>Employee name</th>
                <th>Employee E-mail</th>
                <th>Employee position</th>
                <th>Employee salary</th>
                <th>Action</th>
            </thead>
            <tbody>
                @foreach ($employees as $employee)
                    <tr>
                        <td>{{ $employee->id }}</td>
                        <td>{{ $employee->name }}</td>
                        <td>{{ $employee->email }}</td>
                        <td>{{ $employee->position }}</td>
                        <td>{{ $employee->salary }} EGP</td>
                        <td>
                            <form method="POST" action="/delete/{{$employee->id}}" class="d-inline">
                                @csrf
                                <button type="submit" class="signup">Delete</button>
                                @method('DELETE')
                            </form>
                            <a href="/edit/{{$employee->id}}"><button class="login">Edit</button></a>
                        </td>
                    </tr>
                @endforeach
                <tr><td colspan="5">Go to <a href="/archive"><button class="signup">Archive</button></a> </td></tr>
            </tbody>
        </table>
        <h2>Add Employee</h2>
        <form action="/store" class="form" method="POST">
            @csrf
            <label class="form-label">Employee Name</label>
            <input type="text" class="form-control" name="name">
            <label class="form-label">Employee E-mail</label>
            <input type="email" class="form-control" name="email">
            <label class="form-label">Employee Postion</label>
            <input type="text" class="form-control" name="position">
            <label class="form-label">Employee Salary</label>
            <input type="text" class="form-control" name="salary">
            <br>
            <input type="submit" value="Add" class="login">
        </form>
    </div>
@endsection
