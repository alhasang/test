@extends('layouts.app')

@section('title', 'تعديل المؤلف')

@section('content')
    <h1>تعديل المؤلف</h1>
    <form action="{{ route('authors.update', $author->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">اسم المؤلف:</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ $author->name }}" required>
        </div>
        <button type="submit" class="btn btn-primary">تحديث</button>
    </form>
    <a href="{{ route('authors.index') }}" class="btn btn-secondary mt-2">عودة إلى القائمة</a>
@endsection