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

    public function index()
    {
        $categories = $this->getCategories();
        return view('category.categories', compact('categories'));
    }

    public function show(Category $category)
    {
        $category = $category->findOrFail($category->id);
        return view('category.category', compact('category'));
    }
}