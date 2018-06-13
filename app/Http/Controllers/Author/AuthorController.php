<?php

namespace App\Http\Controllers\Author;

use App\Author;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class AuthorController extends Controller
{
    private function getAuthors()
    {
        return Author::all();
    }

    private function getAuthor($id)
    {
        return Author::where('id', '=', $id)->first();
    }

    public function index()
    {
        $authors = $this->getAuthors();
        return view('Author.home', compact('authors'));
    }

    public function author($id)
    {
        $author = $this->getAuthor($id);
        return view('Author.author', compact('author'));
    }
}
