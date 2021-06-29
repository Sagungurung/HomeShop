<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Seller;
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

        $seller = new Seller();
        $seller->firstname = $request->firstname;
        $seller->lastname = $request->lastname;
        $seller->phone_no = $request->phone_no;
        $seller->address = $request->address;
        $seller->shopname = $request->shopname;
        $seller->email = $request->email;
        $password=bcrypt($request->password);
        $seller->password = $password;
        $saved = $seller->save();

        return redirect()->back()->with(['success'=>'Registered Successfully.']);
    }

    public function viewLogin(){
        if(Auth::guard('user')->check()){
            return redirect()->route('admin.includes.dashboard');
        }else{
            return view('seller.login');
        // }
    }
}
