<?php

namespace App\Http\Controllers\Admin\Book;

use App\Book;
use App\Category;
use App\Http\Controllers\Controller;
use App\Publisher;
use Illuminate\Http\Request;

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

    private function getCategories()
    {
        return Category::all();
    }

    public function index()
    {
        $publishers = $this->getPublishers();
        $categories = $this->getCategories();
        return view('admin.book-actions.add-book', compact(['publishers', 'categories']));
    }
}
