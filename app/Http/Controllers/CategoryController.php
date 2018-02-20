<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
      $categories = Category::latest()->get();
      return view('admin.categories.index', compact('categories'));
    }

    public function create()
    {
        return view('admin.categories.create');
    }

    public function store(Request $request)
    {
        $request->validate([
          'name' => 'required',
        ]);

        $category = new Category;
        $category->name = $request->input('name');
        $category->save();

        return redirect()->route('category.index');
    }

    public function show(Category $category)
    {
        return view('admin.categories.show');
    }

    public function edit(Category $category)
    {
        return view('admin.categories.edit');
    }

    public function update(Request $request, Category $category)
    {
        return "Update";
    }

    public function destroy(Category $category)
    {
        return "Destroy";
    }
}
