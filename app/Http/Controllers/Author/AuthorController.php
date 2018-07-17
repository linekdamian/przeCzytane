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

    public function index()
    {
        $authors = $this->getAuthors();
        return view('author.authors', compact('authors'));
    }

    public function show(Author $author)
    {
        $author = $author->findOrFail($author->id);
        return view('author.author', compact('author'));
    }
}
