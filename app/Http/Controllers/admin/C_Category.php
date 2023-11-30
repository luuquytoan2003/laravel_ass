<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\categoryRequest;
use App\Models\Category;
use Illuminate\Http\Request;

class C_Category extends Controller
{
    protected $category;
    public function __construct(){
        $this->category = new Category;
    }
    public function index(){
        $categories = $this->category->where('deleted',0)->get();
        $template = 'admin.categories.index';
        return view('admin.master',compact('template','categories'));
    }
    public function store(categoryRequest $categoryRequest){
        $data = [
            'name' => $categoryRequest->name,
            'description' => $categoryRequest->description
        ];
        $this->category->createCate($data);
        return redirect()->back()->with('success','Thêm danh mục thành công');
    }
    public function update(categoryRequest $categoryRequest, $id){
        $data = [
            'name' => $categoryRequest->name,
            'description' => $categoryRequest->description
        ];
        $this->category->updateCate($data,$id);
        return redirect()->back()->with('success','Sửa danh mục thành công');
    }
    public function destroy($id){
        $this->category->where('id',$id)->update([
            'deleted' => 1
        ]);
        return redirect()->back()->with('success', 'Xóa danh mục thành công');
    }
}
