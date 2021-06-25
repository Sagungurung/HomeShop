<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Blog;
use App\Models\Admin\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $blogs = Blog::with('category')->get();
        // dd($blogs);
        return view('admin.blog.index',compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $categories = Category::get();
        return view('admin.blog.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'title'=>'required|min:3|max:150|unique:blogs',
            'status'=>'required',
            'description'=>'required',
        ]);
        if($request->image){
            $request->validate([
                'image'=>'required|mimes:jpg,jpeg,png,svg,gif|max:2024',
            ]);
            $image_name = \Str::slug($request->title) . time();
            $uploaded = $request->image->move(public_path('/uploads/blogs'), $image_name);
        }
        $blog = new Blog();
        $blog->slug = \Str::slug($request->title);
        $blog->title = $request->title;
        $blog->category_id = $request->category_id;
        $blog->description = $request->description;
        $blog->status = $request->status;
        $blog->image = $image_name;
        $blog->user_id = Auth::user()->id;
        $blog->save();
        
        return redirect()->route('admin.blog.index')->with('success','Blog Created Successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Admin\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $blog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Admin\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit(Blog $blog)
    {
        return view('admin.blog.edit',compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Admin\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Blog $blog)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Admin\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Blog $blog)
    {
        //
    }
}
