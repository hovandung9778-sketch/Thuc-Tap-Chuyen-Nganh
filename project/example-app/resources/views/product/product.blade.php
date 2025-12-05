@extends('layouts.admin')

@section('content')
<div class="cart-footer small muted"></div>
<table class="table">
<a href=" {{route('admin.product.create')}}" class="btn btn-success">
    <i class="fa-solid fa-plus"></i> Add</a>  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Sản Phẩm</th>
      <th scope="col">Image</th>
      <th scope="col">Decription</th>
      <th scope="col">Content</th>
      <th scope="col">Giá</th>
      <th scope="col">Category</th>
      <th scope="col">Status</th>
      <th scope="col">Ngày tạo</th>
      <th scope="col">Ngày cập nhật</th>
      <th scope="col">Edit</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>
    @forelse($products as $object)
    <tr>
      <td scope="row">{{$object->id}}</td>
      <td scope="row">{{$object->name}}</td>
      <td><img src="{{$object->image}}" alt=""height="100" width="150"></td>
      <td>{{$object->decription}}</td>
      <td>{{$object->content}}</td>
      <td>{{$object->gia}}</td>
      <td><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-file-earmark-post" viewBox="0 0 16 16">
  <path d="M14 4.5V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h5.5zm-3 0A1.5 1.5 0 0 1 9.5 3V1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V4.5z"/>
  <path d="M4 6.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-.5.5h-7a.5.5 0 0 1-.5-.5zm0-3a.5.5 0 0 1 .5-.5H7a.5.5 0 0 1 0 1H4.5a.5.5 0 0 1-.5-.5"/>
</svg>
      {{$object->category?->name}}</td>  
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
      <td><a href="{{ route('admin.product.edit',['product'=>$object->id]) }}"class="btn btn-warning"><i class="fa-solid fa-pen-to-square text-white "></i></a></td>
      <td><a href="{{route('admin.product.destroy',['product'=>$object->id])}}" title="Delete {{$object->name}}"
       onclick="event.preventDefault();window.confirm('Bạn đã chắc chắn xóa '+ '{{$object->name}}' +' chưa?') ?document.getElementById('product-delete-{{ $object->id }}').submit() :0;" 
       class="btn btn-danger"><i class="far fa-trash-alt"></i>
                              <form action="{{ route('admin.product.destroy', ['product' => $object->id]) }}" method="post" id="product-delete-{{ $object->id }}">
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