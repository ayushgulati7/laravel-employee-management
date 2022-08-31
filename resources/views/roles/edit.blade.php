@extends('layouts.main')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Update User') }}
                    <a href="{{ route('roles.index')}}" class="float-right btn btn-danger">Back</a>
                </div>


                <div class="card-body">
                    <form method="POST" action="{{ route('roles.update',$role->id) }}">
                        @csrf
                        @method('PUT')
                        <div class="row mb-3">
                            <label for="name" class="col-form-label">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name', $role->name) }}" required autocomplete="name" autofocus>

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row">

                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Permission:</strong>
                                    <br />
                                    @foreach($permission as $value)
                                       
                                    <input type="checkbox" id="{{$value->id}}" name="{{$role->name}}" value="{{$value->id}}" <?php echo (in_array($value->id,$rolePermissions)) ? "checked" : ""; ?>>
                                    <label>{{ $value->name}}</label><br>
                                    @endforeach
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Submit') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection