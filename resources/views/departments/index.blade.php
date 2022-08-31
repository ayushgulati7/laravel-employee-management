@extends('layouts.main')

@section('content')
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Departments</h1>
</div>

<div class="card">
    <div class="card-header">
        <div class="row">
            <div class="col">
                <form method="GET" action="{{ route('departments.index') }}">
                    <div class="form-row align-items-center">
                        <div class="col-sm-3 my-1">
                            <input type="search" name="search" class="form-control" id="inlineFormInputName" placeholder="Jane Doe">
                        </div>
                        <div class="col-auto my-1">
                            <button type="submit" class="btn btn-primary">Search</button>
                        </div>
                    </div>
                </form>
            </div>
            <a href="{{ route('departments.create')}}" class="float-right btn btn-success">New Department</a>
        </div>
    </div>
    <div class="card-body">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#DptId</th>
                    <th scope="col">Name</th>
                    <th scope="col">Description</th>
                    <th scope="col">Handle</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($departments as $department)
                <tr>
                    <th scope="row">{{$department->id}}</th>
                    <td>{{$department->name}}</td>
                    <td>{{$department->description}}</td>
                    <td>
                        <a class="btn btn-success" href="{{ route('departments.edit' ,$department->id) }}">Edit</a>
                        <a class="btn btn-primary" href="{{ route('departments.show' ,$department->id) }}">Show</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>


@endsection