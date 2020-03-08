<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Validator;

class loginController extends Controller
{
    public function show(){
        return view('page.dangnhap');
    }
    public function LoginAuth(Request $request){
        $email = $request->input('email');
        $pass=$request->input('password');
        $data=DB::table('users') ->join('chitietlop_user','users.id','=','chitietlop_user.id_user')->join('chitietlophoc_monhoc','chitietlop_user.id_chitietlophoc_monhoc','=','chitietlophoc_monhoc.id')
        ->where('email',$email)
        ->get();

        $this->validate($request,
            [
                'email' => 'required',
                'password' => 'required|min:1|max:32'
            ],
            [
                'email.required' => 'Bạn chưa nhập Địa chỉ Email!',
                'password.required' => 'Bạn chưa nhập Mật khẩu!',
                'password.min' => 'Mật Khẩu gồm tối thiểu 6 ký tự!',
                'password.max' => 'Mật Khẩu gồm tối đa 32 ký tự!'
            ]);
                $success=false;
                var_dump($data);
            foreach($data as $account) {
                if($pass == $account->password ){
                    $request->session()->put('login', true);
                    $request->session()->put('id', $account->id_user);
                    $request->session()->put('namelogin', $account->name);
                    $request->session()->put('email', $account->email);
                    $request->session()->put('id_lophoc',$account->id_lophoc);
                    $request->session()->put('id_taikhoan',$account->id_taikhoan);
                    $success=true;

                    return redirect('/');
                    break;

                }

            }
            if($success===false){
                return redirect('/loginview');
            }

    }
    public function checklogin(Request $request){
        if( $request->session()->has('id')) {
            return redirect('/');
        }
        else return view('page.dangnhap');
    }
    public function Logout(Request $request){
        $request->session()->flush();
        return redirect('/');

    }

}
