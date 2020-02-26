@extends('layouts.app')

@section('content')
  <div class="col-md-10 col-sm-8" >
    <div class="mess-all">
      <p class="fa fa-home text-info">  All Mess Member Bazar List.</p>
    </div>
      <div class="panel well">
         <div class="panel-heading ">
            <p class="fa fa-check-square">   Mess Member List</p>
            <a href="{{ route('bazar.create') }}" class="pull-right btn btn-primary">  Add Bazar</a>
          </div>
          <div class="panel-body">
              <div class="table-responsive">
                <table id="example" class="table table-striped table-bordered update-table">
                   <thead>
                       <tr>
                         <th>#ID</th>
                         <th>Name</th>
                         <th>Product Name</th>
                         <th>Bazar Cost</th>
                         <th>Memo</th>
                         <th>Bazar Date</th>
                         <th>Action</th>
                       </tr>
                   </thead>
                   <tbody>
                      @foreach ($all_bazar as $user)
                         <tr>
                             <td>{{ $user->id }}</td>
                             <td>{{ $user->name }}</td>
                             <td>{{ $user->product_name }}</td>
                             <td>{{ $user->add_bazar_cost }}</td>
                             <td>Bazar Recit picture</td>
                             <td> <a href="" class="btn btn-danger">{{ $user->bazar_date }}</a></td>
                             <td>
                               <ul>
                                 <li><a href="">a</a></li>
                                 <li><a href="">a</a></li>
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
