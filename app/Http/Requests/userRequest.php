<?php

namespace App\Http\Requests;

use Flasher\Laravel\Http\Request;
use Illuminate\Foundation\Http\FormRequest;

class userRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(Request $request): array
    {
        
        return [
            'name'=>'required',
            'email'=> 'required|email',
            'password'=> 'required',
            'confirm_password'=> 'required',
            'role_id'=> 'required',
            'avata'=> 'image',
            'birthday'=> 'required',
            'phone'=> 'required|min:10|max:15',
            'address'=> 'required',
        ];
    }
    public function messages(): array{
        
        return [
            'name.required'=> 'Bạn chưa nhập tên',
            'email.required'=> 'Bạn chưa nhập email',
            'email.email' => 'Bạn phải nhập đúng định dạng email. Ví dụ abc@gmail.com',
            'password.required'=>'Bạn chưa nhập mật khẩu',
            'confirm_password.required'=> 'Bạn chưa nhập mật khẩu',
            'role_id.required'=> 'Vui lòng chọn trạng thái',
            'avata.image'=> 'Vui lòng chọn ảnh có định dạng .jpg .png .gift ...',
            'birthday.required'=> 'Bạn chưa chọn ngày sinh',
            'phone.required'=> 'Bạn chưa nhập số điện thoại',
            'phone.min'=> 'Vui lòng nhập đúng sđt',
            'phone.max'=> 'Vui lòng nhập đúng sđt',
            'address.required'=> 'Bạn chưa nhập địa chỉ',
        ] ;
    }
}
