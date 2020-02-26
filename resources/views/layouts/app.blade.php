<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link href="{{ asset('/adminContent') }}/css/bootstrap.min.css" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="{{ asset('/adminContent') }}/css/dataTables.bootstrap.min.css"/>
    <link type="text/css" rel="stylesheet" href="{{ asset('/adminContent') }}/css/font-awesome.min.css"/>
    <link type="text/css" rel="stylesheet" href="{{ asset('/adminContent') }}/css/style.css"/>
  </head>
  <body>
    <div class="container-fluid">
        	<div class="row">
            @auth
            <div class="col-md-2 col-sm-4 well ">
                {{-- <div class="image-area text-center">
                  <img class="img-circle" src="{{ asset('/adminContent') }}/images/avatar.png" alt="avatar">
                  <h4>Admin <span class="dot"></span></h4>
                </div>
                <hr> --}}
                <h3>Main Navigation</h3>
                <hr>
                <div class="menu-area">
                    <ul>
                      <li ><i class="fa fa-home"></i><a href="">  Dashboard</a></li>
                      <li><i class="fa fa-image"></i><a href="{{ route('member.create') }}">  Add Member</a></li>
                      <li><i class="fa fa-group"></i><a href="{{ route('member.index') }}">  All Member</a></li>
                      <li><i class="fa fa-bar-chart"></i><a href="{{ route('store.create') }}">  Add Amount</a></li>
                      <li><i class="fa fa-bar-chart"></i><a href="{{ route('store.index') }}">  All Store Amount</a></li>
                      <li><i class="fa fa-group"></i><a href="{{ route('bazar.create') }}">  Add Bazar</a></li>
                      <li><i class="fa fa-group"></i><a href="{{ route('bazar.index') }}">   Bazar List</a></li>
                      <li><i class="fa fa-group"></i><a href="{{ route('meal.create') }}">   Add Meal</a></li>
                      <li><i class="fa fa-group"></i><a href="{{ route('meal.index') }}">   All Meal List</a></li>
                      <li><i class="fa fa-bank"></i><a href="{{ route('rent.create') }}">  Add Rent</a></li>
                      <li><i class="fa fa-bank"></i><a href="{{ route('rent.index') }}">  Rent List</a></li>
                     <!--  <li>
                        <a data-toggle="collapse" href="#collapse1"><i class="fa fa-bar-chart"></i>  Result</a>
                        <div id="collapse1" class="panel-collapse collapse">
                          <ul>
                            <li><i class="fa fa-bank"></i><a href="">  Add Bazar</a></li>
                            <li><i class="fa fa-image"></i><a href="">  Leave</a></li>
                            <li><i class="fa fa-cubes"></i><a href="">  Expense</a></li>
                          </ul>
                        </div>
                      </li> -->
                    </ul>
                </div>
            </div>
            <div class="standard ">
                <div class="header well">
                  <p class="fa fa-bars">
                    Attendance System
                  </p>
                <div class="dropdown pull-right">
                  <i class="fa fa-bell"><sup>10</sup></i>
                    <a class="dropdown-toggle" data-toggle="dropdown">  {{ Auth::user()->name }}
                    <p class="caret"></p></a>
                    <ul class="dropdown-menu">
                      <li><a href="#">Setting</a></li>
                      <li><a href="#">
                        <div  aria-labelledby="navbarDropdown">
                            <a  href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" class="logout-form" action="{{ route('logout') }}" method="POST" >
                                @csrf
                            </form>
                        </div>
                      </a></li>
                    </ul>
                 </div>
               </div>
            </div>
            @endauth
              <main class="outer">
                  @yield('content')
              </main>
            @auth
            </div>
          </div>
      </div>
    @endauth
    <script src="{{ asset('/adminContent') }}/js/jquery-3.3.1.js"></script>
    <script src="{{ asset('/adminContent') }}/js/bootstrap.min.js"></script>
    <script src="{{ asset('/adminContent') }}/js/jquery.dataTables.min.js"></script>
    <script src="{{ asset('/adminContent') }}/js/dataTables.bootstrap.min.js"></script>
    <script src="{{ asset('/adminContent') }}/js/custom.js"></script>
    @yield('footer_scripts')
  </body>
</html>
