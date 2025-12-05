@extends('layouts.admin')

@section('content')
<div class="cart-footer small muted"></div>
<table class="table">
<a href=" {{route('admin.category.create')}}" class="btn btn-success">
    <i class="fa-solid fa-plus"></i> Add</a>  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Tên loại</th>
      <th scope="col">Image</th>
      <th scope="col">Status</th>
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
      <td><img src="{{$object->image}}" alt=""height="100" width="150"></td>
      <td>
    @if($object->status == 1)
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle-fill text-success" viewBox="0 0 16 16">
            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0m-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
        </svg>
    @else
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-circle-fill text-danger" viewBox="0 0 16 16">
            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0M5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293z"/>
        </svg>
    @endif
</td>
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
