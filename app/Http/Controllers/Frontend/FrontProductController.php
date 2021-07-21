<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Admin\Category;
use App\Models\Frontend\Comment;
use App\Models\Frontend\Product;
use App\Models\Frontend\Seller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FrontProductController extends Controller
{
    public function show(){
        $product = Product::where('pstatus',1)->get();
        $categories = Category::all();
        $sellers = Seller::all();
        return view('frontend.frontProduct.showProduct',compact('product','categories','sellers'));
    }
    public function detail($id){
        
        // $product = Products::where('sellers_id', Auth::guard('seller')->id())->with('category','sellers')->get();
        $products = Product::find($id)->with('seller','category')->where('id',$id)->first();

        // dd($products);
        $categories = Category::get();
        $comments = Comment::with('visitor')->where('product_id',$products->id)->get();

        return view('frontend.frontProduct.productDetail',compact('products','categories','comments'));
    }
}
