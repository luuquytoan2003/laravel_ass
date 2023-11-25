<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\authRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class C_Auth extends Controller
{
    public function __construct(){

    }
    public function index(Request $request){
        if(Auth::id()>0){
            return redirect()->route('dasboard');
        }
        return view("admin.auth.login");
    }
    public function login(authRequest $request){
        $credentials = $request->only("email","password");
        if(Auth::attempt($credentials)){
            return redirect()->route('dasboard')->with('success','Đăng nhập thành công');
        }
        return redirect()->route('auth.admin')->with('error','Sai email hoặc mật khẩu');
    }
    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('auth.admin');
    }
}
