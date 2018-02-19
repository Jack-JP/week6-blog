<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        return "Index";
    }

    public function create()
    {
        return "Create";
    }

    public function store(Request $request)
    {
        return "Store";
    }

    public function show(Category $category)
    {
        return "Show";
    }

    public function edit(Category $category)
    {
        return "Edit";
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
