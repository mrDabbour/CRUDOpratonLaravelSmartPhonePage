<!-- المسار: resources/views/smartphone/edit_smartphone.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h2 class="mb-4">تعديل بيانات الهاتف</h2>
        <form action="{{ route('update_phone', $smartphone->id) }}" method="post">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name">الاسم:</label>
                <input type="text" name="name" class="form-control" value="{{ $smartphone->name }}" required>
            </div>
            <div class="form-group">
                <label for="price">السعر:</label>
                <input type="number" name="price" class="form-control" step="0.01" value="{{ $smartphone->price }}" required>
            </div>
            <div class="form-group">
                <label for="quantity">الكمية:</label>
                <input type="number" name="quantity" class="form-control" value="{{ $smartphone->quantity }}" required>
            </div>
            <div class="form-group">
                <label for="description">الوصف:</label>
                <textarea name="description" class="form-control" rows="3" required>{{ $smartphone->description }}</textarea>
            </div>
            <div class="form-group">
                <label for="category">الصنف:</label>
                <input type="text" name="category" class="form-control" value="{{ $smartphone->category }}" required>
            </div>
            <button type="submit" class="btn btn-primary">تحديث</button>
        </form>
    </div>
@endsection
