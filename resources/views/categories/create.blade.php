@extends('layouts.app')

@section('title', 'إضافة فئة جديدة')

@section('content')
    <h1>إضافة فئة جديدة</h1>
    <form action="{{ route('categories.store') }}" method="POST">
        @csrf
        <label for="name">اسم الفئة:</label>
        <input type="text" name="name" id="name" required>
        <button type="submit">إضافة</button>
    </form>
@endsection