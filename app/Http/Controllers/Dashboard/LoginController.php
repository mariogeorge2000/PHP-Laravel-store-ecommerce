<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdminLoginRequest;

class LoginController extends Controller
{
    public function login(){
       return view('dashboard.auth.login ');
    }

    public function postLogin(AdminLoginRequest $request){

      //validation
      //check , store , update

       // $remember_me=$request->has('remember_me')? true:false;

        if (auth()->guard('admin')->attempt(['email'=>$request->input("email"),'password'=>$request->input("password")])){
            return redirect()->route('admin.dashboard');
        }
        return redirect()->back()->with(['error'=>'هناك خطأ بالبيانات']);

    }

    public function logout(){
       $guard= $this->getGuard();
       $guard->logout();

       return redirect()->route('admin.login');
    }

    private function getGuard()
    {
        return auth('admin');
    }
}
