<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Option;
use App\Models\OptionValue;
use Illuminate\Http\Request;
use Symfony\Contracts\Service\Attribute\Required;

class C_Option extends Controller
{
    protected $option;
    public function __construct(){
        $this->option = new Option;
    }
    public function index(){
        $option = $this->option->all();
        $template = 'admin.option.index';
        return view('admin.master',compact('template','option'));
    }
    public function store(Request $request){
        $data = [
            'name' => $request->name,
            'visual'=>$request->visual
        ];
        try {
            $this->option->createOp($data);
            return back()->with('success','Thêm thuộc tính thành công');
        } catch (\Throwable $th) {
            echo $th->getMessage();
        }
    }
    public function update(Request $request, $id){
        $data = [
            'name' => $request->name,
            'visual' => $request->visual
        ];
        try {
            $this->option->updateOp($data,$id);
            return back()->with('success','Sửa thuộc tính thành công');
        } catch (\Throwable $th) {
            echo $th->getMessage();
        }
    }
    public function destroy($id){
        try {
            $this->option->where('id', $id)->delete();
            // $this->option->
            return back()->with('success', 'Xóa thuộc tính thành công');
        } catch (\Throwable $th) {
            echo $th->getMessage();
        }
    }
}
