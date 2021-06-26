<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BlogTag;

class BlogTagController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('blogtags.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('blogtags.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'tag_id' => 'required|max:11',
            'blog_id' => 'required|max:11'
        ]);
        BlogTag::create($request->all());
        return redirect()->route('blogtags.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $blogTag = BlogTag::findOrFail($id);
        return view('blogtags.edit', compact('blogTag'));
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
        //
        $request->validate([
            'tag_id' => 'required|max:11',
            'blog_id' => 'required|max:11'
        ]);
        BlogTag::findOrFail($id)->update([
            'tag_id' => $request->tag_id,
            'blog_id' => $request->blog_id,
        ]);
        return redirect()->route('blogtags.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        BlogTag::findOrFail($id)->delete();
        return redirect()->back();
    }
}
