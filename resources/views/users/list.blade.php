@extends("app")

@section("header_files_css")

<!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('plugins/datatables/dataTables.bootstrap.css') }}">

    <style>
      table#users tr td a { margin-left: 5px;}
    </style>

@endsection

@section("content")

<div class="row">
    <div class="col-xs-12">

      <div class="box">
        <div class="box-header">
          <h3 class="box-title">System Users</h3>
        </div><!-- /.box-header -->
        <div class="box-body">
          @if (Session::get('action') && Session::get('message'))
            <div class="alert alert-{{ (Session::get('action') == "Update") ? "success" : "danger" }} alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <strong>{{ Session::get('action') }}!</strong> {{ Session::get('message') }}
            </div>
          @endif
          <table id="users" class="table table-bordered table-striped">
            <thead>
              <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Created At</th>
                <th>Updated At</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
            	@foreach($users as $user)
              <tr>
                <td>{{ $user->name }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->created_at }}</td>
                <td>{{ $user->updated_at }}</td>
                <td><a href="{{ url('/user/show/'.$user->id) }}" title="view"><i class="fa fa-eye fa-2x"></i></a>
                  <a href="{{ url('/user/edit/'.$user->id) }}" title="edit"><i class="fa fa-pencil-square-o fa-2x"></i></a>
                  <a href="{{ url('/user/delete/'.$user->id) }}" title="delete"><i class="fa fa-times fa-2x"></i></a></td>
              </tr>
              @endforeach                      
            </tbody>
          </table>
        </div><!-- /.box-body -->
      </div><!-- /.box -->
    </div><!-- /.col -->
  </div><!-- /.row -->

@endsection

@section("footer_files_js")
<!-- DataTables -->
    <script src="{{ asset('plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables/dataTables.bootstrap.min.js') }}"></script>	
@endsection

@section("footer_script_js")
<!-- page script -->
    <script>
      $(function () {
        $('#users').DataTable({
          "paging": true,
          "lengthChange": true,
          "searching": true,
          "ordering": true,
          "info": true,
          "autoWidth": true
        });
      });
    </script>
@endsection
