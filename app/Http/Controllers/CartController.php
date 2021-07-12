<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function viewCart(){
        if(Auth::guard('visitor')->check()){
            return view('frontend.cart');
        }else{
            return view('frontend.authenticate.login');
        }
        
    }
    public function checkout(){
        if(Auth::guard('visitor')->check()){
            return view('frontend.checkout');
        }else{
            return view('frontend.home');
        }
       
    }
}
