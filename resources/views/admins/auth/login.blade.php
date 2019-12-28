@extends('layouts.app')
@section('register')
<li class="nav-item">
    <a class="nav-link" href="{{ route('admin.register') }}">{{ __('Register') }}</a>
</li>
@endsection
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <div class="card shadow border-0">
                <div class="card-header">{{ __('Login') }}</div>
                <div class="card-body">
                    <div class="card-img-top d-flex justify-content-center align-items-center my-2">
                        <img class="img-fluid" src="{{asset('images/haward.png')}}"/>
                    </div>
                    <form method="POST" action="{{ route('admin.panel') }}">
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
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12 col-md-12 d-flex justify-content-center align-items-center">
                            <div class="form-group mt-3 mb-0">
                                <button type="submit" class="btn submit">
                                    {{ __('Login') }}
                                </button>
                                @if (Route::has('admin.password.reset'))
                                <a class="btn btn-link" href="{{ route('admin.password.update') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                                @endif
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
