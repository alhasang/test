<?php

namespace App\Http\Controllers;

use App\Models\Author;
use App\Models\Book;
use App\Models\Category;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::with(['author', 'categories'])->get();
        return view('books.index', compact('books'));
    }

    public function create()
    {
        $authors = Author::all();
        $categories = Category::all();
        return view('books.create', compact('authors', 'categories'));
    }

    public function store(Request $request)
    {
        

        $book = Book::create($request->all());
        $book->categories()->attach($request->input('categories'));

        return redirect()->route('books.index')->with('success', 'تم إضافة الكتاب بنجاح.');
    }

    public function edit(Book $book)
    {
        $authors = Author::all();
        $categories = Category::all();
        return view('books.edit', compact('book', 'authors', 'categories'));
    }

    public function update(Request $request, Book $book)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'author_id' => 'required|exists:authors,id',
            'categories' => 'required|array',
        ]);

        $book->update($request->all());
        $book->categories()->sync($request->input('categories'));

        return redirect()->route('books.index')->with('success', 'تم تحديث الكتاب بنجاح.');
    }
    public function show(Book $book)
    {
        return view('books.show', compact('book'));
    }

    public function destroy(Book $book)
    {
        $book->delete();
        return redirect()->route('books.index')->with('success', 'تم حذف الكتاب بنجاح.');
    }
}
