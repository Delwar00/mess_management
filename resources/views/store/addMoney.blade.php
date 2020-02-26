@extends('layouts.app')

@section('content')
        <div class="col-md-6">
          <div class="mess-all">
            <p class="fa fa-home text-info">  Store Money For Your Meal Cost.</p>
          </div>
            <div class="panel well">
                <div class="panel-heading">
                  <p class="fa fa-check-square">  Store Money For Meal Cost</p>
                  <a href="{{ route('store.index') }}" class="pull-right btn btn-primary">  All Store List</a>
                </div>
                <div class="panel-body">
                    <form method="POST" action="{{ route('store.store') }}">
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
                            <input id="add_amount" type="text" class="form-control  @error('add_amount') is-invalid @enderror" name="add_amount" placeholder="Add Amount of Money" value="{{ old('add_amount') }}" required autocomplete="add_amount" autofocus>
                        </div>
                        @error('add_amount')
                            <p class="invalid-feedback text-danger" role="alert">{{ $message }}</p>
                        @enderror
                        <div class="input-group all-item">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Add Money') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
@endsection
