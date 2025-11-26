@extends('layouts.admin')
@section('content')

<div class="container">
    <div class="row">
        <form action="{{ route('admin.category.store') }}" method="POST"> 
            @csrf()
            
            <div class="mb-3">
                <label for="name" class="form-label">Tên loại</label>
                <input type="text" name="name" class="form-control" required>
            </div>

            
            <button type="submit" class="btn btn-primary">Thêm</button>
        </form>
    </div>
</div>
@endsection