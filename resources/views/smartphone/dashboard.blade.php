<!-- المسار: resources/views/smartphone/dashboard.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h2 class="mb-4">Dashboard</h2>
        <a href="{{ route('add_phone') }}" class="btn btn-primary mb-3">إضافة هاتف جديد</a>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">الاسم</th>
                    <th scope="col">الصورة</th>
                    <th scope="col">السعر</th>
                    <th scope="col">الكمية</th>
                    <th scope="col">الوصف</th>
                    <th scope="col">الصنف</th>
                    <th scope="col">العمليات</th>
                </tr>
            </thead>
            <tbody>
                @foreach($phones as $phone)
                    <tr>
                        <th scope="row">{{ $phone->id }}</th>
                        <td>{{ $phone->name }}</td>
                        <td><img src="{{ Storage::url('images/' . $phone->image) }}" alt="{{ $phone->name }}" style="max-width: 100px;"></td>
                        <td>{{ $phone->price }}</td>
                        <td>{{ $phone->quantity }}</td>
                        <td>{{ $phone->description }}</td>
                        <td>{{ $phone->category }}</td>
                        <td>
                            <a href="{{ route('edit_phone', $phone->id) }}" class="btn btn-sm btn-primary">تعديل</a>
                            <form action="{{ route('delete_phone', $phone->id) }}" method="post" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger">حذف</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
