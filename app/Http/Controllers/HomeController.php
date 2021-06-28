<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class HomeController extends Controller
{
    function show()
    {
        $data = Blog::all();
        return view('home',['home'=>$data]);
    }
}
