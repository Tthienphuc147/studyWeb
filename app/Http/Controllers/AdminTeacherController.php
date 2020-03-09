<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Account;
use Carbon\Carbon;

class AdminTeacherController extends Controller
{
    public function checkRole(){
        return request()->session()->has('id') && request()->session()->get('role')==2;
    }
    public function checkRoleTeacher(){
        return request()->session()->has('id') && request()->session()->get('role')==3;
    }
    public function showList(){
        if($this->checkRole()) {
            $data=DB::table('users')->where('role',3)->get();

            return view('admin.page.teacher.list')->with('data',$data);

        }
        else{
            return redirect('/showViewAdmin');
        }

    }
    public function showAddView(){
        if($this->checkRole()) {

            return view('admin.page.teacher.add');

        }
        else{
            return redirect('/showViewAdmin');
        }
    }
    public function add(Request $request){
        if($this->checkRole()) {

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
        $Users->ngaysinh=Carbon::parse($request->ngaysinh)->format('Y-m-d');
        $Users->role=3;
        $Users->id_taikhoan=1;
        $Users->save();
        return redirect('/admin/teacher/addView')->with('thongbao','Đăng ký thành công');

        }
        else{
            return redirect('/showViewAdmin');
        }
    }

    public function showUpdateView($id,Request $request){
        if($this->checkRole()) {

            $data='App\Account'::find($id);
            return view('admin.page.teacher.update')->with('data',$data);

        }
        else{
            return redirect('/showViewAdmin');
        }
    }

    public function update(Request $request){
        if($this->checkRole()) {

            $this->validate($request,
        [
            'email' => 'required',
            'name' => 'required',

            'phone'=>'required|min:10|max:11'
        ],
        [
            'email.required' => 'Bạn chưa nhập Địa chỉ Email!',
            'phone.required' => 'Bạn chưa nhập số điện thoại!',
            'email.email'=>'Bạn chưa nhập đúng định dạng email',
            'phone.min' => 'Số điện thoại gồm tối thiểu 10 số!',
            'phone.max' => 'Số điện thoại gồm tối đa 11 số!'
        ]);

        $Users ='App\Account'::find($request->uId);
        $Users->name=$request->name;
        $Users->email=$request->email;
        $Users->sdt=$request->phone;
        $Users->ngaysinh=Carbon::parse($request->ngaysinh)->format('Y-m-d');
        $Users->role=3;
        $Users->id_taikhoan=1;
        $Users->save();
        return redirect('/admin/teacher/list');

        }
        else{
            return redirect('/showViewAdmin');
        }
    }
    public function delete($id){
        if($this->checkRole()) {
            'App\Account'::destroy($id);

        return redirect('/admin/teacher/list');

        }
        else{
            return redirect('/showViewAdmin');
        }
    }

    public function viewProfile(){
        if($this->checkRoleTeacher()) {

            $data=DB::table('users')->where('id',request()->session()->get('id'))->first();
            return view('admin.page.teacher.viewProfile')->with('data',$data);

        }
        else{
            return redirect('/showViewAdmin');
        }
    }

    public function viewUpdateProfile(){
        if($this->checkRoleTeacher()) {

            $data=DB::table('users')->where('id',request()->session()->get('id'))->first();
            return view('admin.page.teacher.updateProfile')->with('data',$data);

        }
        else{
            return redirect('/showViewAdmin');
        }
    }

    public function updateProfile(Request $request){
        if($this->checkRoleTeacher()) {
            $this->validate($request,
        [
            'email' => 'required',
            'name' => 'required',
            'phone'=>'required|min:10|max:11',
        ],
        [
            'email.required' => 'Bạn chưa nhập Địa chỉ Email!',
            'phone.required' => 'Bạn chưa nhập số điện thoại!',
            'email.email'=>'Bạn chưa nhập đúng định dạng email',
            'phone.min' => 'Số điện thoại gồm tối thiểu 10 số!',
            'phone.max' => 'Số điện thoại gồm tối đa 11 số!',
        ]);

        $Users ='App\Account'::find(request()->session()->get('id'));
        $Users->name=$request->name;
        $Users->email=$request->email;
        $Users->sdt=$request->phone;
        $Users->ngaysinh=Carbon::parse($request->ngaysinh)->format('Y-m-d');
        $Users->role=3;
        $Users->id_taikhoan=1;
        $Users->save();
        return redirect('/admin/teacher/viewProfile');

        }
        else{
            return redirect('/showViewAdmin');
        }
    }
    public function viewChangePassword(){
        if($this->checkRoleTeacher()) {
            $data=DB::table('users')->where('id',request()->session()->get('id'))->first();
            return view('admin.page.teacher.changePassword')->with('data',$data);

        }
        else{
            return redirect('/showViewAdmin');
        }
    }

    public function changePassword(Request $request){
        if($this->checkRoleTeacher()) {
            $this->validate($request,
        [
            'oldPass' => 'required|max:32',
            'newPass' => 'required|max:32',
            'newRePass'=>'required|same:newPass'
        ],
        [
            'oldPass.required' => 'Bạn chưa nhập Mật khẩu!',
            'oldPass.max' => 'Mật Khẩu gồm tối đa 32 ký tự!',
            'newPass.required' => 'Bạn chưa nhập Mật khẩu!',
            'newPass.max' => 'Mật Khẩu gồm tối đa 32 ký tự!',
            'newRePass.required' => 'Bạn chưa nhập Mật khẩu!',
            'newRePass.max' => 'Mật Khẩu gồm tối đa 32 ký tự!',
            'newRePass.same'=>'Mật khẩu mới nhập lại chưa khớp'

        ]);

        $Users ='App\Account'::find(request()->session()->get('id'));
        $Users->password=md5($request->newPass);
        $Users->save();
        return redirect('/admin/teacher/viewProfile');

        }
        else{
            return redirect('/showViewAdmin');
        }
    }



}
