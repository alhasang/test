@extends('layouts.app')

@section('title', 'الكتب')

@section('content')
    <h1>قائمة الكتب</h1>
    <a href="{{ route('books.create') }}" class="btn btn-primary mb-2">إضافة كتاب جديد</a>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>عنوان الكتاب</th>
                <th>المؤلف</th>
                <th>الفئات</th>
                <th>الإجراءات</th>
            </tr>
        </thead>
        <tbody>
            @foreach($books as $book)
                <tr>
                    <td>{{ $book->title }}</td>
                    <td>{{ $book->author->name }}</td>
                    <td>
                        @foreach($book->categories as $category)
                            {{ $category->name }}@if(!$loop->last), @endif
                        @endforeach
                    </td>
                    <td>
                        <a href="{{ route('books.show', $book->id) }}" class="btn btn-info btn-sm">عرض التفاصيل</a>
                        <a href="{{ route('books.edit', $book->id) }}" class="btn btn-warning btn-sm">تعديل</a>
                        <form action="{{ route('books.destroy', $book->id) }}" method="POST" style="display:inline;">
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