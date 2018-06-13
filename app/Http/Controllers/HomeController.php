<?php

namespace App\Http\Controllers;

use App\Book;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */

    protected function getLastBook()
    {
        return Book::orderBy('created_at', 'desc')->first();;
    }

    public function index()
    {
        $user = Auth::user();
        $book = $this->getLastBook();
        return view('home', compact(['user', 'book']));
    }
}
