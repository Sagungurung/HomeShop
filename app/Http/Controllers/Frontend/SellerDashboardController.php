<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Frontend\Cart;
use App\Models\Frontend\Product;
use App\Models\Frontend\Seller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class SellerDashboardController extends Controller
{
    public function dashboard(){

        $sellers = Auth::guard('seller')->user();
        $carts = Cart::with('product','visitor')->where('visitor_id', Auth::guard('visitor')->user()->id)->get();
        $products = Product::with('seller')->where('seller_id',  $sellers->id)->get();

        return view('seller.dashboard',compact('sellers','carts','products'));

    }
    public function logout(){
        Auth::logout();
        return redirect()->route('seller.login');
    }
    public function profile(){
        $sellers = Auth::guard('seller')->user();
        return view('seller.sellerProfile',compact('sellers'));
    }
    public function settings(){
        $sellers = Auth::guard('seller')->user();
        return view('seller.settings',compact('sellers'));
    }
    public function changeSettings(Request $request){
        $datas = $request->all();
        // dd($datas);

        $validated = $request->validate([
            'firstname'=>'required',
            'lastname'=>'required',
            'phone_no'=>'required',
            'address'=>'required',
            'shopname'=>'required',
            'email'=>'required|email|unique:sellers,email,'.$request->id,//same email cannot be used by different users
            'bio'=>'nullable|max:500',
        ]);
        //default eloquent model
        $sellers = Seller::find($request->id);
        if($request->image){
            $request->validate([
                'image'=>'required|mimes:jpg,jpeg,png,svg,gif|max:2024',
            ]);
            //extension for image
            $extension = $request->image->getClientOriginalExtension();
            //storing new image
            $image_name = Str::slug($request->name) . time().".".$extension;
            $uploaded = $request->image->move(public_path('/uploads/sellerPhotos'),$image_name);
        }
        //removing old image
        if(file_exists("/uploads/sellerPhotos/".$sellers->image)){
            unlink("/uploads/sellerPhotos/".$sellers->image);
        }
  
        $sellers->firstname = $datas['firstname'];
        $sellers->lastname = $datas['lastname'];
        $sellers->phone_no = $datas['phone_no'];
        $sellers->address = $datas['address'];
        $sellers->shopname = $datas['shopname'];
        $sellers->email = $datas['email'];
        $sellers->bio = $datas['bio'];
        $sellers->image = $image_name;

        $sellers->update();
        
        return view('seller.sellerProfile',compact('sellers'))->with('success','Profile Updated Successfully.');
    }
}
