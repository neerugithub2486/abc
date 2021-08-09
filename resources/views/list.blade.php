@extends('layout')

@section('content')
<div>
<h1>List of Restaurant</h1>
@if(Session::get('status'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
  {{Session::get('status')}}
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
@endif
<table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Address</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
      @foreach($data as $v)
    <tr>
      <th scope="row">{{$v->id}}</th>
      <td>{{$v->name}}</td>
      <td>{{$v->email}}</td>
      <td>{{$v->address}}</td>
      <td>
        <a href="delete/{{$v->id}}"><i class="fa fa-trash"></i></a>
        <a href="edit/{{$v->id}}"><i class="fa fa-edit"></i></a>
      </td>
     
    </tr>
    @endforeach
  </tbody>
</table>
</div>
@stop