<?php

use App\Http\Controllers\Admin\CategoryController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\RegisterController;
use App\Http\Controllers\admin\BlogController;
use App\Http\Controllers\Frontend\AuthenticationController;

use App\Http\Controllers\Frontend\SellerRegisterController;
use App\Http\Controllers\Frontend\SellerDashboardController;
use App\Http\Controllers\Frontend\SellerCategoriesController;
use App\Models\Dashboard;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


Route::get('/register',[RegisterController::class,'register'])->name('admin.authenticate.register.view');
Route::post('/submit/register',[RegisterController::class,'submitRegister'])->name('admin.authenticate.register.submit');
Route::get('/login',[RegisterController::class,'viewLogin'])->name('admin.authenticate.login.view');
Route::post('/login/submit',[RegisterController::class,'submitlogin'])->name('admin.authenticate.login.submit');

Route::group(['middleware'=>'auth:user'],function(){
    //dashboard
    Route::get('/dashboard',[DashboardController::class,'dashboard'])->name('admin.includes.dashboard');
    Route::get('/logout',[DashboardController::class,'logout'])->name('admin.logout');
    Route::get('/profile',[DashboardController::class,'profile'])->name('admin.profile');
    Route::post('/profile/edit',[DashboardController::class,'editProfile'])->name('admin.edit.profile');
    
    //blog
    Route::get('/blog/index',[BlogController::class,'index'])->name('admin.blog.index');
    Route::get('/blog/create',[BlogController::class,'create'])->name('admin.blog.create');
    Route::post('/blog/store',[BlogController::class,'store'])->name('admin.blog.store');
    Route::get('/blog/edit/{blog}',[BlogController::class,'edit'])->name('admin.blog.edit');
    Route::patch('/blog/update/{blog}',[BlogController::class,'update'])->name('admin.blog.update');
    Route::get('/blog/delete/{blog}',[BlogController::class,'destroy'])->name('admin.blog.delete');

    //category
    Route::get('/category/index',[CategoryController::class,'index'])->name('admin.category.index');
    Route::get('/category/create',[CategoryController::class,'create'])->name('admin.category.create');
    Route::post('/category/store',[CategoryController::class,'store'])->name('admin.category.store');
    Route::get('/category/edit/{id}',[CategoryController::class,'edit'])->name('admin.category.edit');
    Route::patch('/category/update/{id}',[CategoryController::class,'update'])->name('admin.category.update');
    Route::get('/category/delete/{id}',[CategoryController::class,'destroy'])->name('admin.category.delete');
     // Route::resource(); 
});

//frontend register and login functions

Route::get('/visitor/register',[AuthenticationController::class,'register'])->name('frontend.authenticate.register.view');
Route::post('/visitor/submit/register',[AuthenticationController::class,'submitRegister'])->name('frontend.authenticate.register.submit');
Route::get('/visitor/login',[AuthenticationController::class,'viewLogin'])->name('frontend.authenticate.login.view');
Route::post('/visitor/login/submit',[AuthenticationController::class,'submitlogin'])->name('frontend.authenticate.login.submit');

// frontend routes
// Route::group(['middleware'=>'auth:admin'],function(){

// });

//seller resgister and login functions
Route::get('/seller/register',[SellerRegisterController::class,'register'])->name('seller.register.view');
Route::post('/seller/submit/register',[SellerRegisterController::class,'submitRegister'])->name('seller.register.submit');
Route::get('/seller/login',[SellerRegisterController::class,'viewLogin'])->name('seller.login');
Route::post('/seller/login/submit',[SellerRegisterController::class,'submitlogin'])->name('seller.login.submit');

//SellerDashboard
Route::group(['middleware'=>'auth:seller'],function(){
       Route::get('/seller/dashboard',[SellerDashboardController::class,'dashboard'])->name('seller.dashboard');
       Route::get('/seller/logout',[SellerDashboardController::class,'logout'])->name('seller.logout');
       Route::get('/seller/sellerProfile',[SellerDashboardController::class,'profile'])->name('seller.sellerProfile');
       Route::get('/seller/settings',[SellerDashboardController::class,'settings'])->name('seller.settings');
       Route::post('/seller/changeSettings',[SellerDashboardController::class,'changeSettings'])->name('seller.changeSettings');

//Seller Categories
    Route::get('/seller/sellerCategories/index',[SellerCategoriesController::class,'index'])->name('seller.sellerCategories.index');
    Route::get('/seller/sellerCategories/create',[SellerCategoriesController::class,'create'])->name('seller.sellerCategories.create');
    Route::post('/seller/sellerCategories/store',[SellerCategoriesController::class,'store'])->name('seller.sellerCategories.store');
    Route::get('/seller/sellerCategories/edit/{id}',[SellerCategoriesController::class,'edit'])->name('seller.sellerCategories.edit');
    Route::patch('/seller/sellerCategories/update/{id}',[SellerCategoriesController::class,'update'])->name('seller.sellerCategories.update');
    Route::get('/seller/sellerCategories/delete/{id}',[SellerCategoriesController::class,'destroy'])->name('seller.sellerCategories.delete');



});  