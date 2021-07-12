<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Admin\Category;
use App\Models\Frontend\Products;
use App\Models\Frontend\Seller;
use Illuminate\Http\Request;

class FrontProductController extends Controller
{
    public function show(){
        $product = Products::all();
        $categories = Category::all();
        $sellers = Seller::all();
        return view('frontend.frontProduct.showProduct',compact('product','categories','sellers'));
    }
    public function detail(){
        return view('frontend.frontProduct.productDetail');
    }
}
