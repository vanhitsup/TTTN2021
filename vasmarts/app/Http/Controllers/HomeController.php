<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
session_start();
class HomeController extends Controller
{
    //
    public function index(){

//        $list_product= DB::table('products')
//            ->join('category_product','category_product.category_id','=','products.category_id')
//            ->join('brand_product','brand_product.brand_id','=','products.brand_id')
//            ->orderby('products.product_id','desc')->get();

        $list_product=DB::table('products')->where('product_status','1')
                      ->orderBy('product_id','desc')->limit(5)->get();
             return view('index')->with('list_product',$list_product);
    }
    public function shop(){
        $cate_pro=DB::table('category_product')->where('category_status','1')->orderBy('category_id','desc')->get();
        $brand_pro=DB::table('brand_product')->where('brand_status','1')->orderBy('brand_id','desc')->get();
        $all_product=DB::table('products')->where('product_status','1')->get();
        return view('shop')->with('category',$cate_pro)->with('brand',$brand_pro)->with('all_product',$all_product);
    }
}
