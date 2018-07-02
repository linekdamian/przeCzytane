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
        $splitName = explode(' ', $author);
            foreach ($splitName as $split){
                $author = Author::where('firstname', 'like', '%'.$split.'%')
                    ->orWhere('lastname', 'like', '%'.$split.'%')->groupBy('id')->get();
                    $authors = collect($author);
            }
        return $authors;
    }

    protected function findIsbn($isbn)
    {
        return Book::where('isbn', '=', $isbn)->get();
    }

    public function search(Request $request)
    {
        $id = $request->input(['search']);
        $title = $this->findTitle($id);
        $isbn = $this->findIsbn($id);
        $books = $title->union($isbn);

        $searchingAuthors = $this->findAuthor($id);
        return view('book.search', compact(['books', 'searchingAuthors']));

    }
}
