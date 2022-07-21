<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contractor;

class ContractorController extends Controller
{
    public function index()
    {
        return view('posts', [
            "title" => "Post",
            "posts" => Contractor::all()
        ]);
    }

    public function show($slug)
    {
        return view('post', [
            "title" => "Post",
            "post" => Contractor::find($slug)
        ]);
    }
}
