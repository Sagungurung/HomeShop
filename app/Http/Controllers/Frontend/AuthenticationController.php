<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Frontend\Visitor;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class AuthenticationController extends Controller
{
    public function register(){
        // dd($expiry_token = Carbon::now());
        // $user = Visitor::all();
        return view('frontend.authenticate.register');
    }
    public function submitRegister(Request $request){
        // dd($request); //do or die
        DB::beginTransaction();
        $validated = $request->validate([
            'firstname'=>'required|min:3|max:50',
            'lastname'=>'required',
            'phone_no'=>'required',
            'address'=>'required',
            'city'=>'required',
            'email'=>'required|email|unique:visitors',//same email cannot be used by different user
            'password'=>'required|min:6|max:100',
            'confirm-password'=>'required|same:password',
        ]);
        
        $visitor=new Visitor();
        $visitor->firstname = $request->firstname;
        $visitor->lastname = $request->lastname;
        $visitor->phone_no = $request->phone_no;
        $visitor->address = $request->address;
        $visitor->city = $request->city;
        $visitor->email = $request->email;
        $password=bcrypt($request->password);
        $visitor->password = $password;
        $saved = $visitor->save();

        if($saved){
            $visitor = Visitor::where('id',$visitor->id)->first();
            $visitor->verify_token = Str::random(80);
            $visitor->token_expiry = Carbon::now();
            $visitor->update();
        }
        DB::commit();
        return redirect()->route('frontend.authenticate.login')->with(['success'=>'Registered Successfully.']);   
    }

    public function viewLogin(){

        $visitor = Auth::guard('visitor');
       return view('frontend.authenticate.login'); 

    }
    
    public function submitLogin(Request $request){
        // dd($request);
        $request->validate([
            'email'=>'required|email',
            'password'=>'required|min:6|max:20',
        ]);
        // dd($request->all());
        $visitor = Auth::guard('visitor');
        if($visitor->attempt(['email'=>$request->email, 'password'=>$request->password])){
        // return "Email and Password are correct";
        return redirect()->route('frontend.home', compact('visitor'));//calling frontend model function
       }else{
        //    return "false";
            return redirect()->back()->with(['error'=>'Email or Password Incorrect']);
       }
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('frontend.home');
    }
}
