<!-- المسار: resources/views/smartphone/create_smartphone.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h2 class="mb-4">إضافة هاتف جديد</h2>
        <form action="{{ route('store_phone') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="name">الاسم:</label>
                <input type="text" name="name" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="image">الصورة:</label>
                <input type="file" name="image" class="form-control-file" required>
            </div>
            <div class="form-group">
                <label for="price">السعر:</label>
                <input type="number" name="price" class="form-control" step="0.01" required>
            </div>
            <div class="form-group">
                <label for="quantity">الكمية:</label>
                <input type="number" name="quantity" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="description">الوصف:</label>
                <textarea name="description" class="form-control" rows="3" required></textarea>
            </div>
            <div class="form-group">
                <label for="category">الصنف:</label>
                <input type="text" name="category" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">إضافة</button>
        </form>
        <br/>
        <br/>
        <br/>
    </div>
@endsection
