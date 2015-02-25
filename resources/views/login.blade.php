@extends("layout.master")
  @section('content')
 <form role="form" method="post">
   <input type="hidden" name="_token" value="{{csrf_token()}}"  />
  <div class="form-group">
    <label for="fname">Email</label>
    <input type="text" name="email" class="form-control" id="fname">
  </div>
   <div class="form-group">
    <label for="lname">Password:</label>
    <input type="password" name="password" class="form-control" id="last_name">
  </div>
  <button type="submit" class="btn btn-default">Login</button>
</form>


@stop

