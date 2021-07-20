<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin\Blog;
use App\Models\Admin\Category;
use App\Models\Frontend\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories= Category::get();
        // dd($categories);
        // $categories= DB::select("Select * from categories");
        return view('admin.category.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.category.create');
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
            'name'=>'required|min:2|unique:categories',
            'status'=>'boolean',
        ]);
        $request['slug'] = Str::slug($request->name);
        Category::create($request->all());
        return redirect()->route('admin.category.index')->with(['success'=>'Category Created Successfully']);
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
        $category = Category::find($id);
        return view('admin.category.edit',compact('category'));
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
        // dd($request->all());
        // dd($id);
        $category = Category::where('id', $id)->first();
        $category->name = $request->name;
        $category->slug = Str::slug($request->name);
        $category->status= $request->status;
        $category->show_in_menu = $request->show_in_menu;
        $category->update();
        return redirect()->route('admin.category.index')->with(['success'=>'Category Updated Successfully']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = Category::find($id);
        $blog = Blog::where('category_id',$category->id)->delete();
        $product = Product::where('category_id',$category->id)->delete();
        $category->delete();
        return redirect()->route('admin.category.index')->with(['success'=>'Category Deleted Successfully'],compact('blog','product'));
    }
}
