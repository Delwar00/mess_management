@extends('layouts.app')

@section('content')
        <div class="col-md-6">
          <div class="mess-all">
            <p class="fa fa-home text-info">  Add Bazar Each & Every Member.</p>
          </div>
            <div class="panel well">
                <div class="panel-heading">
                  <p class="fa fa-check-square">  Add Bazar</p>
                  <a href="{{ route('bazar.index') }}" class="pull-right btn btn-primary">  Member Bazar Lists</a>
                </div>
                <div class="panel-body">
                    <form method="POST" action="{{ route('bazar.store') }}">
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
                              <i class="glyphicon glyphicon-user"></i>
                            </h4>
                            <textarea id="product_name" cols="30" rows="5" class="form-control  @error('product_name') is-invalid @enderror" name="product_name" placeholder="Please mention which products you buy for your Bazar" value="{{ old('product_name') }}" required autocomplete="product_name" autofocus></textarea>
                        </div>
                        @error('product_name')
                            <p class="invalid-feedback text-danger" role="alert">{{ $message }}</p>
                        @enderror
                        <div class="input-group all-item">
                            <h4 class="input-group-addon">
                              <i class="fa fa-calendar"></i>
                            </h4>
                            <input id="bazar_date" type="date" class="form-control  @error('bazar_date') is-invalid @enderror" name="bazar_date" placeholder="Mention Bazar Date" value="{{ old('bazar_date') }}" required autocomplete="bazar_date" autofocus>
                        </div>
                        @error('bazar_date')
                            <p class="invalid-feedback text-danger" role="alert">{{ $message }}</p>
                        @enderror
                        <div class="input-group all-item">
                            <h4 class="input-group-addon">
                              <i class="fa fa-university"></i>
                            </h4>
                            <input id="add_bazar_cost" type="text" class="form-control  @error('add_bazar_cost') is-invalid @enderror" name="add_bazar_cost" placeholder="Mention Bazar Cost" value="{{ old('add_bazar_cost') }}" required autocomplete="add_bazar_cost" autofocus>
                        </div>
                        @error('add_bazar_cost')
                            <p class="invalid-feedback text-danger" role="alert">{{ $message }}</p>
                        @enderror
                        <div class="input-group all-item">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Add Bazar') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
@endsection
