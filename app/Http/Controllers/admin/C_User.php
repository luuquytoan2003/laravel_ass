<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\userRequest;
use App\Models\User;
use Illuminate\Hashing\BcryptHasher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class C_User extends Controller
{
    protected $user;
    public function __construct(){
        $this->user = new User();
    }

    public function index(){
        $users = $this->user->where('deleted',0)->paginate(20);
        $template = 'admin.users.index';
        return view('admin.master',compact('template','users'));
    }

    public function create(){
        $template = 'admin.users.create';
        return view('admin.master',compact('template'));
    }

    public function store(userRequest $request){
        
        $user = $this->user->where('email',$request->input('email'))->first();
        if(isset($user)){
            return back()->withErrors(['email' => 'Email đã tồn tại']);
        }
        if ($request->input('password') !== $request->input('confirm_password')) {
            return back()->withErrors(['confirm_password' => 'Hai mật khẩu không khớp']);
        }
        if($request->hasFile('avata')){
            $filename = time() . '_' . $request->file('avata')->getClientOriginalName();
            $uploadfile = $request->file('avata')->storeAs('avataUser', $filename,'public');
        }
        else{
            $uploadfile = null;
        }
        $data = [
            'name'=> $request->input('name'),
            'email'=> $request->input('email'),
            'password'=> $request->input('password'),
            'birthday'=>$request->input('birthday'),
            'avata'=> $uploadfile,
            'phone'=> $request->input('phone'),
            'address'=> $request->input('address'),
            'role_id'=> $request->input('role_id'),
        ];
        try {
            $this->user->addUser($data);
             return back()->with('success','Thêm mới thành công');
        } catch (\Throwable $th) {
            return back()->with(['errors'=> 'thêm thất bại']);
        }
    }
    public function edit($id){
        $user = $this->user::find($id);
        $template = 'admin.users.update';
        return view('admin.master', compact('template', 'user'));
    }
    public function update(userRequest $request, $id){
        $user = $this->user::find($id);
        // $useremail = $this->user->where('email', $request->input('email'))->first();
        // if (isset($useremail)) {
        //     return back()->withErrors(['email' => 'Email đã tồn tại']);
        // }
        if ($request->hasFile('avata')) {
            Storage::delete('/public/'.$user->avata);
            $filename = time() . '_' . $request->file('avata')->getClientOriginalName();
            $uploadfile = $request->file('avata')->storeAs('avataUser', $filename, 'public');
        } else {
            $uploadfile = $user->avata;
        }
        $data = [
            'name' => $request->input('name'),
            'email' => $request->input('email'),
            'birthday' => $request->input('birthday'),
            'avata' => $uploadfile,
            'phone' => $request->input('phone'),
            'address' => $request->input('address'),
            'role_id' => $request->input('role_id'),
        ];
        try {
            $this->user->updateUser($data,$id);
            return back()->with('success', 'Sửa  thành công');
        } catch (\Throwable $th) {
            return back()->with(['errors' => 'Sửa thất bại']);
        }
    }
    public function destroy($id){
        try{
            $this->user->where('id', $id)->update([
                'deleted' => '1',
            ]);
            return back()->with('success','Xóa thành công');
        }
        catch (\Exception $e){
            return back()->with('error', $e->getMessage());
        }
    }
}
