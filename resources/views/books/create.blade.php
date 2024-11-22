@extends('layouts.app')

@section('title', 'إضافة كتاب جديد')

@section('content')
    <h1>إضافة كتاب جديد</h1>
    <form action="{{ route('books.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="title">عنوان الكتاب:</label>
            <input type="text" name="title" id="title" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="author_id">المؤلف:</label>
            <select name="author_id" id="author_id" class="form-control" required>
                @foreach($authors as $author)
                    <option value="{{ $author->id }}">{{ $author->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="categories">الفئات:</label>
            <select name="categories[]" id="categories" class="form-control" multiple required>
                @foreach($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-primary">إضافة</button>
    </form>
@endsection