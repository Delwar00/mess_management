@extends('layouts.app')

@section('content')
  <div class="col-md-10 col-sm-8" >
    <div class="mess-all">
      <p class="fa fa-home text-info">  All Rent List Monthly Wise.</p>
    </div>
      <div class="panel well">
         <div class="panel-heading ">
            <p class="fa fa-check-square">
               Total Cost of {{ $per_month_rent->created_at->format('M') }} 
               {{ $per_month_rent->created_at->format('Y') }} 
           </p>
          </div>
          <div class="panel-body">
              <!-- <div class="col-md-2"></div> -->
				<div class="col-md-8 ">
              	  <table class="table table-hover table-striped table-bordered text-center">
	              	  	<thead>
	                       <tr class="success">
	                         <td>Rent List</td>
	                         <td>:</td>
	                         <td>Rent Cost</td>
	                       </tr>
	                   </thead>
                    	<tr>
                        	<td>Rent Home</td>
                            <td>:</td>
                            <td>
                            	{{ $per_month_rent['rent_home'] }}
                            </td>
                        </tr>
                        <tr>
                        	<td>Rent Electricity</td>
                            <td>:</td>
                            <td>
                            	{{ $per_month_rent['rent_electricity'] }}
                            </td>
                        </tr>
                        <tr>
                        	<td>Rent Gas</td>
                            <td>:</td>
                            <td>
                            {{ $per_month_rent['rent_gas'] }}
                            </td>
                        </tr>
                        <tr>
                        	<td>Rent Cooker</td>
                            <td>:</td>
                            <td>
                            	{{ $per_month_rent['rent_cooker'] }}
                            </td>
                        </tr>
                        <tr>
                        	<td>Rent Cooker</td>
                            <td>:</td>
                            <td>
                            	{{ $per_month_rent['rent_extra'] }}
                            </td>
                        </tr>
                        <tr class="info">
                        	<td>Total Cost</td>
                            <td>:</td>
                            <td>
                            	{{ $per_month_rent['rent_home']+$per_month_rent['rent_electricity']+$per_month_rent['rent_gas']+$per_month_rent['rent_cooker']+$per_month_rent['rent_extra'] }}
                            </td>
                        </tr>
                        <tr class="danger">
                        	<td>Avg Cost</td>
                            <td>:</td>
                            <td>
                            	{{ ($per_month_rent['rent_home']+$per_month_rent['rent_electricity']+$per_month_rent['rent_gas']+$per_month_rent['rent_cooker']+$per_month_rent['rent_extra']) / $total_user }}
                            </td>
                        </tr>
                    </table>
              </div>
              <div class="col-md-4">
              	
              </div>
              <div class="clr"></div>
          </div>
      </div>
  </div>

@endsection