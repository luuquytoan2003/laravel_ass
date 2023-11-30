<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class C_Product extends Controller
{
    protected $product;
    public function __construct(){
        $this->product = new Product;
    }
    public function index(){
        $products = $this->product->paginate(20);
        $categories = Category::all();
        $template = "admin.products.index";
        return view('admin.master', compact('template','products','categories'));
    }
}
