@extends('layout')

@section('content')

<div class="col-sm-6">
   <h1>
      Add new Restaurant
   </h1>
      <form method="POST" action="add">
         @csrf
  <div class="form-group">
    <label>Name</label>
    <input type="text" name="name" class="form-control" placeholder="Enter name">
  </div>
  <div class="form-group">
    <label>Email</label>
    <input type="text" name="email" class="form-control" placeholder="Enter email">
  </div>
  <div class="form-group">
    <label>review</label>
    <input type="text" name="review" class="form-control" placeholder="Enter review">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>

@stop