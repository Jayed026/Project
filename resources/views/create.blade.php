
    @extends('master')
    @section('content')
 

<div class="container">
  <h2>Create New Student</h2>
  <form class="form-horizontal" action="{{route('store')}} " method="post">
  {{csrf_field()}}
    <div class="form-group">
      <label class="control-label col-sm-2" for="name">Name:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="name"  name="name">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="reg_id">Registration Id:</label>
      <div class="col-sm-10">
        <input type="number" class="form-control" id="reg_id"  name="reg_id">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="dept">Department_name:</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="dept"  name="dept">
      </div>
    </div>
    
    <div class="form-group">
      <label class="control-label col-sm-2" for="name">Info</label>
      <div class="col-sm-10">
        <textarea  class="form-control" id="info"  name="info" rows="10"></textarea>
      </div>
    </div>
    
  
  
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-success">Submit</button>
      </div>
    </div>
  </form>
</div>

</body>
</html>

    @endsection

     
