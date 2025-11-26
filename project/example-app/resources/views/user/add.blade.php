@extends('layouts.admin')
@section('content')

<div class="container">
    <div class="row">
        <form action="{{ route('admin.user.store') }}" method="POST"> 
            @csrf()
            
            <div class="mb-3">
                <label for="name" class="form-label">Họ tên</label>
                <input type="text" name="name" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="text" name="email" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="text" name="password" class="form-control" required>
            </div>

            
            <button type="submit" class="btn btn-primary">Thêm</button>
        </form>
    </div>
</div>
@endsection