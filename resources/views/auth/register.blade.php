@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card border-0 shadow">
                <div class="card-header">{{ __('Register') }}</div>
                <div class="card-img-top d-flex justify-content-center align-items-center my-2">
                        <img class="img-fluid" src="{{asset('images/haward.png')}}"/>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('admin.register') }}">
                        @csrf
                    <div class="row d-flex justify-content-center align-items-center">
                        <div class="col-12 col-md-9">
                            <div class="form-group">
                                <label for="username" class="col-form-label text-md-right">{{ __('User Name') }}</label>
                                <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autocomplete="off" autofocus>

                                @error('username')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row d-flex justify-content-center align-items-center">
                        <div class="col-12 col-md-9">
                            <div class="form-group">
                            <label for="password" class="col-form-label text-md-right">{{ __('Password') }}</label>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="off">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row d-flex justify-content-center align-items-center">
                        <div class="col-12 col-md-9">
                            <div class="form-group">
                                <label for="password-confirm" class="col-form-label text-md-right">{{ __('Confirm Password') }}</label>
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="off">
                            </div>
                        </div>
                    </div>
                    <div class="row d-flex justify-content-center align-items-center">
                        <div class="col-12 col-md-9">
                            <label for="role" class="col-form-label text-md-right">{{ __('User Role is') }}</label>
                            @foreach($roles as $role)
                            <div class="form-check">
                                <input id="role" type="radio" class="form-input-check" name="role" value="{{$role->id}}" required>
                                <label for="role" class="form-check-label text-md-right">{{ $role->name }}</label>
                                @error('role_id')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-md-12 d-flex justify-content-center align-items-center">
                            <div class="form-group mt-3 mb-0">
                                <button type="submit" class="btn submit">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
