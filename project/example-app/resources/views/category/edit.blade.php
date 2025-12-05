@extends('layouts.admin')
@section('content')

<div class="container">
  <div class="row">
  <form action="{{ route('admin.category.update', ['category' => $category->id]) }}" method="POST">
    @csrf()
    {{method_field('put')}}
  <div class="mb-3">
    <label for="name" class="form-label">Tên loại</label>
    <input type="text"  name="name" class="form-control" value="{{$category->name}}">
  </div>

<div class="mb-3">
    <label for="image" class="form-label">image</label>
    <input type="text"  name="image" class="form-control" value="{{$category->image}}">
  </div>

 <select name="status" id="" class="form-control">
  @if($category->status==1)
                    <option value="1" selected >On</option>  
                    @else
                    <option value="1" >On</option>  
                    @endif
                    <option value="0">Off</option>
                    
                </select>
  
    
  <button type="submit" class="btn btn-success">Update</button>
  <a href="{{ route('admin.category.index') }}" class="btn btn-danger"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-return-left" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M14.5 1.5a.5.5 0 0 1 .5.5v4.8a2.5 2.5 0 0 1-2.5 2.5H2.707l3.347 3.346a.5.5 0 0 1-.708.708l-4.2-4.2a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 8.3H12.5A1.5 1.5 0 0 0 14 6.8V2a.5.5 0 0 1 .5-.5"/>
</svg>Back</a>
</form>
  </div>
</div>
  

@endsection