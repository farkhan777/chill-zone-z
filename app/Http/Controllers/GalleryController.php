<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class GalleryController extends Controller
{
    //
    function show()
    {
        $data = Category::all();
        return view('gallery',['gallery'=>$data]);
    }
}
