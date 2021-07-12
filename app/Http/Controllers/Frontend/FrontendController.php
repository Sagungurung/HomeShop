<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Admin\Category;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function home(){
        $categories = Category::where('show_in_menu')->get();
        return view('frontend.master',compact('categories'));
    }
}
