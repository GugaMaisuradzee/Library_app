<?php

namespace App\Http\Controllers;

use App\Http\Requests\BookRequest;
use App\Models\Author;
use App\Models\Book;
use Illuminate\View\View;

class BookController extends Controller
{
    public function index(): View
    {
        $books = Book::with('authors')->get();

        return view('index', compact('books'));
    }

    public function create(): View
    {
        return view('create');
    }

    public function store(BookRequest $request)
    {
        $author = Author::where('name', $request->author)->first();

        $book = Book::create([
            'title' => $request->input('title'),
            'year' => $request->input('year'),
            'status' => $request->input('status'),
        ]);

        if ($author) {
            $book->authors()->attach($author);

            return redirect()->route('index');
        }

        $book->authors()->create([
            'name' => $request->author,
        ]);

        return redirect()->route('index');
    }

    public function show(Book $book)
    {
        return view('books.show', compact('book'));
    }

    public function destroy(Book $book)
    {
        $book->authors()->detach();
        $book->delete();

        return redirect()->back();
    }
}
