<?php

namespace App\Http\Controllers\Admin\Book;

use App\Author;
use App\Book;
use App\Category;
use App\Http\Controllers\Controller;
use App\Publisher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Input;

class AddBookController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }

    private function getPublishers()
    {
        return Publisher::all();
    }

    private function getPublisherIdByName($name)
    {
        $publisher = Publisher::where('name', '=', $name)->first();
        return $publisher->id;
    }

    private function getCategoryIdByName($name)
    {
        $category = Category::where('name', '=', $name)->first();
        return $category->id;
    }

    private function getCategories()
    {
        return Category::all();
    }

    private function getIdAuthorByName($imie, $nazwisko)
    {
        $author = Author::where('firstname','=', $imie)
            ->where('lastname', '=', $nazwisko)->first();
        return $author->id;
    }

    private function updateAuthorByName($imie, $nazwisko)
    {
        return Author::where('firstname','=', $imie)
            ->where('lastname', '=', $nazwisko)->first();
    }


    private function fillAuthorBookTable($author_id, $isbn)
    {
        DB::table('author_book')->insert(['author_id' => $author_id, 'book_isbn' => $isbn]);
    }

    private function getBookByTitle($title)
    {
        return Book::where('title', '=', $title)->first();
    }

    private function getBookByIsbn($isbn)
    {
        return Book::where('isbn', '=', $isbn)->first();
    }

    public function index()
    {
        $publishers = $this->getPublishers();
        $categories = $this->getCategories();
        return view('admin.book-actions.add-book', compact(['publishers', 'categories']));
    }

    public function store(Request $request)
    {
        $book = new Book();
        $book->title = $request->title;
        $book->isbn = $request->isbn;
        if($request->description){
            $book->description = $request->description;
        }

        $book->publisher_id = $this->getPublisherIdByName($request->publisher);
        $book->category_id = $this->getCategoryIdByName($request->category);

        $this->fillAuthorBookTable(
            $this->getIdAuthorByName($request->authorfirstname,
                $request->authorlastname), $book->isbn);

        $book->save();
        return back();
    }

    public function edit()
    {
        $publishers = $this->getPublishers();
        $categories = $this->getCategories();
        ($this->getBookByTitle(Input::get('isbn')))? $book = $this->getBookByTitle(Input::get('isbn')):
            $book = $this->getBookByIsbn(Input::get('isbn'));

        if($book) {
            return view('admin.book-actions.edit-book', compact(['publishers', 'categories', 'book']));
        }else return back()->with('msg', 'Nie ma takiej ksiażki');
    }

    public function update(Request $request)
    {
        $book = Book::find($request->isbn);
        ($book)?: $book = new Book(); //TO DO delete starej książki

        $book->title = $request->title;
        $book->isbn = $request->isbn;
        $book->description = $request->description;

        $book->publisher_id = $this->getPublisherIdByName($request->publisher);
        $book->category_id = $this->getCategoryIdByName($request->category);
        $book->save();

        $author = $this->updateAuthorByName($request->authorfirstname, $request->authorlastname);

        $author->firstname = $request->authorfirstname;
        $author->lastname = $request->authorlastname;
        $author->save();

        return back();
    }
}
