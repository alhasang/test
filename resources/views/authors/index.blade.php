@extends('layouts.app')

@section('title', 'المؤلفين')

@section('content')
    <h1>قائمة المؤلفين</h1>
    <a href="{{ route('authors.create') }}" class="btn btn-primary mb-2">إضافة مؤلف جديد</a>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>اسم المؤلف</th>
                <th>الإجراءات</th>
            </tr>
        </thead>
        <tbody>
            @foreach($authors as $author)
                <tr>
                    <td>{{ $author->name }}</td>
                    <td>
                        <a href="{{ route('authors.edit', $author->id) }}" class="btn btn-warning btn-sm">تعديل</a>
                        <form action="{{ route('authors.destroy', $author->id) }}" method="POST" style="display:inline;">
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