@extends('layouts.layout')
@section('title', 'welcome')


@section('content')
    <div class="container">
        <h1>Archive</h1>
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
                @foreach ($trashed as $employee)
                    <tr>
                        <td>{{ $employee->id }}</td>
                        <td>{{ $employee->name }}</td>
                        <td>{{ $employee->email }}</td>
                        <td>{{ $employee->position }}</td>
                        <td>{{ $employee->salary }} EGP</td>
                        <td>
                            <form method="POST" action="/forceDelete/{{ $employee->id }}" class="d-inline">
                                @csrf
                                <a data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    <button class="signup" >Permenant Delete</button>
                                </a>
                                @method('DELETE')
                            <!-- Modal -->
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                                aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel">Delete</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            Are you sure that you want to delete it?
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Close</button>
                                            <button type="submit" class="btn btn-danger">Delete!</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                            <a href="/restore/{{ $employee->id }}"><button class="restore" >Restore</button></a>
                        </td>
                    </tr>
                @endforeach
                <tr>
                    <td colspan="6">Go to <a href="/index"><button class="login">Data</button></a> </td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection
