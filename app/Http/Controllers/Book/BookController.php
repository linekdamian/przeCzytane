<?php

namespace App\Http\Controllers\Book;

use App\Book;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class BookController extends Controller
{
    protected function getBooks()
    {
        return Book::all();
    }

    protected function getBook($id)
    {
        return Book::find($id);
    }

    public function index()
    {
        $books = $this->getBooks();
        return view('book.all-books', compact('books'));
    }

    public function book($id)
    {
        $book = $this->getBook($id);
        return view('book.book', compact('book'));
    }
}
