<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\OptionValue;
use Illuminate\Http\Request;

class C_OptionValues extends Controller
{
    //
    protected $optionValues;
    public function __construct(){
        $this->optionValues = new OptionValue;
    }
    public function store(Request $request){
        $data = [
            'value' => $request->input('value'),
            'option_id' => $request->option_id
        ];
        // dd($data);
        $this->optionValues->createOptionValues($data);
        return redirect()->back()->with('success', 'Thêm mới chủng loại thành công');
    }
    public function update(Request $request,$id){
        $data = [
            'value'=>$request->value,
            'option_id'=>$request->option_id
        ];
        $this->optionValues->updateOptionValues($data,$id);
        return back()->with('success','Sửa chủng loại thành công');
    }
    public function destroy($id){
        $this->optionValues->where('id',$id)->delete();
        return back()->with('success', 'Xóa chủng loại thành công');
    }
}
