<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = Blog::all();
        return view('blogs.index', compact('blogs'));
    }

    public function show()
    {
        $blogs = Blog::all();
        $categories = Category::all();
        $messages = Message::all();
        return view('index', compact('blogs','categories','messages'));
    }

    // public function countCategory()
    // {
    //     $categories = Category::all();
    //     return view('index', compact('categories'));
    // }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('blogs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $blogs = new Blog;
        $blogs->title = $request->input('title');
        $blogs->post = $request->input('post');
        $blogs->post_excerpt = $request->input('post_excerpt');
        $blogs->slug = $request->input('slug');
        $blogs->featuredImage = $request->input('featuredImage');
        // if( $request->hasFile('featuredImage') ) {
        //     $file = $request->file('featuredImage');
        //     $filename  = time() . '.' . $file->getClientOriginalExtension();
        //     $file->move('uploads/blogs/', $filename);
        //     $blogs->featuredImage = $filename;
        // }
        $blogs->metaDescription = $request->input('metaDescription');
        $blogs->save();
        return redirect()->back()->with('status','Blog Image Added Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $blogs = Blog::find($id);
        return view('blogs.edit', compact('blogs'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $blogs = Blog::find($id);
        $blogs->title = $request->input('title');
        $blogs->post = $request->input('post');
        $blogs->post_excerpt = $request->input('post_excerpt');
        $blogs->slug = $request->input('slug');
        $blogs->featuredImage = $request->input('featuredImage');
        // if( $request->hasFile('featuredImage') ) {
        //     $destination= 'uploads/blogs/'.$blogs->featuredImage;
        //     if (File::exists($destination))
        //     {
        //         File::delete($destination);
        //     }
        //     $file = $request->file('featuredImage');
        //     $filename  = time() . '.' . $file->getClientOriginalExtension();
        //     $file->move('uploads/blogs/', $filename);
        //     $blogs->featuredImage = $filename;
        // }
        $blogs->metaDescription = $request->input('metaDescription');
        $blogs->update();
        return redirect()->back()->with('status','Blog Image Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Blog::findOrFail($id)->delete();
        return redirect()->back();
    }
}
