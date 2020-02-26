@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-3"></div>
        <div class="col-md-6 common">
            <div class="panel well">
                <div class="panel-heading">
                  <i class="fa fa-check-square"></i>
                  <strong>  Home Page</strong>
                </div>
                <div class="panel-body">
                  @if (Route::has('login'))
                      <div>
                          @auth
                              <a href="{{ url('/home') }}">Home</a>
                          @else
                              <a class="btn btn-primary" href="{{ route('login') }}">Login</a>

                              @if (Route::has('register'))
                                  <a class="btn btn-primary" href="{{ route('register') }}">Register</a>
                              @endif
                          @endauth
                      </div>
                  @endif
                </div>
            </div>
        </div>
        <div class="col-md-3"></div>
    </div>
</div>
@endsection
