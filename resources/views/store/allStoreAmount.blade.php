@extends('layouts.app')

@section('content')
  <div class="col-md-10 col-sm-8" >
    <div class="mess-all">
      <p class="fa fa-home text-info">  All Efficient Mess Member List.</p>
    </div>
      <div class="panel well">
         <div class="panel-heading ">
            <p class="fa fa-check-square">   Mess Member List</p>
            <a href="{{ route('store.create') }}" class="pull-right btn btn-primary">  Add Amount</a>
          </div>
          <div class="panel-body">
              <div class="table-responsive">
                <table id="example" class="table table-striped table-bordered update-table" >
                  <thead>
                      <tr>
                          <th>#ID</th>
                          <th>Member Name</th>
                          <th>Amount</th>
                          <th>Added By</th>
                          <th>Time & Date</th>
                          <th>Action</th>
                      </tr>
                  </thead>
                  <tbody>
                    @foreach ($store_amount as $amount)
                      <tr>
                          <td>{{ $amount->user_id }}</td>
                          <td>{{ $amount->name }}</td>
                          <td>{{ $amount->add_amount }}</td>
                          <td>
                            <a class="btn btn-danger" href="">{{ $amount->getUserInfo->name }}</a>
                          </td>
                          <td>{{ $amount->created_at }}</td>
                          <td>
                            <ul>
                              <li>
                                 <a href="{{ route('store.edit',[$amount->user_id]) }}" class="fa fa-edit"></a>
                              </li>
                              <li>
                                 <a href="" class="fa fa-trash-o"></a>
                              </li>
                              <li>
                                 <a href="" class="fa fa-toggle-on"></a>
                              </li>
                            </ul>
                          </td>
                        </tr>
                    @endforeach
                  </tbody>
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
