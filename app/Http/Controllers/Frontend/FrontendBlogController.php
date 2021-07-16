<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Admin\Blog;
use Illuminate\Http\Request;

class FrontendBlogController extends Controller
{

    public function show(){
        $blogs = Blog::where('show_in_slider',1)->get();

        return view('frontend.frontBlog.showBlog', compact('blogs'));
    }

    public function detail(){
        return view('frontend.frontBlog.blogDetail');
    }
}
