@extends('layouts.app')

@section('content')
        <div class="col-md-6">
          <div class="mess-all">
            <p class="fa fa-home text-info">  Updated Frequently Each & Every Member.</p>
          </div>
            <div class="panel well">
                <div class="panel-heading">
                  <i class="fa fa-check-square"></i>
                  <strong>  Add Mess Member</strong>
                  <a href="{{ route('member.index') }}" class="pull-right btn btn-primary">  All Mess Member</a>
                </div>
                <div class="panel-body">
                    <form method="POST" action="{{ route('member.update',[$user_info_update->id]) }}">
                    	@method('PUT')
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
                            <input id="name" type="text" class="form-control  @error('name') is-invalid @enderror" name="name" placeholder="Name" value="{{ $user_info_update->name }}" required autocomplete="name" autofocus>
                        </div>
                        @error('name')
                            <p class="invalid-feedback text-danger" role="alert">{{ $message }}</p>
                        @enderror
                        <div class="input-group all-item">
                            <h4 class="input-group-addon">
                              <i class="fa fa-university"></i>
                            </h4>
                            <input id="university" type="text" class="form-control  @error('university') is-invalid @enderror" name="university" placeholder="University / College" value="{{ $user_info_update->university }}" required autocomplete="university" autofocus>
                        </div>
                        @error('university')
                            <p class="invalid-feedback text-danger" role="alert">{{ $message }}</p>
                        @enderror
                        <div class="input-group all-item">
                            <h4 class="input-group-addon">
                              <i class="fa fa-building-o"></i>
                            </h4>
                            <input id="department" type="text" class="form-control  @error('department') is-invalid @enderror" name="department" placeholder="Department" value="{{ $user_info_update->department }}" required autocomplete="department" autofocus>
                        </div>
                        @error('department')
                            <p class="invalid-feedback text-danger" role="alert">{{ $message }}</p>
                        @enderror

                        <div class="input-group all-item">
                          <h4 class="input-group-addon">
                            <i class="fa fa-envelope"></i>
                          </h4>
                          <input id="email" type="text" class="form-control  @error('email') is-invalid @enderror" name="email" placeholder="Email " value="{{ $user_info_update->email }}" required autocomplete="email">
                        </div>
                        @error('email')
                            <p class="invalid-feedback text-danger" role="alert">{{ $message }}</p>
                        @enderror
                        <div class="input-group all-item">
                            <h4 class="input-group-addon">
                              <i class="glyphicon glyphicon-phone"></i>
                            </h4>
                            <input id="phone" type="text" class="form-control  @error('phone') is-invalid @enderror" name="phone" placeholder="Phone" value="{{ $user_info_update->phone }}" required autocomplete="phone" autofocus>
                        </div>
                        @error('phone')
                            <p class="invalid-feedback text-danger" role="alert">{{ $message }}</p>
                        @enderror


                        <div class="input-group">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Update Member') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
@endsection
