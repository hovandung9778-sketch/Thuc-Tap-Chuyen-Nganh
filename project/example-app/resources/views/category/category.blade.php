@extends('layouts.admin')

@section('content')
<div class="cart-footer small muted"></div>
<table class="table">
<a href=" {{route('admin.category.create')}}" class="btn btn-success">
    <i class="fa-solid fa-plus"></i> Add</a>  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Tên loại</th>
      <th scope="col">Ngày tạo</th>
      <th scope="col">Ngày cập nhật</th>
      <th scope="col">Edit</th>
       <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>
    @forelse($categories as $object)
    <tr>
      <th scope="row">{{$object->id}}</th>
      <td>{{$object->name}}</td>
      <td>{{$object->created_at ? $object->created_at->format('d/m/Y H:i') : 'N/A'}}</td>    
      <td>{{$object->updated_at ? $object->updated_at->format('d/m/Y H:i') : 'N/A'}}</td>     
      <td><a href="{{ route('admin.category.edit',['category'=>$object->id]) }}" class="btn btn-warning"><i class="fa-solid fa-pen-to-square text-white "></i></a></td>
      <td><a href="{{route('admin.category.destroy',['category'=>$object->id])}}" title="Delete {{$object->name}}"
       onclick="event.preventDefault();window.confirm('Bạn đã chắc chắn xóa '+ '{{$object->name}}' +' chưa?') ?document.getElementById('category-delete-{{ $object->id }}').submit() :0;" 
       class="btn btn-danger"><i class="far fa-trash-alt"></i>
                              <form action="{{ route('admin.category.destroy', ['category' => $object->id]) }}" method="post" id="category-delete-{{ $object->id }}">
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
