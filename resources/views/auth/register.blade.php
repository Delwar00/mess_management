@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
      <div class="col-md-2"></div>
        <div class="col-md-8 common-register">
            <div class="panel well well-register">
                <div class="panel-heading">
                  <p class="fa fa-check-square">  Complete Your Registration</p>
                </div>
                <div class="panel-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="input-group all-item">
                            <h4 class="input-group-addon">
                              <i class="glyphicon glyphicon-user"></i>
                            </h4>
                            <input id="name" type="text" class="form-control  @error('name') is-invalid @enderror" name="name" placeholder="Name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                        </div>
                        @error('name')
                            <p class="invalid-feedback text-danger" role="alert"> {{ $message }}  </p>
                        @enderror
                        <div class="input-group all-item">
                            <h4 class="input-group-addon">
                              <i class="fa fa-university"></i>
                            </h4>
                            <input id="university" type="text" class="form-control  @error('university') is-invalid @enderror" name="university" placeholder="University / College" value="{{ old('university') }}" required autocomplete="university" autofocus>
                        </div>
                        @error('university')
                            <p class="invalid-feedback text-danger" role="alert"> {{ $message }}  </p>
                        @enderror
                        <div class="input-group all-item">
                            <h4 class="input-group-addon">
                              <i class="fa fa-building-o"></i>
                            </h4>
                            <input id="department" type="text" class="form-control  @error('department') is-invalid @enderror" name="department" placeholder="Department" value="{{ old('department') }}" required autocomplete="department" autofocus>
                        </div>
                        @error('department')
                            <p class="invalid-feedback text-danger" role="alert"> {{ $message }}  </p>
                        @enderror
                        <div class="input-group all-item">
                          <h4 class="input-group-addon">
                            <i class="fa fa-envelope"></i>
                          </h4>
                          <input id="email" type="text" class="form-control  @error('email') is-invalid @enderror" name="email" placeholder="Email " value="{{ old('email') }}" required autocomplete="email">
                        </div>
                        @error('email')
                            <p class="invalid-feedback text-danger" role="alert"> {{ $message }}  </p>
                        @enderror
                        <div class="input-group all-item">
                            <h4 class="input-group-addon">
                              <i class="glyphicon glyphicon-phone"></i>
                            </h4>
                            <input id="phone" type="text" class="form-control  @error('phone') is-invalid @enderror" name="phone" placeholder="Phone" value="{{ old('phone') }}" required autocomplete="phone" autofocus>
                        </div>
                        @error('phone')
                            <p class="invalid-feedback text-danger" role="alert"> {{ $message }}  </p>
                        @enderror
                        <div class="input-group all-item">
                          <h4 class="input-group-addon">
                            <i class="fa fa-lock"></i>
                          </h4>
                          <input id="password" type="password" class="form-control  @error('password') is-invalid @enderror" name="password" placeholder="Paassword" required autocomplete="new-password">
                        </div>
                        @error('password')
                            <p class="invalid-feedback text-danger" role="alert"> {{ $message }}  </p>
                        @enderror
                        <div class="input-group all-item">
                          <h4 class="input-group-addon">
                            <i class="fa fa-unlock"></i>
                          </h4>
                          <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirm Paassword" required autocomplete="new-password">
                        </div>
                        <div class="input-group all-item">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Register') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-2"></div>
    </div>
</div>
@endsection
