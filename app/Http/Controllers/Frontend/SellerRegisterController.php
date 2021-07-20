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
            'password'=>'required|min:3|max:20',
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

        return redirect()->route('seller.login')->with(['success'=>'Registered Successfully.']);
    }

    public function viewLogin(){

        $sellers = Auth::guard('seller');
        if($sellers->check()){
            return redirect()->route('seller.dashboard',compact('sellers'));
        }else{
            return view('seller.login');
        }
    }
    public function submitLogin(Request $request){
        $request->validate([
            'email'=>'required|email',
            'password'=>'required|min:3|max:20',
        ]);
        if(Auth::guard('seller')->attempt(['email'=>$request->email, 'password'=>$request->password])){
            // return "Email and Password are correct";
            return redirect()->route('seller.dashboard');
    
           }else{
            //    return "false";
                return redirect()->back()->with(['error'=>'Email or Password Incorrect']);
           }
    }
}