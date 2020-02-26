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
                  <a href="{{ route('store.index') }}" class="pull-right btn btn-primary">  All Mess Member</a>
                </div>
                <div class="panel-body">
                    <form method="POST" action="{{ route('store.update',[$store_update->id]) }}">
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
                            <select id="name" name="name" class="form-control">
                                <option value="">--Select Name--</option>
                                <option value="{{ $store_update->user_id }}">{{ $store_update->name }}</option>
                            </select>
                        </div>
                        @error('name')
                            <p class="invalid-feedback text-danger" role="alert">{{ $message }}</p>
                        @enderror
                        <div class="input-group all-item">
                            <h4 class="input-group-addon">
                              <i class="fa fa-university"></i>
                            </h4>
                            <input id="add_amount" type="text" class="form-control  @error('add_amount') is-invalid @enderror" name="add_amount" placeholder="Add Amount of Money" value="{{ $store_update->add_amount }}" required autocomplete="add_amount" autofocus>
                        </div>
                        @error('add_amount')
                            <p class="invalid-feedback text-danger" role="alert">{{ $message }}</p>
                        @enderror
                        <div class="input-group all-item">
                            <button type="submit" class="btn btn-primary">
                                {{ __('Update Money') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
@endsection
