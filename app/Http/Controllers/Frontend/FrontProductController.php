<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Admin\Category;
use App\Models\Frontend\Product;
use App\Models\Frontend\Seller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FrontProductController extends Controller
{
    public function show(){
        $product = Product::all();
        $categories = Category::all();
        $sellers = Seller::all();
        return view('frontend.frontProduct.showProduct',compact('product','categories','sellers'));
    }
    public function detail($id){
        
        // $product = Products::where('sellers_id', Auth::guard('seller')->id())->with('category','sellers')->get();
        $product = Product::find($id)->with('sellers','category')->get()->first;
        // $sellers = Seller::find($id);
        $categories = Category::get();

        return view('frontend.frontProduct.productDetail',compact('product','categories'));
    }
}
