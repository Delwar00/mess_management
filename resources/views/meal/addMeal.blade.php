@extends('layouts.app')

@section('content')
        <div class="col-md-6">
          <div class="mess-all">
            <p class="fa fa-home text-info">  Store Meal Every Member.</p>
          </div>
            <div class="panel well">
                <div class="panel-heading">
                  <p class="fa fa-check-square">  Add Meal</p>
                  <a href="{{ route('meal.index') }}" class="pull-right btn btn-primary">  All Meal List</a>
                </div>
                <div class="panel-body">
                    <form method="POST" action="{{ route('meal.store') }}">
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
                            <input id="meal_number" type="text" class="form-control  @error('meal_number') is-invalid @enderror" name="meal_number" placeholder="Add Number of Meal" value="{{ old('meal_number') }}" required autocomplete="meal_number" autofocus>
                        </div>
                        @error('meal_number')
                            <p class="invalid-feedback text-danger" role="alert">{{ $message }}</p>
                        @enderror
                        <div class="input-group all-item">
                            <h4 class="input-group-addon">
                              <i class="fa fa-calendar"></i>
                            </h4>
                            <input id="meal_date" type="date" class="form-control  @error('meal_date') is-invalid @enderror" name="meal_date" value="{{ old('meal_date') }}" required autocomplete="meal_date" autofocus>
                        </div>
                        @error('meal_date')
                            <p class="invalid-feedback text-danger" role="alert">{{ $message }}</p>
                        @enderror
                        <div class="input-group all-item">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Add Meal') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
@endsection
