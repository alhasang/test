@extends('layouts.app')

@section('title', 'إضافة مؤلف جديد')

@section('content')
    <h1>إضافة مؤلف جديد</h1>
    <form action="{{ route('authors.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">اسم المؤلف:</label>
            <input type="text" name="name" id="name" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-primary">إضافة</button>
    </form>
@endsection