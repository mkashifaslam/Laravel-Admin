@extends("app")

@section("content")

 <div class="row">
  <div class="col-xs-12">

   <div class="box">
    <div class="box-header">
     <h3 class="box-title">Update User Information</h3>
    </div><!-- /.box-header -->
    <div class="box-body">
     <form role="form" method="POST" action="{{ url('/user/update').'/'.$user['id'] }}">
       @include("users._form", ['update' => 1])
     </form>
    </div><!-- /.box-body -->
   </div><!-- /.box -->
  </div><!-- /.col -->
 </div><!-- /.row -->

 @endsection


