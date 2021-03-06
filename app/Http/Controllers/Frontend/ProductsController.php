<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Admin\Category;
use App\Models\Frontend\Product;
use App\Models\Frontend\Seller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
         // $products = Products::with('category')->with('sellers')->get();
        // return view('seller.products.indexProducts',compact('products'));
        $sellers = Auth::guard('seller')->user();
         $product = Product::with('category','seller')->where('seller_id', Auth::guard('seller')->id())->get();
        return view('seller.products.indexProducts',compact('product','sellers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::where('status',1)->get();
        $sellers = Seller::select('id')->user();
        return view('seller.products.createProducts',compact('categories','sellers'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request);
        $request->validate([
            'pname'=>'required|max:50',
            'pprice'=>'required',
            'psize'=>'required',
            'pquantity'=>'required',
            'pstatus'=>'boolean',
        ]);
        if($request->pimage){
            $request->validate([
                'pimage'=>'required|mimes:jpg,jpeg,png,svg,gif|max:5000',
            ]);
            //extension for image
            $extension = $request->pimage->getClientOriginalExtension();

            //store image
            $image_name = Str::slug($request->pimage) . time().".".$extension;
            $request->pimage->move(public_path('/uploads/sellerPhotos/products'), $image_name);
        }
        // dd($image_name);
        $products = new Product();
        $products->pname = $request->pname;
        $products->pprice = $request->pprice;
        $products->pcolor = $request->pcolor;
        $products->psize = $request->psize;
        $products->pquantity = $request->pquantity;
        $products->category_id = $request->category_id;
        $products->sellers_id = Auth::guard('seller')->id();
        $products->pimage = $image_name;
        $products->pstatus = $request->pstatus;
        
        $products->save();
        
        return redirect()->route('seller.products.indexProducts')->with('success','Product added Successfully.');
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Frontend\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function show(Product $products)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Frontend\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $products)
    {
        // dd($products);
        $sellers = Auth::guard('seller')->user();
        $categories = Category::get();
        return view('seller.products.editProducts',compact('products','categories','sellers'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Frontend\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $products)
    {
        $request->validate([
            'pname'=>'required|max:50',
            'pprice'=>'required',
            'psize'=>'required',
            'pquantity'=>'required',
            'pstatus'=>'boolean',
        ]);
            
        // dd($image_name);
        // $products = new Products();
        $products->pname = $request->pname;
        $products->pprice = $request->pprice;
        $products->pcolor = $request->pcolor;
        $products->psize = $request->psize;
        $products->pquantity = $request->pquantity;
        $products->category_id = $request->category_id;
        $products->seller_id = Auth::guard('seller')->id();
        $products->pstatus = $request->pstatus;

        if($request->pimage){
            $request->validate([
                'pimage'=>'required|mimes:jpg,jpeg,png,svg,gif|max:5000',
            ]);
            //extension for image
            $extension = $request->pimage->getClientOriginalExtension();

            //store image
            $image_name = Str::slug($request->pimage) . time().".".$extension;
            $request->pimage->move(public_path('/uploads/sellerPhotos/products'), $image_name);

            if(file_exists("/uploads/sellerPhotos/products".$products->pimage)){
                unlink("/uploads/sellerPhotos/products".$products->pimage);
            }
            $products->pimage = $image_name;
        }
        
        $products->update();
        
        return redirect()->route('seller.products.indexProducts')->with('success','Product updated Successfully.');
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Frontend\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $products)
    {
        if(file_exists("/uploads/sellerPhotos/products".$products->image)){
            unlink("/uploads/sellerPhotos/products".$products->image);
        }
        $products->delete();
        return redirect()->back()->with('success','Products Deleted Successfully.');
    }
}