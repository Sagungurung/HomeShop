<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontProductController extends Controller
{
    public function show(){
        return view('frontend.frontProduct.showProduct');
    }
    public function detail(){
        return view('frontend.frontProduct.productDetail');
    }
}
