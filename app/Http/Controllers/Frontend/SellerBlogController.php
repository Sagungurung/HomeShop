<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Admin\Blog;
use App\Models\Admin\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class SellerBlogController extends Controller
{
    public function index(){

        $blogs = Blog::where('sellers_id', Auth::guard('seller')->id())->with('category')->get()->first();
        // $blogs = Blog::with('category')->get();
        // dd($blogs);
        return view('seller.sellerblog.index',compact('blogs'));
    }
    public function create(){
        $categories = Category::where('status',1)->get();
        return view('seller.sellerblog.create',compact('categories'));
    }
    public function store(Request $request){
        $request->validate([
            'title'=>'required|min:3|max:150|unique:blogs',
            'status'=>'required',
            'description'=>'required',
        ]);
        if($request->image){
            $request->validate([
                'image'=>'required|mimes:jpg,jpeg,png,svg,gif|max:5000',
            ]);
            //extension for image
            $extension = $request->image->getClientOriginalExtension();

            //store image
            $image_name = Str::slug($request->title) . time().".".$extension;
            $uploaded = $request->image->move(public_path('/uploads/blogs'), $image_name);
        }
        $blog = new Blog();
        $blog->slug = Str::slug($request->title);
        $blog->title = $request->title;
        $blog->category_id = $request->category_id;
        $blog->description = $request->description;
        $blog->status = $request->status;
        $blog->image = $image_name;
        $blog->user_id = Auth::user()->id;
        $blog->sellers_id = Auth::guard('seller')->id();
        $blog->save();
        
        return redirect()->route('seller.sellerblog.index')->with('success','Blog Created Successfully.');

    }
    
    public function edit(Blog $blog){
        $categories = Category::get();
        return view('seller.sellerblog.edit',compact('blog','categories'));
    }

    public function update(Request $request, Blog $blog){
        $request->validate([
            'title'=>'required|min:3|max:150|unique:blogs,title,'.$blog->id,
            'status'=>'required',
            'description'=>'required',
        ]);

        $blog->title = $request->title;
        $blog->slug = Str::slug($request->title);
        $blog->description = $request->description;
        $blog->category_id = $request->category_id;
        $blog->status = $request->status;
        $blog->user_id = Auth::user()->id;
        $blog->sellers_id = Auth::guard('seller')->id();
        if($request->image){
            $request->validate([
                'image' => 'required|mimes:jpg,jpeg,png,svg,gif|max:3000',
            ]);
            //extension for image
            $extension = $request->image->getClientOriginalExtension();

            //store image
            $image_name = Str::slug($request->title) . time().".".$extension;
            $uploaded = $request->image->move(public_path('/uploads/blogs'), $image_name);
            //remove previous image
            if(file_exists("/uploads/blogs/".$blog->image)){
                unlink("/uploads/blogs/".$blog->image);
            }
            $blog->image = $image_name;
        }
        $blog->update();
        return redirect()->route('seller.sellerblog.index')->with('success','Blog Updated Successfully.');
    }
    public function delete(Blog $blog){
        if(file_exists("/uploads/blogs/".$blog->image)){
            unlink("/uploads/blogs/".$blog->image);
        }
        $blog->delete();
        return redirect()->back()->with('success','Blog Deleted Successfully.');
    }
}
