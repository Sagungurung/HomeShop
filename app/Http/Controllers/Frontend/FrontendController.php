<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Admin\Blog;
use App\Models\Admin\Category;
use App\Models\Frontend\Products;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function home(){
        $blogs = Blog::where('show_in_slider',1)->get();
        $categories = Category::where('show_in_menu',1)->get();
        $product = Products::get();
        // dd($categories);
        
        return view('frontend.homepage',compact('blogs','categories','product'));
    }

    public function frontCategories( $id){

        $categories = Category::all();
        // $blogs = Blog::where('show_in_slider',1)->get();
        // $product = Products::with('category')->get();
        $product = Products::where('category_id', $id)->with('category')->get();
        $blogs = Blog::where('category_id', $id)->with('category')->get();
       
        return view('frontend.includes.showCategories', compact('blogs','product','categories'));
    }
    
}
