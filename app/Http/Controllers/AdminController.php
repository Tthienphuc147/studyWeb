<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function showLogin(){
       return view('admin.page.login');
    }
    public function show(){
        return view('admin.page.adminPage');
     }
    public function LogOut(Request $request){
        $request->session()->flush();
        return redirect('/');

    }
    public function LoginAuth(Request $request){
        $email = $request->input('email');
        $pass=$request->input('password');
        $data=DB::table('users')
        ->rightJoin('phanquyen','phanquyen.id','=','users.role')
        ->where('email',$email)
        ->select('users.*')
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
            foreach($data as $account) {
                if($pass == $account->password ){
                    $request->session()->put('login', true);
                    $request->session()->put('id', $account->id);
                    $request->session()->put('namelogin', $account->name);
                    $request->session()->put('email', $account->email);
                    $request->session()->put('role',$account->role);
                    $success=true;
                    switch($account->role)
                    {
                        case 1:
                            return redirect('/showAdmin');
                        break;
                        case 2:
                            return redirect('/showViewAdmin');
                        break;
                        case 3:
                            return redirect('/showViewAdmin');
                        break;

                    }
                }

            }
            if($success===false){
                return redirect('/showAdmin');
            }

    }
    public function checklogin(Request $request){
        if( $request->session()->has('id') && ($request->session()->has('role')=='admin_role' ||$request->session()->has('role')=='teacher_role') ) {
            return redirect('/');
        }
        else return view('page.dangnhap');
    }

}
