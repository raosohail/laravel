@extends("layout.master")
  @section('content')
 <form role="form" method="post">
 
 <input type="hidden" name="_token" value="{{csrf_token()}}"  />
  <div class="form-group">
    <label for="title">Title</label>
    <input type="text" name="title" class="form-control" id="title">
  </div>
   <div class="form-group">
    <label for="description">Description</label>
    <textarea name="description" class="form-control" id="description"></textarea>
  </div>
  <button type="submit" class="btn btn-default">Save</button>
</form>


@stop

