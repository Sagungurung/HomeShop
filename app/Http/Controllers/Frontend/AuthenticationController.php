<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Frontend\Visitor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthenticationController extends Controller
{
    public function register(){
        $user = Visitor::all();
        return view('frontend.authenticate.register');
    }
    public function submitRegister(Request $request){
        // dd($request); //do or die
        // dd($request);
        $validated = $request->validate([
            'name'=>'required|min:3|max:50',
            'email'=>'required|email|unique:visitors',//same email cannot be used by different user
            'password'=>'required|min:6|max:100',
            'confirm-password'=>'required|same:password',
        ]);
        
        $visitor=new Visitor();
        $visitor->name = $request->name;
        $visitor->email = $request->email;
        $password=bcrypt($request->password);
        //  dd($password); 
        $visitor->password = $password;
        $visitor->save();
        return redirect()->back()->with(['success'=>'Registered Successfully.']);   
    }

    public function viewLogin(){
        if(Auth::guard('visitor')->check()){
            return redirect()->route('frontend.includes.dashboard');
        }else{
            return view('frontend.authenticate.login');
        }
    }
    public function submitLogin(Request $request){
        // dd($request);
        $request->validate([
            'email'=>'required|email',
            'password'=>'required|min:6|max:20',
        ]);
        // dd($request->all());
       if(Auth::guard('visitor')->attempt(['email'=>$request->email, 'password'=>$request->password])){
        // return "Email and Password are correct";
        return "true";
       }else{
        //    return "false";
            return redirect()->back()->with(['error'=>'Email or Password Incorrect']);
       }
    }
}
