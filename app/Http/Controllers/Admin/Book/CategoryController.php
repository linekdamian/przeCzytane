<?php

namespace App\Http\Controllers\Admin\Book;

use App\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Input;

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

    public function update(Request $request)
    {
        if($request->changeName == $request->name)
        {
            return back()->with('msg', 'nothing to change');
        }
        else {
            $category = $this->getCategory($request->name);
            $category->name = $request->changeName;
            $category->save();
            $categories = $this->getCategories();

            return view('admin.book-actions.category-edit', compact(['category', 'categories']));
        }
    }

    public function index()
    {
        $categories = $this->getCategories();
        return view('admin.book-actions.category-add', compact('categories'));
    }

    public function add(Request $request)
    {
        $category = new Category();
        $category->name = $request->name;
        return ($category->save())? back() : back()->with('msg', 'nie udalo sie dodac kategorii');
    }

    public function edit()
    {
        $categories = $this->getCategories();
        if ($categories->contains('name', Input::get('CategoryName')))
        {
            $category = $this->getCategory(Input::get('CategoryName'));
            return view('admin.book-actions.category-edit', compact(['category', 'categories']));
        }
        else return back();
    }
}
