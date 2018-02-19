<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
      return view('admin.categories.index');
    }

    public function create()
    {
        return view('admin.categories.create');
    }

    public function store(Request $request)
    {
        return "Store";
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
