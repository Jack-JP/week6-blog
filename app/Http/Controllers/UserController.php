<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class UserController extends Controller
{
    public function index()
    {
      $users = User::all();
      return view('admin.users.index', compact('users'));
    }

    public function create()
    {
        return "create";
    }

    public function store(Request $request)
    {
        return "Store";
    }

    public function show($id)
    {
        return "Show";
    }

    public function edit($id)
    {
        return "Edit";
    }

    public function update(Request $request, $id)
    {
        return "Update";
    }

    public function destroy($id)
    {
        return "Destroy";
    }
}
