<?php

namespace App\Http\Controllers\Book;

use App\Book;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Mockery\Matcher\Not;

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
        if (Auth::user()) {
            $favorite = Auth::user()->books()->wherePivot('book_isbn', '=', $book->isbn)->firstOrFail();
        }
        return view('book.book', compact(['book', 'favorite']));
    }

    private function getBookUserTables()
    {
        return DB::table('book_user');
    }

    public function changeFavorite(Request $request)
    {
        $book = $this->getBook($request->isbn);
        $fav = Auth::user();

        if ($fav->books()->where('book_isbn', '=', $book->isbn)->exists()) {
            $fejwrit = Auth::user()->books()->wherePivot('book_isbn', '=', $book->isbn)->first();

            if ($fejwrit->pivot->favorite == 1) {
                $fav->books()->updateExistingPivot($book->isbn, ['favorite' => 0]);
            } elseif ($fejwrit->pivot->favorite == 0) {
                $fav->books()->updateExistingPivot($book->isbn, ['favorite' => 1]);
            }
        } else {
            $fav->books()->save($book, ['favorite' => 1]);
        }
        return back();
    }

    public function setRating(Request $request)
    {
        $book = $this->getBook($request->isbn);
        $fav = Auth::user();

        if ($fav->books()->where('book_isbn', '=', $book->isbn)->exists()) {
            $fav->books()->updateExistingPivot($book->isbn, ['rating' => $request->rating]);
        } else {
            $fav->books()->save($book, ['rating' => $request->rating]);
        }
        return back();
    }

    public function setReview(Request $request)
    {
        $book = $this->getBook($request->isbn);
        $fav = Auth::user();
//dd($request);
        if ($fav->books()->where('book_isbn', '=', $book->isbn)->exists()) {
            $fav->books()->updateExistingPivot($book->isbn, ['review' => $request->review]);
        } else {
            $fav->books()->save($book, ['review' => $request->review]);
        }
        return back();
    }
}
