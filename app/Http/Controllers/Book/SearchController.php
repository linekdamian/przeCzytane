<?php

namespace App\Http\Controllers\Book;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class SearchController extends Controller
{

    protected function findTitle($title)
    {
        return DB::table('books')
            ->where('title','like', '%'.$title.'%')
            ->get();
    }

    protected function findAuthor($author)
    {

    }

    protected function findIsbn($isbn)
    {
        return DB::table('books')
            ->where('isbn', $isbn)
            ->get();
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
