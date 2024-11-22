@extends('layouts.app')

@section('title', 'الفئات')

@section('content')
    <h1>قائمة الفئات</h1>
    <a href="{{ route('categories.create') }}" class="btn btn-primary mb-2">إضافة فئة جديدة</a>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>اسم الفئة</th>
                <th>الإجراءات</th>
            </tr>
        </thead>
        <tbody>
            @foreach($categories as $category)
                <tr>
                    <td>{{ $category->name }}</td>
                    <td>
                        <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-warning btn-sm">تعديل</a>
                        <form action="{{ route('categories.destroy', $category->id) }}" method="POST" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">حذف</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection