@extends("layout.master")
  @section('content')
 <form role="form" method="post">
   <input type="hidden" name="_token" value="{{csrf_token()}}"  />
  <div class="form-group">
    <label for="fname">First Name:</label>
    <input type="text" name="first_name" class="form-control" id="fname">
  </div>
   <div class="form-group">
    <label for="lname">Last Name:</label>
    <input type="text" name="last_name" class="form-control" id="last_name">
  </div>
  <div class="form-group">
    <label for="email">Email address:</label>
    <input type="email" name="email" class="form-control" id="email">
  </div>
  <div class="form-group">
    <label for="pwd">Password:</label>
    <input type="password" name="password" class="form-control" id="pwd">
  </div>
  <div class="form-group">
    <label for="pwd">Re type Password:</label>
    <input type="password" name="confirm_password" class="form-control" id="pwd">
  </div>
  <div class="checkbox">
    <label><input type="checkbox"> Remember me</label>
  </div>
  <button type="submit" class="btn btn-default">Submit</button>
</form>


@stop

