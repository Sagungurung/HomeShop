<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SellerDashboardController extends Controller
{
    public function dashboard(){
        return view('seller.dashboard');
    }
    public function logout(){
        Auth::logout();
        return redirect()->route('seller.login');
    }
    public function profile(){
        $sellers = Auth::guard('seller');
        return view('seller.sellerProfile',compact('sellers'));
    }
}
