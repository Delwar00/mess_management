@extends('layouts.app')

@section('content')
  <div class="col-md-10 col-sm-8" >
    <div class="mess-all">
      <p class="fa fa-home text-info">  All Rent List Monthly Wise.</p>
    </div>
      <div class="panel well">
         <div class="panel-heading ">
            <p class="fa fa-check-square">   All Rent</p>
            <a href="{{ route('rent.create') }}" class="pull-right btn btn-primary">  Add Rent</a>
          </div>
          <div class="panel-body">
              <div class="table-responsive">
                <table id="example" class="table table-striped table-bordered update-table">
                   <thead>
                       <tr>
                         <th>#ID</th>
                         <th>Added By</th>
                         <th>Rent Home</th>
                         <th>Rent Electricity</th>
                         <th>Rent Gas</th>
                         <th>Rent Cooker</th>
                         <th>Rent Extra</th>
                         <th>Date</th>
                         <th>Action</th>
                       </tr>
                   </thead>
                   <tbody>
                       @foreach ($all_rent as $user)
                         <tr>
                             <td>{{ $user->user_id }}</td>
                             <td>{{ $user->getUserInfo->name }}</td>
                             <td>{{ $user->rent_home }}</td>
                             <td>{{ $user->rent_electricity }}</td>
                             <td>{{ $user->rent_gas }}</td>
                             <td>{{ $user->rent_cooker }}</td>
                             <td>{{ $user->rent_extra }}</td>
                             <td>
                             	<a href="" class="btn btn-danger">
	                                {{$user->created_at->format('M')}} ||
	                                {{$user->created_at->format('Y')}}
                								</a>
                							 </td>
                							<td>
	                            <ul>
	                              <li>
	                                 <a href="" class="fa fa-edit"></a>
	                              </li>
	                              <li>
	                                 <a href="{{ route('rent.show',[$user->id]) }}" class="fa fa-calculator"></a>
	                              </li>
	                              <li>
	                                 <a href="" class="fa fa-trash-o"></a>
	                              </li>
	                            </ul>
                          	</td>
                         </tr>
                       @endforeach
                   </tbody>
               </table>
              </div>
            </div>
      </div>
  </div>
@endsection
@section('footer_scripts')
  <script>
      $(document).ready(function() {
          $('#example').DataTable();
      } );
</script>
@endsection
