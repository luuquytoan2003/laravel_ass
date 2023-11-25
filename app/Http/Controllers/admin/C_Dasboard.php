<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class C_Dasboard extends Controller
{
    public function __construct(){}
    public function index(){
        $template = 'admin.dasboard.index';
        return view("admin.master",compact("template"));
    }
}
