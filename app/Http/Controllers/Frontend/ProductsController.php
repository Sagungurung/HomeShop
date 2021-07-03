<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Frontend\Categories;
use App\Models\Frontend\Products;
use App\Models\Frontend\Seller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('seller.products.indexProducts');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Categories::where('status',1)->get();
        $sellers = Seller::pluck('id');
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
            'status'=>'required',
            'pimage'=>'required',
        ]);
        if($request->image){
            $request->validate([
                'image'=>'required|mimes:jpg,jpeg,png,svg,gif|max:5000',
            ]);
            //extension for image
            $extension = $request->image->getClientOriginalExtension();

            //store image
            $image_name = $request->image . time().".".$extension;
            $uploaded = $request->image->move(public_path('/uploads/sellerPhotos/products'), $image_name);
        }
        $products = new Products();
        $products->pname = $request->pname;
        $products->pprice = $request->pprice;
        $products->pcolor = $request->pcolor;
        $products->psize = $request->psize;
        $products->quantity = $request->quantity;
        $products->category_id = $request->category_id;
        $products->status = $request->status;
        $products->image = $image_name;
        $products->seller_id = Auth::sellers()->id;
        $products->save();
        
        return redirect()->route('seller.products.index')->with('success','Product added Successfully.');
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Frontend\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function show(Products $products)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Frontend\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function edit(Products $products)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Frontend\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Products $products)
    {
        dd($products);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Frontend\Products  $products
     * @return \Illuminate\Http\Response
     */
    public function destroy(Products $products)
    {
        //
    }
}
