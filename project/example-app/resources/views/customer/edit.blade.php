@extends('layouts.admin')
@section('content')

<div class="container">
  <div class="row">
  <form action="{{ route('admin.customer.update', ['customer' => $customer->id]) }}" method="POST">
    @csrf()
    {{method_field('put')}}
  <div class="mb-3">
    <label for="name" class="form-label">Tên loại</label>
    <input type="text"  name="name" class="form-control" value="{{$customer->name}}">
  </div>
  <div class="mb-3">
                <label for="email" class="form-label">Email khách hàng</label>
                <input type="text"  name="email" class="form-control" value="{{$customer->email}}">
            </div>
  
    
  <button type="submit" class="btn btn-primary">Update</button>
</form>
  </div>
</div>
  

@endsection