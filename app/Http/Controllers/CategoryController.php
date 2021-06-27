<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();
        return view('categories.index', compact('categories'));
     }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $categories = new Category;
        $categories->categoryName = $request->input('categoryName');
        if( $request->hasFile('iconImage') ) {
            $file = $request->file('iconImage');
            $filename  = time() . '.' . $file->getClientOriginalExtension();
            $file->move('uploads/categories/', $filename);
            $categories->iconImage = $filename;
        }
        $categories->save();
        return redirect()->back()->with('status','Icon Image Added Successfully');
        Category::create($request->all());
        return redirect()->route('categories.index');
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
        $category = Category::findOrFail($id);
        return view('categories.edit', compact('category'));    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $categories = Category::find($id);
        $categories->categoryName = $request->input('categoryName');
        if( $request->hasFile('iconImage') ) {
            $destination= 'uploads/categories/'.$categories->iconImage;
            if (File::exists($destination))
            {
                File::delete($destination);
            }
            $file = $request->file('iconImage');
            $filename  = time() . '.' . $file->getClientOriginalExtension();
            $file->move('uploads/tags/', $filename);
            $categories->iconImage = $filename;
        }
        $categories->update();
        return redirect()->back()->with('status','Icon Image Updated Successfully');
        // $request->validate([
        //     'categoryName' => 'required|max:255',
        //     'iconImage' => 'required|max:255'
        // ]);
        // Category::findOrFail($id)->update([
        //     'categoryName' => $request->categoryName,
        //     'iconImage' => $request->iconImage,
        // ]);
        // return redirect()->route('categories.index');
     }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Category::findOrFail($id)->delete();
        return redirect()->back();
    }
}