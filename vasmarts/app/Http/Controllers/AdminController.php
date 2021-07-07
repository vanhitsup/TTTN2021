<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
session_start();
class AdminController extends Controller
{
    public  function authlogin(){
        $admin_id= Session::get('admin_id');
        if ($admin_id){
          return  Redirect::to('dashboard');
        }
        else{
            return Redirect::to('login-admin')->send();
        }
    }
    public function login_admin(){
        return view('admin.login');
    }
    public function dashboard(){
        $this->authlogin();
        return view('admin.index');
    }
    public function admin_dashboard(Request $request){
        $this->authlogin();

        $admin_email= $request->admin_email;
        $admin_password=md5($request->admin_password);

        $result=DB::table('admins')->where('admin_email',$admin_email)->where('admin_password',$admin_password)->first();

       if ($result){
         Session::put('admin_name',$result->admin_name);

         Session::put('admin_id',$result->admin_id);

           return Redirect::to('dashboard');
       }
       else{
           Session::put('message','Mật khẩu hoặc tài khoản bị sai, hãy nhập lại');
              return  Redirect::to('login-admin');
       }

    }

    public function logout(){
        $this->authlogin();

        Session::put('admin_name',null);

        Session::put('admin_id',null);
        return Redirect::to('login-admin');
    }
}
