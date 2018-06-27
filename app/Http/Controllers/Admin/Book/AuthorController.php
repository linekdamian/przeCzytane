<?php

namespace App\Http\Controllers\Admin\Book;

use App\Author;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;

class AuthorController extends Controller
{
    protected function getAuthors()
    {
        return Author::all();
    }

    protected function getAuthor($imie, $nazwisko)
    {
        return Author::where('firstname','=', $imie)
            ->where('lastname', '=', $nazwisko)->first();
    }

    public function update(Request $request)
    {
        if(($request->changeFirstName.' '.$request->changeLastName) == ($request->firstname.' '.$request->lastname))
        {
            return back()->with('msg', 'nothing to change');
        }
        else {
            $author = $this->getAuthor($request->firstname, $request->lastname);
            $author->firstname = $request->changeFirstName;
            $author->lastname = $request->changeLastName;
            $author->save();
            $authors = $this->getAuthors();
            return view('admin.book-actions.author-edit', compact(['author', 'authors']));
        }
    }

    public function index()
    {
        $authors = $this->getAuthors();
        return view('admin.book-actions.author-add', compact('authors'));
    }

    public function add(Request $request)
    {
        $author = new Author();
        $author->firstname = $request->firstname;
        $author->lastname = $request->lastname;
        return ($author->save())? back() : back()->with('msg', 'nie udalo sie dodac autora');
    }

    public function edit(Request $request)
    {
        $authors = $this->getAuthors();
//        if ($author->contains('firstname', Input::get('firstname'))&&$author->contains('lastname', Input::get('lastname')))
        if ($author = $this->getAuthor(Input::get('firstname'), Input::get('lastname')))
        {
//            $category = $this->getAuthor(Input::get('firstname'), Input::get('lastname'));
            return view('admin.book-actions.author-edit', compact(['author', 'authors']));
        }
        else return back();
    }
}
