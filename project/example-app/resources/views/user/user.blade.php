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
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>
    @forelse($users as $object)
    <tr >
      <td scope="row">{{$object->id}}</td>
      <td>{{$object->name}}</td>
      <td>{{$object->email}}</td>
      <td>{{$object->password}}</td>
      <td><a href="{{route('admin.user.destroy',['user'=>$object->id])}}" title="Delete {{$object->name}}"
       onclick="event.preventDefault();window.confirm('Bạn đã chắc chắn xóa '+ '{{$object->name}}' +' chưa?') ?document.getElementById('user-delete-{{ $object->id }}').submit() :0;" 
       class="btn btn-danger"><i class="far fa-trash-alt"></i>
                              <form action="{{ route('admin.user.destroy', ['user' => $object->id]) }}" method="post" id="user-delete-{{ $object->id }}">
                                  {{ csrf_field() }}
                                  {{ method_field('delete') }}
                              </form>
                          </a></td>
    </tr>
    @empty
    <h1>Chưa có dữ liệu</h1>
    @endforelse
    
  </tbody>
</table>

@endsection