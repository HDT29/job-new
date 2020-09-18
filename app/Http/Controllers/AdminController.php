<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use Session;
use Illuminate\Support\Facades\Redirect;
Session_start();
class AdminController extends Controller
{
    public function  index(){
        return view('admin_login');
    }
    public function dashboad(){
        return view('admin.dashboad');
    }
    public function login(Request $request){
       $admin_email  = $request->admin_email;
       $admin_password = md5($request->admin_password);

       $result = DB::table('tk_admin')->where('admin_email',$admin_email)->where('admin_password',$admin_password)->first();
       if ($result){
           Session::put('admin_name',$result->admin_name);
           Session::put('admin_id',$result->admin_id);
           return Redirect::to('/dashboad');
       }else{
           Session::put('message','Mật khẩu hoặc tài khoản không đúng');
           return Redirect::to('/admin');
       }

    }
    public function logout(){
        Session::put('admin_email',null);
        Session::put('admin_password',null);
        return Redirect::to('/admin');
    }
}
