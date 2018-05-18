<?php

namespace App\Http\Controllers\Book;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class BookController extends Controller
{
    protected function getBooks()
    {
        $books = DB::table('books')->get();
        return $books;
    }

    protected function getBook($id)
    {
        $book = DB::table('books')
            ->where('isbn', $id)
            ->first();

        if ($book == null)
        {
            abort(404, 'Sorry, that book doesnt exist in our database');
        }
        else{
            return $book;
        }
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
