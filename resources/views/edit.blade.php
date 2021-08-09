@extends('layout')

@section('content')
<div class="row">
<div class="col-sm-3"></div>
<div class="col-sm-6">
<h1>Edit Restaurant</h1>
<form method="post" action="/edit">
    @csrf
    <input type="hidden" name="id" value="{{$data->id}}">
  <div class="form-group">
    <label >Name</label>
    <input type="text" name="name" class="form-control" value="{{$data->name}}"  placeholder="Enter name">
   </div>
 <div class="form-group">
    <label >Email</label>
    <input type="text" name="email" class="form-control" value="{{$data->email}}"  placeholder="Enter Email">
   </div>
 <div class="form-group">
    <label >Address</label>
    <input type="text" name="address" class="form-control" value="{{$data->address}}"  placeholder="Enter Address">
   </div>
 
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
<div class="col-sm-3"></div>
</div>
@stop