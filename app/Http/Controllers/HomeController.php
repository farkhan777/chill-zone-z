<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class HomeController extends Controller
{
    function show()
    {
        $data = Blog::simplePaginate(6);
        return view('home',['home'=>$data]);
    }
}
