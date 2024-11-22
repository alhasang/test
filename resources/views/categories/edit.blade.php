@extends('layouts.app')

@section('title', 'تعديل الفئة')

@section('content')
    <h1>تعديل الفئة</h1>
    <form action="{{ route('categories.update', $category->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">اسم الفئة:</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ $category->name }}" required>
        </div>
        <button type="submit" class="btn btn-primary">تحديث</button>
    </form>
    <a href="{{ route('categories.index') }}" class="btn btn-secondary mt-2">عودة إلى القائمة</a>
@endsection