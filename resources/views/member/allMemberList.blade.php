@extends('layouts.app')

@section('content')
  <div class="col-md-10 col-sm-8" >
    <div class="mess-all">
      <p class="fa fa-home text-info">  All Efficient Mess Member List.</p>
    </div>
      <div class="panel well">
         <div class="panel-heading ">
            <p class="fa fa-check-square">   Mess Member List</p>
            <a href="{{ route('member.create') }}" class="pull-right btn btn-primary">  Add Mess Member</a>
          </div>
          <div class="panel-body">
              <div class="table-responsive">
                <table id="example" class="table table-striped table-bordered update-table">
                   <thead>
                       <tr>
                         <th>#ID</th>
                         <th>Name</th>
                         <th>University</th>
                         <th>Department</th>
                         <th>Email</th>
                         <th>Contact</th>
                         <th>Role</th>
                         <th>Action</th>
                       </tr>
                   </thead>
                   <tbody>
                       @foreach ($user_data as $user)
                         <tr>
                             <td>{{ $user->id }}</td>
                             <td>{{ $user->name }}</td>
                             <td>{{ $user->university }}</td>
                             <td>{{ $user->department }}</td>
                             <td>{{ $user->email }}</td>
                             <td>{{ $user->phone }}</td>
                             <td>
                                @if($user->status==1)
                                    <p class="btn btn-primary">Member</p>
                                @else
                                     <p class="btn btn-danger">Manager</p>
                                @endif
                             </td>
                             <td>
                               <ul>
                                 <li>
                                   @if($user->status==1)
                                     <a href="{{ url('/member/active') }}/{{ $user->id }}" class="fa fa-toggle-on"></a>
                                   @else
                                     <a href="" class="fa fa-remove text-danger"></a>
                                   @endif
                                 </li>
                                 <li>
                                    <a href="{{ route('member.edit',[$user->id]) }}" class="text-danger fa fa-edit"></a>
                                 </li>
                                 <li>
                                   <form action="{{ route('member.destroy',[$user->id]) }}" method="POST" role="form">
                                      @method('DELETE')
                                      @csrf
                                      <button type="submit" class="fa fa-trash-o"></button>
                                   </form>
                                 </li>
                               </ul>
                                {{-- @if($user->status==1)
                                  <a href="{{ url('/member/active') }}/{{ $user->id }}" class="fa fa-toggle-on"></a>
                                @else
                                  <a href="" class="fa fa-remove text-danger"></a>
                                @endif
                               <a href="{{ route('member.edit',[$user->id]) }}" class="fa fa-edit"></a>
                               <form action="{{ route('member.destroy',[$user->id]) }}" method="POST" role="form">
                                  @method('DELETE')
                                  @csrf
                                  <button type="submit" class="fa fa-trash-o"></button>
                               </form> --}}
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
