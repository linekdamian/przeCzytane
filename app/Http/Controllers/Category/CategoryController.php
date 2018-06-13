<?php

namespace App\Http\Controllers\Category;

use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CategoryController extends Controller
{
    private function getCategories()
    {
        return Category::all();
    }

    private function getCategory($id)
    {
        return Category::where('name', '=', $id)->first();
    }

    public function index()
    {
        $categories = $this->getCategories();
        return view('category.home', compact('categories'));
    }

    public function category($id)
    {
        $category = $this->getCategory($id);
        return view('category.category', compact('category'));
    }
}
