@extends('layouts.app')

@section('content')
        <div class="col-md-6">
          <div class="mess-all">
            <p class="fa fa-home text-info">  Add Frequently Each & Every Member.</p>
          </div>
            <div class="panel well">
                <div class="panel-heading">
                  <p class="fa fa-check-square">  Add Mess Member</p>
                  <a href="{{ route('member.index') }}" class="pull-right btn btn-primary">  All Mess Member</a>
                </div>
                <div class="panel-body">
                    <form method="POST" action="{{ route('member.store') }}">
                        @csrf
                        @if(session('status'))
                          <div class="alert alert-info">
                               {{ session('status') }}
                          </div>
                        @endif
                        <div class="input-group all-item">
                            <h4 class="input-group-addon">
                              <i class="glyphicon glyphicon-user"></i>
                            </h4>
                            <input id="name" type="text" class="form-control  @error('name') is-invalid @enderror" name="name" placeholder="Name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                        </div>
                        @error('name')
                            <p class="invalid-feedback text-danger" role="alert">{{ $message }}</p>
                        @enderror
                        <div class="input-group all-item">
                            <h4 class="input-group-addon">
                              <i class="fa fa-university"></i>
                            </h4>
                            <input id="university" type="text" class="form-control  @error('university') is-invalid @enderror" name="university" placeholder="University / College" value="{{ old('university') }}" required autocomplete="university" autofocus>
                        </div>
                        @error('university')
                            <p class="invalid-feedback text-danger" role="alert">{{ $message }}</p>
                        @enderror
                        <div class="input-group all-item">
                            <h4 class="input-group-addon">
                              <i class="fa fa-building-o"></i>
                            </h4>
                            <input id="department" type="text" class="form-control  @error('department') is-invalid @enderror" name="department" placeholder="Department" value="{{ old('department') }}" required autocomplete="department" autofocus>
                        </div>
                        @error('department')
                            <p class="invalid-feedback text-danger" role="alert">{{ $message }}</p>
                        @enderror

                        <div class="input-group all-item">
                          <h4 class="input-group-addon">
                            <i class="fa fa-envelope"></i>
                          </h4>
                          <input id="email" type="text" class="form-control  @error('email') is-invalid @enderror" name="email" placeholder="Email " value="{{ old('email') }}" required autocomplete="email">
                        </div>
                        @error('email')
                            <p class="invalid-feedback text-danger" role="alert">{{ $message }}</p>
                        @enderror
                        <div class="input-group all-item">
                            <h4 class="input-group-addon">
                              <i class="glyphicon glyphicon-phone"></i>
                            </h4>
                            <input id="phone" type="text" class="form-control  @error('phone') is-invalid @enderror" name="phone" placeholder="Phone" value="{{ old('phone') }}" required autocomplete="phone" autofocus>
                        </div>
                        @error('phone')
                            <p class="invalid-feedback text-danger" role="alert">{{ $message }}</p>
                        @enderror
                        <div class="input-group all-item">
                            <h4 class="input-group-addon">
                              <i class="fa fa-child"></i>
                            </h4>
                            <input id="password" type="password" class="form-control  @error('password') is-invalid @enderror" name="password" placeholder="Password" value="{{ old('password') }}" required autocomplete="password" autofocus>
                        </div>
                        @error('password')
                            <p class="invalid-feedback text-danger" role="alert">{{ $message }}</p>
                        @enderror
                        <div class="input-group all-item">
                          <h4 class="input-group-addon">
                            <i class="fa fa-unlock"></i>
                          </h4>
                          <input id="password-confirm" type="password" class="form-control" name="password_confirmation" placeholder="Confirm Paassword" required autocomplete="new-password">
                        </div>

                        <div class="input-group all-item">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Add Member') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
@endsection
