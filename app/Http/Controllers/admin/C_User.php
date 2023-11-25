<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class C_User extends Controller
{
    public function __construct(){}
    public function index(){
        $users =User::paginate(10);
        $template = 'admin.users.index';
        return view('admin.master',compact('template','users'));
    }
}
