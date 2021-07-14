<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Admin\Category;
use App\Models\Frontend\Products;
use App\Models\Frontend\Seller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FrontProductController extends Controller
{
    public function show(){
        $product = Products::all();
        $categories = Category::all();
        $sellers = Seller::all();
        return view('frontend.frontProduct.showProduct',compact('product','categories','sellers'));
    }
    public function detail($id){
        
        // $product = Products::where('sellers_id', Auth::guard('seller')->id())->with('category','sellers')->get();
        $product = Products::find($id);
        $sellers = Seller::find($id);

        return view('frontend.frontProduct.productDetail',compact('sellers', 'product'));
    }
}
