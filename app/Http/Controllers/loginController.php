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
        $data=DB::table('users')
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
                    $request->session()->put('id', $account->id);
                    $request->session()->put('namelogin', $account->name);
                    $request->session()->put('email', $account->email);
                   
                    $success=true;
                    
                    return redirect('/');
                    break;

                }
                else if(($pass == $account->password && $account->phanquyen=='admin')){
                    echo 'admin';
                }

            }
            // if($success===false){
            //     return redirect('/loginview');
            // }

    }
    public function checklogin(Request $request){
        if( $request->session()->has('id') && $request->session()->has('role')=='user') {
            return redirect('/');
        }
        else if($request->session()->has('id') && $request->session()->has('role')=='admin'){
            echo 'admin';
        }
        else return view('page.dangnhap');
    }
    public function Logout(Request $request){
        $request->session()->flush();
        return redirect('/');

    }

}
