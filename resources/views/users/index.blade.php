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
                <form method="GET" action="{{ route('users.index') }}">
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
            <a href="{{ route('users.create')}}" class="float-right btn btn-success">New User</a>
        </div>
    </div>
    <div class="card-body">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#UserId</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Handle</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($users as $key => $user)
                <tr>
                    <th scope="row">{{$key+1}}</th>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td>{{isset($user->departments->first()->name) ? $user->departments->first()->name : ""}}</td>
                    <td>
                        <a class="btn btn-success" href="{{ route('users.edit' ,$user->id) }}">Edit</a>
                        <a class="btn btn-primary" href="{{ route('users.show' ,$user->id) }}">Show</a>
                        @if (Auth::user()->id != $user->id)
                        <form action="{{ route('users.destroy', $user->id) }}" method="POST" onsubmit="return confirm('Are you want to delete this user ?');">
                            {{ method_field('DELETE') }}
                            {{ csrf_field() }}
                            <button class="btn btn-danger" type="submit">Delete</button>
                        </form>
                        @endif
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>


@endsection