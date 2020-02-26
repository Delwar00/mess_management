@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
      <div class="col-md-3"></div>
        <div class="col-md-6 common">
            <div class="panel well">
                <div class="panel-heading">
                  <i class="fa fa-check-square"></i>
                  <strong>  Login</strong>
                </div>
                <div class="panel-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="input-group all-item">
                          <span class="input-group-addon">
                            <i class="fa fa-envelope"></i>
                          </span>
                          <input id="email" type="email" placeholder="Email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        </div>
                        @error('email')
                              <p class="invalid-feedback text-danger" role="alert">{{ $message }}</p>
                        @enderror
                        <div class="input-group all-item">
                            <span class="input-group-addon">
                              <i class="fa fa-lock"></i>
                            </span>
                            <input id="password" placeholder="Password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                        </div>
                          @error('password')
                              <p class="invalid-feedback text-danger" role="alert">{{ $message }}</p>
                          @enderror

                        {{-- <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div> --}}
                        <div class="input-group all-item">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Login') }}
                            </button> ||
                            <a class="btn btn-primary" href="#">{{ __('Google +') }}</a> ||
                            @if (Route::has('password.request'))
                                <a class="btn btn-primary" href="{{ route('password.request') }}">
                                    {{ __('Forgot Password?') }}
                                </a>
                            @endif
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-3"></div>
    </div>
</div>
@endsection
