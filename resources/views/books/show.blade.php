@extends('layouts.app')

@section('title', 'تفاصيل الكتاب')

@section('content')
    <h1>{{ $book->title }}</h1>
    <p><strong>المؤلف:</strong> {{ $book->author->name }}</p>
    <p><strong>الفئات:</strong> 
        @foreach($book->categories as $category)
            {{ $category->name }}@if(!$loop->last), @endif
        @endforeach
    </p>
    <a href="{{ route('books.index') }}" class="btn btn-secondary">عودة إلى القائمة</a>
@endsection