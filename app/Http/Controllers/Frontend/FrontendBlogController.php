<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FrontendBlogController extends Controller
{
    public function show(){
        return view('frontend.frontBlog.showBlog');
    }
    public function detail(){
        return view('frontend.frontBlog.blogDetail');
    }
}
