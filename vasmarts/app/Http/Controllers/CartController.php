<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use Gloudemans\Shoppingcart\Cart;
use function Sodium\add;

session_start();


class CartController extends Controller
{
    //
    public function save_cart(Request $request){
    $productID=$request->productid_hidden;
    $qty=$request->qtybutton;
    $product_info=DB::table('products')->where('product_id',$productID)->first();

     $data['id']=$product_info->product_id;
     $data['qty']=$qty;
     $data['name']=$product_info->product_name;
     $data['weight']='123';
     $data['price']=$product_info->product_price;
     $data['options']['image']=$product_info->product_image;


    return Redirect::to('show-cart');
    }

    public function show_cart(){

        $cate_pro=DB::table('category_product')->where('category_status','1')->orderBy('category_id','desc')->get();
        $brand_pro=DB::table('brand_product')->where('brand_status','1')->orderBy('brand_id','desc')->get();

        return view('cart.cart')->with('category',$cate_pro)->with('brand',$brand_pro);
    }
}
