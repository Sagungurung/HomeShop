<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function register(){
        $user = User::all();
        return view('admin.authenticate.register');
    }
    public function submitRegister(Request $request){
        // dd($request); //do or die
        $validated = $request->validate([
            'name'=>'required|min:3|max:50',
            'email'=>'required|email|unique:users',//same email cannot be used by different user
            'password'=>'required|min:6|max:100',
            'confirm-password'=>'required|same:password',
        ]);
        
        $user=new User();
        $user->name = $request->name;
         $user->email = $request->email;
         $password=bcrypt($request->password);
        //  dd($password); 
         $user->password = $password;
         $user->save();
         return redirect()->back()->with(['success'=>'Registered Successfully.']);   
    }

    public function viewLogin(){
        if(Auth::guard('user')->check()){
            return redirect()->route('admin.includes.dashboard');
        }else{
            return view('admin.authenticate.login');
        }
    }
    public function submitLogin(Request $request){
        // dd($request);
        $request->validate([
            'email'=>'required|email',
            'password'=>'required|min:6|max:20',
        ]);

       if(Auth::guard('user')->attempt(['email'=>$request->email, 'password'=>$request->password])){
        // return "Email and Password are correct";
        return redirect()->route('admin.includes.dashboard');

       }else{
        //    return "false";
            return redirect()->back()->with(['error'=>'Email or Password Incorrect']);
       }
    }
}
