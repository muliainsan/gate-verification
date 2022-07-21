<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
        return view('posts', [
            "title" => "Post",
            "posts" => User::all()
        ]);
    }

    public function show($slug)
    {
        return view('post', [
            "title" => "Post",
            "post" => User::find($slug)
        ]);
    }
}
