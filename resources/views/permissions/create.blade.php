@extends('layouts.main')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Create Permission') }}
                <a href="{{ route('roles.create')}}" class="float-right btn btn-danger">Back</a>
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('permissions.store') }}">
                        @csrf
                        <div class="row mb-3">
                            <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="permission" class="col-md-4 col-form-label text-md-end">{{ __('Permissions') }}</label>

                            <div class="row">

                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <input type="checkbox" name="permission[]" value="create">
                                        <label>create</label><br>
                                        <input type="checkbox" name="permission[]" value="edit">
                                        <label>edit</label><br>
                                        <input type="checkbox" name="permission[]" value="show">
                                        <label>show</label><br>
                                        <input type="checkbox" name="permission[]" value="delete">
                                        <label>delete</label><br>
                                    </div>
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

</script>
