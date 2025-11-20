@extends('layouts.app')

@section('content')
<div class="cart-footer small muted"></div>
<table class="table">
  <a href="" class= "btn btn-primary">Add</a>
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">FullName</th>
      <th scope="col">Created_ar</th>
      <th scope="col">Updated_at</th>
      <th scope="col">View</th>
      <th scope="col">Edit</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>
    @forelse($categories as $object)
    <tr>
      <th scope="row">{{$object->id}}</th>
      <td>{{$object->name}}</td>
      <td>{{$object->created_at}}</td>
      <td>{{$object->updated_at}}</td>
      <td><a href=""><i class="fa-solid fa-eye text-info"></i></a></td>
      <td><a href=""><i class="fa-solid fa-pen-to-square text-warning"></i></a></td>
      <td><a href=""><i class="fa-solid fa-trash text-danger"></i></a></td>
    </tr>
    @empty
    <h1>Chưa có dữ liệu</h1>
    @endforelse
    
  </tbody>
</table>

@endsection