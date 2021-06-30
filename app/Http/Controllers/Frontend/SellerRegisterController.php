<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Frontend\Seller as FrontendSeller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SellerRegisterController extends Controller
{
    public function register(){
        return view('seller.register');
    }

    public function submitRegister(Request $request){
        $validated = $request->validate([
            'firstname'=>'required|min:3|max:50',
            'lastname'=>'required',
            'phone_no'=>'required',
            'address'=>'required',
            'email'=>'required|email|unique:sellers',//same email cannot be used by different user
            'password'=>'required|min:3|max:50',
            'confirm-password'=>'required|same:password',
        ]);
     //User model
        $sell = new FrontendSeller();
        $sell->firstname = $request->firstname;
        $sell->lastname = $request->lastname;
        $sell->phone_no = $request->phone_no;
        $sell->address = $request->address;
        $sell->shopname = $request->shopname;
        $sell->email = $request->email;
        $password=bcrypt($request->password);
        $sell->password = $password;
        $saved = $sell->save();

        return redirect()->back()->with(['success'=>'Registered Successfully.']);
    }

    public function viewLogin(){
        // if(Auth::guard('sellers')->check()){
        //     return redirect()->route('admin.includes.dashboard');
        // }else{
            return view('seller.login');
        // }
    }
    public function submitLogin(){
        
    }
}