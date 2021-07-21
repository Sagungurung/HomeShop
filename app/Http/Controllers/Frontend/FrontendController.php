<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Admin\Blog;
use App\Models\Admin\Category;
use App\Models\Frontend\Comment;
use App\Models\Frontend\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FrontendController extends Controller
{
    public function home(Request $request){
        $blogs = Blog::where('show_in_slider',1)->get();
        $categories = Category::where('show_in_menu',1)->get();
        $product = Product::get();
        // $visitor = $request->all();
        // dd($categories);
        
        return view('frontend.homepage',compact('blogs','categories','product'));
    }

    public function frontCategories( $id){

        $categories = Category::all();
        // $blogs = Blog::where('show_in_slider',1)->get();
        // $product = Products::with('category')->get();
        $product = Product::where('category_id', $id)->with('category')->get();
        $blogs = Blog::where('category_id', $id)->with('category')->get();
       
        return view('frontend.includes.showCategories', compact('blogs','product','categories'));
    }

    public function contact(){
        $categories = Category::all();
        return view('frontend.contact',compact('categories'));
    }
    public function comment(Request $request){

        if(Auth::guard('visitor')->check()){
            $request->validate([
                'blog_id'=>'required|integer',
                'visitor_id'=>'integer',
                'product_id'=>'integer',
                'comment'=>'required|min:2|max:100',
            ]);
            Comment::create($request->all());
            return redirect()->back();
        }
    }
    
}
