@extends('layouts.admin')

@section('content')
<div class="cart-footer small muted"></div>
<table class="table">
<a href=" {{route('admin.product.create')}}" class="btn btn-success">
    <i class="fa-solid fa-plus"></i> Add</a>  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Sản Phẩm</th>
      <th scope="col">Giá</th>
      <th scope="col">Ngày tạo</th>
      <th scope="col">Ngày cập nhật</th>
      <th scope="col">Edit</th>
      <th scope="col">Delete</th>
    </tr>
  </thead>
  <tbody>
    @forelse($products as $object)
    <tr>
      <th scope="row">{{$object->id}}</th>
      <td>{{$object->name}}</td>
      <td>{{$object->gia}}</td>
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