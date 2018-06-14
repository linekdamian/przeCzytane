<?php

namespace App\Http\Controllers\Book;

use App\Author;
use App\Book;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class SearchController extends Controller
{

    protected function findTitle($title)
    {
        return Book::where('title', 'like', '%'.$title.'%')->get();
    }

    protected function findAuthor($author)
    {
//        return Author::where
    }

    protected function findIsbn($isbn)
    {
        return Book::where('isbn', '=', $isbn)->first();
    }

    public function search(Request $request)
    {
        $id = $request->input(['search']);
        $title = $this->findTitle($id);
        $isbn = $this->findIsbn($id);
        $books = $title->union($isbn);
        return view('book.search', compact(['books']));
    }
}
