@extends('layouts.app')

@section('content')
        <div class="col-md-6">
          <div class="mess-all">
            <p class="fa fa-home text-info">  Rent per Month wise Added.</p>
          </div>
            <div class="panel well">
                <div class="panel-heading">
                  <p class="fa fa-check-square">  Add Rent</p>
                  <a href="{{ route('rent.index') }}" class="pull-right btn btn-primary">  All Rent List</a>
                </div>
                <div class="panel-body">
                    <form method="POST" action="{{ route('rent.store') }}">
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
                            <select id="name" name="name" class="form-control">
                                <option value="">--Select Name--</option>
                                @forelse ($user_info as $user)
                                    <option value="{{ $user->id }}">{{ $user->name }}</option>
                                @empty

                                @endforelse
                            </select>
                        </div>
                        @error('name')
                            <p class="invalid-feedback text-danger" role="alert">{{ $message }}</p>
                        @enderror
                        <div class="input-group all-item">
                            <h4 class="input-group-addon">
                              <i class="fa fa-university"></i>
                            </h4>
                            <input id="rent_home" type="text" class="form-control  @error('rent_home') is-invalid @enderror" name="rent_home" placeholder="Home Rent" value="{{ old('rent_home') }}" required autocomplete="rent_home" autofocus>
                        </div>
                        @error('rent_home')
                            <p class="invalid-feedback text-danger" role="alert">{{ $message }}</p>
                        @enderror
                       <div class="input-group all-item">
                            <h4 class="input-group-addon">
                              <i class="fa fa-university"></i>
                            </h4>
                            <input id="rent_electricity" type="text" class="form-control  @error('rent_electricity') is-invalid @enderror" name="rent_electricity" placeholder="Electricity Rent" value="{{ old('rent_electricity') }}" required autocomplete="rent_electricity" autofocus>
                        </div>
                        @error('rent_electricity')
                            <p class="invalid-feedback text-danger" role="alert">{{ $message }}</p>
                        @enderror
                        <div class="input-group all-item">
                            <h4 class="input-group-addon">
                              <i class="fa fa-university"></i>
                            </h4>
                            <input id="rent_gas" type="text" class="form-control  @error('rent_gas') is-invalid @enderror" name="rent_gas" placeholder="Gas Rent" value="{{ old('rent_gas') }}" required autocomplete="rent_gas" autofocus>
                        </div>
                        @error('rent_gas')
                            <p class="invalid-feedback text-danger" role="alert">{{ $message }}</p>
                        @enderror
                        <div class="input-group all-item">
                            <h4 class="input-group-addon">
                              <i class="fa fa-university"></i>
                            </h4>
                            <input id="rent_cooker" type="text" class="form-control  @error('rent_cooker') is-invalid @enderror" name="rent_cooker" placeholder="Cooker Rent" value="{{ old('rent_cooker') }}" required autocomplete="rent_cooker" autofocus>
                        </div>
                        @error('rent_cooker')
                            <p class="invalid-feedback text-danger" role="alert">{{ $message }}</p>
                        @enderror
                        <div class="input-group all-item">
                            <h4 class="input-group-addon">
                              <i class="fa fa-university"></i>
                            </h4>
                            <input id="rent_extra" type="text" class="form-control  @error('rent_extra') is-invalid @enderror" name="rent_extra" placeholder="If Extra Rent" value="{{ old('rent_extra') }}" required autocomplete="rent_extra" autofocus>
                        </div>
                        @error('rent_extra')
                            <p class="invalid-feedback text-danger" role="alert">{{ $message }}</p>
                        @enderror
                        <div class="input-group all-item">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Add Rent') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
@endsection
