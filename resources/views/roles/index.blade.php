@extends('layouts.main')

@section('content')
<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Users</h1>
</div>

<div class="card">
    <div class="card-header">
        <div class="row">
            <div class="col">
                <form method="GET" action="{{ route('roles.index') }}">
                    <div class="form-row align-items-center">
                        <div class="col-sm-3 my-1">
                            <input type="search" name="search" class="form-control" id="inlineFormInputName" placeholder="Admin">
                        </div>
                        <div class="col-auto my-1">
                            <button type="submit" class="btn btn-primary">Search</button>
                        </div>
                    </div>
                </form>
            </div>
            <a href="{{ route('roles.create')}}" class="float-right btn btn-success">New Role</a>
        </div>
    </div>
    <div class="card-body">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#RoleId</th>
                    <th scope="col">Name</th>
                    <th scope="col">Handle</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($roles as $role)
                <tr>
                    <th scope="row">{{$role->id}}</th>
                    <td>{{$role->name}}</td>
                    <td>
                        <a class="btn btn-success" href="{{ route('roles.edit' ,$role->id) }}">Edit</a>
                        <a class="btn btn-primary" href="{{ route('roles.show' ,$role->id) }}">Show</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>


@endsection