
    {!! csrf_field() !!}
    <div class="box-body">
        <div class="form-group">
            <label for="exampleInputEmail1">Name: </label>
            <input type="text" class="form-control" id="name" name="name" {{ ($update == 0) ? "readonly='readonly'" : "" }} placeholder="Enter name" value="{{ $user['name'] }}">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Email address: </label>
            <input type="email" class="form-control" id="email" name="email" {{ ($update == 0) ? "readonly='readonly'" : "" }} placeholder="Enter email" value="{{ $user['email'] }}">
        </div>
    </div><!-- /.box-body -->

    <div class="box-footer">

        @if ($update == 1)

        <button type="submit" class="btn btn-primary">Update</button>

        @endif

        <a href="{{ URL::previous() }}" class="btn btn-primary">Back</a>
    </div>
