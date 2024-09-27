@extends('layouts.layout')
@section('title', 'Index')

@section('content')
<div class="container">
    <h2>Edit {{$employee->name}}'s dat</h2>
    <form action="/edited/{{$employee->id}}" class="form" method="POST">
        @csrf
        <label class="form-label">Employee's Name</label>
        <input type="text" class="form-control" name="name" value="{{$employee->name}}">
        <label class="form-label">Employee's E-mail</label>
        <input type="email" class="form-control" name="email" value="{{$employee->email}}">
        <label class="form-label">Employee's Salary</label>
        <input type="text" class="form-control" name="salary" value="{{$employee->salary}}">
        <label class="form-label">Employee's Position</label>
        <input type="text" class="form-control" name="position" value="{{$employee->position}}">
        <br>
        <input type="submit" value="Edit" class="btn btn-primary">
        @method("PUT")
    </form>
</div>
@endsection
