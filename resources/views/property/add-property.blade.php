@extends('layouts.app')

@section('content')

 <div class="container">
   <div class="card col-md-12">
       <div class="card-body col-8 offset-2 border border-primary rounded">
<form enctype="multipart/form-data" id ="formadd-property">

    <div class="form-group">
        <input type="file" name="file" id ="file" >
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">name</label>
        <input type="text" class="form-control" id="txtname" name="txtname" aria-describedby="emailHelp" placeholder="Enter email">
        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>

    <div class="form-group">
        <label for="exampleInputEmail1">Email address</label>
        <input type="email" name ="email" id ="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>
    <input type="hidden" value="{{ csrf_token() }}" id ="_token">

    <button type="submit" id ="add-property-button"class="btn btn-primary">Submit</button>
</form>
       </div>
   </div>

 </div>
 @include('includes/footer')
@endsection


