<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Page;
use Illuminate\Http\Request;

class LibraryController extends Controller
{
    public function index()
    {
        $books = Book::all();

        return view('library', ['books' => $books]);
    }

    public function read($id)
    {
        return view("reader");
    }

    public function book_creator() 
    {
        return view("book_creator");
    }
}
