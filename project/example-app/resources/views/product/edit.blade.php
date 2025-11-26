@extends('layouts.admin')
@section('content')

<div class="container">
  <div class="row">
  <form action="{{ route('admin.product.update', ['product' => $product->id]) }}" method="POST">
    @csrf()
    {{method_field('put')}}
  <div class="mb-3">
    <label for="name" class="form-label">Tên loại</label>
    <input type="text"  name="name" class="form-control" value="{{$product->name}}">
  </div>
   <div class="mb-3">
                <label for="gia" class="form-label">Giá</label>
                <input type="text" name="gia" class="form-control" value="{{$product->gia}}">
            </div>

  
    
  <button type="submit" class="btn btn-primary">Update</button>
</form>
  </div>
</div>
  

@endsection