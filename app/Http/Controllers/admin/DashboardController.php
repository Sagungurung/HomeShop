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
        // dd($datas);

        $validated = $request->validate([
            'name'=>'required|min:3|max:50',
            'email'=>'required|email|unique:users,email,'.$request->id,//same email cannot be used by different users
            'username'=>'nullable|min:5|max:50|unique:users,username,'.$request->id,
            'address'=>'nullable|min:3',
            'bio'=>'nullable|max:500',
        ]);

        $user = User::find($request->id);
        if($request->image){
            $request->validate([
                'image'=>'required|mimes:jpg,jpeg,png,svg,gif|max:2024',
            ]);
            $image_name = \Str::slug($request->name) . time();
            $uploaded = $request->image->move(public_path('/uploads/admin_profile'),$image_name);
            // dd($image_name);
        }
        if(file_exists("uploads/admin_profile/".$user->image)){
            unlink("uploads/admin_profile/".$user->image);
        }

        $user->image = $image_name;
        $user->name = $datas['name'];
        $user->email = $datas['email'];
        $user->username = $datas['username'];
        $user->bio = $datas['bio'];
        $user->address = $datas['address'];

        $user->update();
        return redirect()->back()->with('success','Profile Updated Successfully.');

        // $user->fill($request->all());
        // $user->update();
    }
}
