<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;

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
//index
Route::get('index',[\App\Http\Controllers\HomeController::class,'index']);

//404
Route::view('error','404');
//cart
Route::get('show-cart',[CartController::class,'show_cart']);
Route::post('save-cart',[CartController::class,'save_cart']);
//about
Route::view('about','about');
//checkout
Route::view('checkout','checkout');
//contact
Route::view('contact','contact');
//login
Route::view('login','login');
//account
Route::view('my-account','my-account');
//order
Route::view('order','order');
//shop
Route::get('shop',[\App\Http\Controllers\HomeController::class,'shop']);
//single-product
Route::get('single-product/{id}',[\App\Http\Controllers\ProductController::class,'single_product']);
//wishlist
Route::view('wishlist','wishlist');

//Danh mục sản phẩm
Route::get('danh-muc/{id}',[\App\Http\Controllers\CategoryProductController::class,'show_category']);
//Thương hiệu sản phẩm
Route::get('thuong-hieu/{id}',[\App\Http\Controllers\BrandProductController::class,'show_brand']);


//Admin//
Route::get('login-admin',[\App\Http\Controllers\AdminController::class,'login_admin']);
Route::get('logout',[\App\Http\Controllers\AdminController::class,'logout']);
Route::get('dashboard',[\App\Http\Controllers\AdminController::class,'dashboard']);
Route::post('admin-dashboard',[\App\Http\Controllers\AdminController::class,'admin_dashboard']);

//Category product
Route::get('add-category-product',[\App\Http\Controllers\CategoryProductController::class,'add_category_product']);
Route::get('list-category-product',[\App\Http\Controllers\CategoryProductController::class,'list_category_product']);

Route::get('edit-category-product/{id}',[\App\Http\Controllers\CategoryProductController::class,'edit_category_product']);
Route::get('delete-category-product/{id}',[\App\Http\Controllers\CategoryProductController::class,'delete_category_product']);

Route::get('active-category-product/{id}',[\App\Http\Controllers\CategoryProductController::class,'active_category_product']);
Route::get('unactive-category-product/{id}',[\App\Http\Controllers\CategoryProductController::class,'unactive_category_product']);

Route::post('save-category-product',[\App\Http\Controllers\CategoryProductController::class,'save_category_product']);
Route::post('update-category-product/{id}',[\App\Http\Controllers\CategoryProductController::class,'update_category_product']);


//Brand product
Route::get('add-brand-product',[\App\Http\Controllers\BrandProductController::class,'add_brand_product']);
Route::get('list-brand-product',[\App\Http\Controllers\BrandProductController::class,'list_brand_product']);

Route::get('edit-brand-product/{id}',[\App\Http\Controllers\BrandProductController::class,'edit_brand_product']);
Route::get('delete-brand-product/{id}',[\App\Http\Controllers\BrandProductController::class,'delete_brand_product']);

Route::get('active-brand-product/{id}',[\App\Http\Controllers\BrandProductController::class,'active_brand_product']);
Route::get('unactive-brand-product/{id}',[\App\Http\Controllers\BrandProductController::class,'unactive_brand_product']);

Route::post('save-brand-product',[\App\Http\Controllers\BrandProductController::class,'save_brand_product']);
Route::post('update-brand-product/{id}',[\App\Http\Controllers\BrandProductController::class,'update_brand_product']);


//Product
Route::get('add-product',[\App\Http\Controllers\ProductController::class,'add_product']);
Route::get('list-product',[\App\Http\Controllers\ProductController::class,'list_product']);

Route::get('edit-product/{id}',[\App\Http\Controllers\ProductController::class,'edit_product']);
Route::get('delete-product/{id}',[\App\Http\Controllers\ProductController::class,'delete_product']);

Route::get('active-product/{id}',[\App\Http\Controllers\ProductController::class,'active_product']);
Route::get('unactive-product/{id}',[\App\Http\Controllers\ProductController::class,'unactive_product']);

Route::post('save-product',[\App\Http\Controllers\ProductController::class,'save_product']);
Route::post('update-product/{id}',[\App\Http\Controllers\ProductController::class,'update_product']);
