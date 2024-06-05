@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Employee</h1>
    <form action="{{ route('employees.update', $employee) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $employee->name }}">
        </div>
        <div class="form-group">
            <label for="position">Position</label>
            <input type="text" class="form-control" id="position" name="position" value="{{ $employee->position }}">
        </div>
        <div class="form-group">
            <label for="department_id">Department</label>
            <select class="form-control" id="department_id" name="department_id">
                @foreach($departments as $department)
                    <option value="{{ $department->id }}" @if($employee->department_id == $department->id) selected @endif>{{ $department->name }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>
@endsection
