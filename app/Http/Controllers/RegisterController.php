<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Validator;
use App\Account;

class RegisterController extends Controller
{
    public function showRegister(){
        return view('page.dangky');
    }
    public function register(Request $request){
        $this->validate($request,
        [
            'email' => 'required',
            'name' => 'required',
            'password' => 'required|min:8|max:32',
            'passwordRetype' => 'required|same:password',
            'phone'=>'required'
        ],
        [
            'email.required' => 'Bạn chưa nhập Địa chỉ Email!',
            'phone.required' => 'Bạn chưa nhập số điện thoại!',
            'password.required' => 'Bạn chưa nhập Mật khẩu!',
            'password.min' => 'Mật Khẩu gồm tối thiểu 8 ký tự!',
            'password.max' => 'Mật Khẩu gồm tối đa 32 ký tự!',
            'email.email'=>'Bạn chưa nhập đúng định dạng email',
            'email.unique'=>'Email đã tồn tại',
            'passwordRetype.required'=>'Bạn chưa nhập lại mật khẩu',
            'passwordRetype.same'=>'Mật khẩu nhập lại chưa khớp'
        ]);

        $Users =new Account();
        $Users->name=$request->name;
        $Users->email=$request->email;
        $Users->password=md5($request->password);
        $Users->sdt=$request->phone;
        $Users->ngaysinh=$request->date;
        $Users->role=1;
        $Users->id_taikhoan=1;
        $Users->save();
        return redirect('/showRegister')->with('thongbao','Đăng ký thành công');


    }

}
