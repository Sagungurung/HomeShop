<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function dashboard(){
        return view('admin.includes.dashboard');
    }
    public function logout(){
        Auth::logout();
        return redirect()->route('admin.authenticate.login.view');
    }
    public function profile(){
        $admin = Auth::user();
        return view('admin.profile', compact('admin'));
    }
    public function editProfile(Request $request){
        $datas = $request->all();

        $validated = $request->validate([
            'name'=>'required|min:3|max:50',
            'email'=>'required|email|unique:users,email'.$request->id,//same email cannot be used by different users
            'username'=>'nullable|min:5|max:50|unique:users,username'.$request->id,
            'address'=>'required',
            'bio'=>'nullable|max:300',
            'products'=>'required',
        ]);

        $user = User::find($request->id);
        $user->name = $datas['name'];
        $user->email = $datas['email'];
        $user->username = $datas['username'];
        $user->bio = $datas['bio'];
        $user->address = $datas['address'];
        $user->products = $datas['products'];

        $user->update();
        return redirect()->with('success','Profile Updated Successfully.');

        // $user->fill($request->all());
        // $user->update();
    }
}
