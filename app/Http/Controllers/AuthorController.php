<?php

namespace App\Http\Controllers;


use App\Models\Author;
use App\Models\Book;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $authors = Author::all();
       return view('authors', compact('authors'));
    }

    public function show(Author $author)
    {
//        $author = Author::find($id);
//        $books = $author->books;
        $author->loadExists('books');

        return view('authors.show', compact('author'));
    }
}
