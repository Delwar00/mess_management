@extends('layouts.app')

@section('content')
  <div class="col-md-10 col-sm-8" >
    <div class="mess-all">
      <p class="fa fa-home text-info">  All Mess Member Meal List.</p>
    </div>
      <div class="panel well">
         <div class="panel-heading ">
            <p class="fa fa-check-square">   All Meal List</p>
            <a href="{{ route('meal.create') }}" class="pull-right btn btn-primary">  Add Meal Number</a>
          </div>
          <div class="panel-body">
              <div class="table-responsive">
                <table id="example" class="table table-striped table-bordered update-table">
                   <thead>
                       <tr>
                         <th>#ID</th>
                         <th>Name</th>
                         <th>Added By</th>
                         <th>Meal No.</th>
                         <th>Date</th>
                         <th>Action</th>
                       </tr>
                   </thead>
                   <tbody>
                       @foreach ($all_meal as $user)
                         <tr>
                             <td>{{ $user->user_id }}</td>
                             <td>{{ $user->name }}</td>
                             <td>
                             	@if($user->getUserInfo->name)
									               <a class="btn btn-primary" href="">Manager</a>
                             	@endif
                             </td>
                             <td>{{ $user->meal_number }}</td>
                             <td>
                              <a href="" class="btn btn-danger">
                                {{$user->created_at->format('D')}} ||
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
