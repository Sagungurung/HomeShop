<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Admin\Category;
use App\Models\Frontend\Products;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function home(){
        // $categories = Category::where('show_in_menu',1)->get();
        // $product = Products::all();
        // $product =Products::where($id)->get();
        return view('frontend.master');
    }
}
