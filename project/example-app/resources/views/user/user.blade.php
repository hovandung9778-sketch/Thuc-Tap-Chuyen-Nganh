@extends('layouts.admin')

@section('content')
<div class="cart-footer small muted"></div>
<table class="table">
  <a href="{{route('admin.user.create')}}" class="btn btn-success">
    <i class="fa-solid fa-plus"></i> Add</a>

  <thead >
    <tr>
      <td scope="col">ID user</td>
      <td scope="col">Họ tên</td>
      <td scope="col">Email</td>
      <td scope="col">Password</td>
     
    </tr>
  </thead>
  <tbody>
    @forelse($users as $object)
    <tr >
      <td scope="row">{{$object->id}}</td>
      <td>{{$object->name}}</td>
      <td>{{$object->email}}</td>
      <td>{{$object->password}}</td>
      
    </tr>
    @empty
    <h1>Chưa có dữ liệu</h1>
    @endforelse
    
  </tbody>
</table>

@endsection