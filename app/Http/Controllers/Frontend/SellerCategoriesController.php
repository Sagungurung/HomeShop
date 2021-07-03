<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Frontend\Categories;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class SellerCategoriesController extends Controller
{
    public function index(){
        $categories= Categories::get();
        return view('seller.sellerCategories.index', compact('categories'));
    }

    public function create()
    {
        return view('seller.sellerCategories.create');
    }

    public function store(Request $request)
    {
        // dd($request->all());

        $request->validate([
            'name'=>'required|min:2|unique:categories',
            'status'=>'boolean',
        ]);
        $request['slug'] = Str::slug($request->name);
        Categories::create($request->all());
        return redirect()->route('seller.sellerCategories.index')->with(['success'=>'Category Created Successfully']);
    }

    public function edit($id)
    {
        $category = Categories::find($id);
        return view('seller.sellerCategories.edit',compact('category'));
    }

    public function update(Request $request, $id)
    {
        // dd($request->all());
        // dd($id);
        $category = Categories::where('id', $id)->first();
        $category->name = $request->name;
        $category->slug = Str::slug('$request->name');
        $category->status= $request->status;
        $category->update();
        return redirect()->route('seller.sellerCategories.index')->with(['success'=>'Category Updated Successfully']);
    }

    public function destroy($id)
    {
        $category = Categories::find($id);
        $category->delete();
        return redirect()->route('seller.sellerCategories.index')->with(['success'=>'Category Deleted Successfully']);
    }
}
