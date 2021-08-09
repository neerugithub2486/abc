@extends('layout')

@section('content')
<div class="row">
<div class="col-sm-3"></div>
<div class="col-sm-6">
<h1>Registration</h1>
<form method="post" action="register">
    @csrf
  <div class="form-group">
    <label >Name</label>
    <input type="text" name="name" class="form-control"  placeholder="Enter name">
   </div>
 <div class="form-group">
    <label >Email</label>
    <input type="text" name="email" class="form-control"  placeholder="Enter Email">
   </div>
 <div class="form-group">
    <label >Mobile</label>
    <input type="text" name="mobile" class="form-control"  placeholder="Enter Mobile">
   </div>
 
 <div class="form-group">
    <label >Passowrd</label>
    <input type="password" name="password" class="form-control"  placeholder="Enter Passowrd">
   </div>
 
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
<div class="col-sm-3"></div>
</div>
@stop