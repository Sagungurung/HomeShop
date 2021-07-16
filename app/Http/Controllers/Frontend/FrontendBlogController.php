<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Admin\Blog;
use App\Models\Frontend\Seller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FrontendBlogController extends Controller
{
    public function show(){
        
        $blogs = Blog::where('show_in_slider',1)->get();

        return view('frontend.frontBlog.showBlog', compact('blogs'));
    }

    public function detail(Blog $blog){

        // $sellers = Seller::where('sellers_id', Auth::guard('seller')->id())->with('category')->first();
        $seller = Seller::get();
        foreach($seller as $sellers){
            while($sellers->id == $blog->sellers_id)
             return view('frontend.frontBlog.blogDetail',compact('blog','sellers'));
        }
        
        // $sellers =Seller::find($blog->sellers_id)->where($blog->sellers_id, $seller->id())->get()->first();
           
        // $sellers = Seller::find($blog->sellers_id)->where($blog->sellers_id, 'id')->get()->first();
        
    //    $sellers = Seller::find($blog->sellers_id)->where($blog->sellers_id, Auth::guard('seller')->id())->get()->first();
        
        // dd($blogs);
        // return view('frontend.frontBlog.blogDetail',compact('blog','sellers'));

    }
}
