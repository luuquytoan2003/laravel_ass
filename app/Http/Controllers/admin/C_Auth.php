<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\authRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;

class C_Auth extends Controller
{
    public function __construct()
    {
    }
    public function index(Request $request)
    {
        
        if (Auth::id() > 0) {
            return redirect()->route('dasboard');
        }
        return view("admin.auth.login");
    }
    public function login(authRequest $request)
    {
        $email = $request->email;
        $password = $request->password;
        if (Auth::attempt(['email'=>$email,'password'=>$password])) {
            // Đăng nhập thành công
            return redirect()->route('dasboard')->with('success', 'Đăng nhập thành công');
        } else {
            // Đăng nhập thất bại
            return back()->with('error','Sai tài khoản hoặc mật khẩu');
        }
    }
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('auth.admin');
    }
}
