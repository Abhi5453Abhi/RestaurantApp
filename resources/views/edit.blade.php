@extends('layout')

@section('content')

<div class="col-sm-6">
   <h1>
      Edit Restaurant
   </h1>
      <form method="POST" action="/edit">
         @csrf
         <div>
    <label>Name</label>
    <input type="hidden" name="id" value="{{$data->id}}">
    <input type="text" name="name" class="form-control" value="{{$data->name}}" placeholder="Enter name">
  </div>
  <div class="form-group">
    <label>Email</label>
    <input type="text" name="email" value="{{$data->email}}" class="form-control" placeholder="Enter email">
  </div>
  <div class="form-group">
    <label>review</label>
    <input type="text" name="review" value="{{$data->review}}" class="form-control" placeholder="Enter review">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>

@stop