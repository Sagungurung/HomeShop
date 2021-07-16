<?php

use App\Http\Controllers\Admin\CategoryController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\RegisterController;
use App\Http\Controllers\admin\BlogController;

use App\Http\Controllers\Frontend\AuthenticationController;
use App\Http\Controllers\Frontend\FrontendController;
use App\Http\Controllers\Frontend\SellerRegisterController;
use App\Http\Controllers\Frontend\SellerDashboardController;
use App\Http\Controllers\Frontend\SellerCategoriesController;
use App\Http\Controllers\Frontend\ProductsController;
use App\Http\Controllers\Frontend\SellerBlogController;

use App\Http\Controllers\Frontend\FrontendBlogController;
use App\Http\Controllers\Frontend\FrontProductController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\FrontCartController;


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


Route::get('/register', [RegisterController::class, 'register'])->name('admin.authenticate.register.view');
Route::post('/submit/register', [RegisterController::class, 'submitRegister'])->name('admin.authenticate.register.submit');
Route::get('/login', [RegisterController::class, 'viewLogin'])->name('admin.authenticate.login.view');
Route::post('/login/submit', [RegisterController::class, 'submitlogin'])->name('admin.authenticate.login.submit');



Route::group(['middleware' => 'auth:user'], function () {
    //dashboard
    Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('admin.includes.dashboard');
    Route::get('/logout', [DashboardController::class, 'logout'])->name('admin.logout');
    Route::get('/profile', [DashboardController::class, 'profile'])->name('admin.profile');
    Route::post('/profile/edit', [DashboardController::class, 'editProfile'])->name('admin.edit.profile');

    //blog
    Route::get('/blog/index', [BlogController::class, 'index'])->name('admin.blog.index');
    Route::get('/blog/create', [BlogController::class, 'create'])->name('admin.blog.create');
    Route::post('/blog/store', [BlogController::class, 'store'])->name('admin.blog.store');

    Route::get('/blog/slider/change/{id}/{show}', [BlogController::class, 'changeSlider'])->name('admin.blog.slider');

    Route::get('/blog/edit/{blog}', [BlogController::class, 'edit'])->name('admin.blog.edit');
    Route::patch('/blog/update/{blog}', [BlogController::class, 'update'])->name('admin.blog.update');
    Route::get('/blog/delete/{blog}', [BlogController::class, 'destroy'])->name('admin.blog.delete');


    //category
    Route::get('/category/index', [CategoryController::class, 'index'])->name('admin.category.index');
    Route::get('/category/create', [CategoryController::class, 'create'])->name('admin.category.create');
    Route::post('/category/store', [CategoryController::class, 'store'])->name('admin.category.store');
    Route::get('/category/edit/{id}', [CategoryController::class, 'edit'])->name('admin.category.edit');
    Route::patch('/category/update/{id}', [CategoryController::class, 'update'])->name('admin.category.update');
    Route::get('/category/delete/{id}', [CategoryController::class, 'destroy'])->name('admin.category.delete');
    // Route::resource(); 
});


//seller resgister and login functions
Route::get('/seller/register', [SellerRegisterController::class, 'register'])->name('seller.register.view');
Route::post('/seller/submit/register', [SellerRegisterController::class, 'submitRegister'])->name('seller.register.submit');
Route::get('/seller/login', [SellerRegisterController::class, 'viewLogin'])->name('seller.login');
Route::post('/seller/login/submit', [SellerRegisterController::class, 'submitlogin'])->name('seller.login.submit');

//SellerDashboard
Route::group(['middleware' => 'auth:seller'], function () {
    Route::get('/seller/dashboard', [SellerDashboardController::class, 'dashboard'])->name('seller.dashboard');
    Route::get('/seller/logout', [SellerDashboardController::class, 'logout'])->name('seller.logout');
    Route::get('/seller/sellerProfile', [SellerDashboardController::class, 'profile'])->name('seller.sellerProfile');
    Route::get('/seller/settings', [SellerDashboardController::class, 'settings'])->name('seller.settings');
    Route::post('/seller/changeSettings', [SellerDashboardController::class, 'changeSettings'])->name('seller.changeSettings');

    //Seller Categories
    Route::get('/seller/sellerCategories/index', [SellerCategoriesController::class, 'index'])->name('seller.sellerCategories.index');
    Route::get('/seller/sellerCategories/create', [SellerCategoriesController::class, 'create'])->name('seller.sellerCategories.create');
    Route::post('/seller/sellerCategories/store', [SellerCategoriesController::class, 'store'])->name('seller.sellerCategories.store');
    Route::get('/seller/sellerCategories/edit/{id}', [SellerCategoriesController::class, 'edit'])->name('seller.sellerCategories.edit');
    Route::patch('/seller/sellerCategories/update/{id}', [SellerCategoriesController::class, 'update'])->name('seller.sellerCategories.update');
    Route::get('/seller/sellerCategories/delete/{id}', [SellerCategoriesController::class, 'destroy'])->name('seller.sellerCategories.delete');

    //ProductController
    Route::get('/seller/products/createProducts', [ProductsController::class, 'create'])->name('seller.products.createProducts');
    Route::get('/seller/products/update', [ProductsController::class, 'update'])->name('seller.products.update');
    Route::post('/seller/products/store', [ProductsController::class, 'store'])->name('seller.products.store');
    Route::get('/seller/products/indexProducts', [ProductsController::class, 'index'])->name('seller.products.indexProducts');
    Route::get('/seller/products/editProducts/{products}', [ProductsController::class, 'edit'])->name('seller.products.editProducts');
    Route::patch('/seller/products/update/{products}', [ProductsController::class, 'update'])->name('seller.products.update');
    Route::get('/seller/products/delete/{products}', [ProductsController::class, 'destroy'])->name('seller.products.delete');

    //BlogController
    Route::get('/seller/sellerblog/index', [SellerBlogController::class, 'index'])->name('seller.sellerblog.index');
    Route::get('/seller/sellerblog/create', [SellerBlogController::class, 'create'])->name('seller.sellerblog.create');
    Route::post('/seller/sellerblog/store', [SellerBlogController::class, 'store'])->name('seller.sellerblog.store');
    Route::get('/seller/sellerblog/edit/{blog}', [SellerBlogController::class, 'edit'])->name('seller.sellerblog.edit');
    Route::patch('/seller/sellerblog/update/{blog}', [SellerBlogController::class, 'update'])->name('seller.sellerblog.update');
    Route::get('/seller/sellerblog/delete/{blog}', [SellerBlogController::class, 'destroy'])->name('seller.sellerblog.delete');
});


// frontend routes

Route::get('/', [FrontendController::class, 'home'])->name('frontend.home');

Route::get('/showBlog', [FrontendBlogController::class, 'show'])->name('frontend.frontBlog.showBlog');
Route::get('/blogDetail/{blog}', [FrontendBlogController::class, 'detail'])->name('frontend.frontBlog.blogDetail');

Route::get('/showProduct', [FrontProductController::class, 'show'])->name('frontend.frontProduct.showProduct');
Route::get('/productDetail', [FrontProductController::class, 'detail'])->name('frontend.frontProduct.productDetail');


//frontend register and login functions

Route::get('/visitor/register', [AuthenticationController::class, 'register'])->name('frontend.authenticate.register.view');
Route::post('/visitor/submit/register', [AuthenticationController::class, 'submitRegister'])->name('frontend.authenticate.register.submit');
Route::get('/visitor/login', [AuthenticationController::class, 'viewLogin'])->name('frontend.authenticate.login');
Route::post('/visitor/login/submit', [AuthenticationController::class, 'submitlogin'])->name('frontend.authenticate.login.submit');

Route::group(['middleware' => 'auth:visitor'], function () {
    Route::get('/cart', [FrontCartController::class, 'viewCart'])->name('frontend.cart');
    Route::get('/checkout', [FrontCartController::class, 'checkout'])->name('frontend.checkout');
});
