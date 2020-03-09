<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\lophoc;
use App\ModelPublic;

class AdminClassController extends Controller
{
    
    public function showList(){
        if(ModelPublic::checkRoleAdmin()||ModelPublic::checkRoleTeacher()) {
            $data=lophoc::orderBy('id','desc')->get();
            return view('admin.page.class.list')->with('data',$data);

        }
        else{
            return redirect('/');
        }

    }
    public function showAddView(){
        if(ModelPublic::checkRoleAdmin()) {

            return view('admin.page.class.add');

        }
        else{
            return redirect('/');
        }
    }
    public function add(Request $request){
        if(ModelPublic::checkRoleAdmin()) {

            $this->validate($request,
        [
            'tenlophoc' => 'required'
        ],
        [
            'tenlophoc.required' => 'Bạn chưa nhập tên lớp học!'
        ]);

        $class=lophoc::create($request->all());
        return redirect('/admin/class/addview')->with('thongbao','Đăng ký thành công');

        }
        else{
            return redirect('/admin/class/list');
        }
    }

    public function showUpdateView($id,Request $request){
        if(ModelPublic::checkRoleAdmin()) {

            $data=lophoc::find($id);
            return view('admin.page.class.update')->with('data',$data);

        }
        else{
            return redirect('/admin/class/list');
        }
    }

    public function update(Request $request){
        if(ModelPublic::checkRoleAdmin()) {

            $this->validate($request,
        [
            'tenlophoc' => 'required'
        ],
        [
            'tenlophoc.required' => 'Bạn chưa nhập tên lớp học!'
        ]);

        $class=lophoc::find($request->input('id'));
        $class->tenlophoc=$request->input('tenlophoc');
        $class->save();
        return redirect('/admin/class/list');

        }
        else{
            return redirect('/admin/class/list');
        }
    }
    public function delete($id){
        if(ModelPublic::checkRoleAdmin()) {
            lophoc::destroy($id);

        return redirect('/admin/class/list');

        }
        else{
            return redirect('/admin/class/list');}
    }



}
