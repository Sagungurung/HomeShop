<?php

namespace App\Http\Controllers;

use App\Models\Admin\Category;
use App\Models\Frontend\Cart;
use App\Models\Frontend\Product;
use App\Models\Frontend\Seller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::get();
        
        $carts = Cart::with('product','visitor')->where('visitor_id', Auth::guard('visitor')->user()->id)->get();
        // dd($carts);

        if(Auth::guard('visitor')->check()){
           
            return view('frontend.cart', compact('categories','carts'));

        }else{
            return view('frontend.authenticate.login');
        }
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
       
        // $visitor = Auth::guard('visitor');
        
        if(Auth::guard('visitor')->check()){

            $cart = new Cart();
            $cart->visitor_id = Auth::guard('visitor')->id();
            $cart->product_id = $request->product_id;
            $cart->quantity = 1;
            $cart->save();
            return redirect()->back();

        }else{

            return view('frontend.authenticate.login');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Frontend\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function show(Cart $cart)
    {   
        //
         
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Frontend\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        $cart = Cart::with('product','visitor')->where('visitor_id', Auth::guard('visitor')->user()->id);

        if($cart){

        $cart = Cart::find($id);
       
        $cart->product_id = $request->product_id;
        $cart ->visitor_id = Auth::guard('visitor')->id();
        $cart->quantity = $request->qty;
        $cart->total = $request->totals;
        $cart->update();

        return redirect()->back();
        }
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Frontend\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Frontend\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cart = Cart::find($id)->delete();

        return redirect()->back();
    

    }

    public function cartInfo(){

        $categories = Category::get();
        $carts = Cart::with('product','visitor')->where('visitor_id', Auth::guard('visitor')->user()->id)->get();
        $products = Product::with('seller')->get();
        
        if(Auth::guard('visitor')->check()){


            return view('frontend.cartInfo', compact('categories','carts','products'));
        }else{
            return view('frontend.home');
        }
    }
}
