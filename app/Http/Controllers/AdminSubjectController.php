<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\monhoc;
use App\ModelPublic;

class AdminSubjectController extends Controller
{
    
    public function showList(){
        if(ModelPublic::checkRoleAdmin()) {
            $data=monhoc::orderBy('id','desc')->get();
            return view('admin.page.subject.list')->with('data',$data);

        }
        else{
            return redirect('/');
        }

    }
    public function showAddView(){
        if(ModelPublic::checkRoleAdmin()) {

            return view('admin.page.subject.add');

        }
        else{
            return redirect('/');
        }
    }
    public function add(Request $request){
        if(ModelPublic::checkRoleAdmin()) {

            $this->validate($request,
        [
            'tenmonhoc' => 'required'
        ],
        [
            'tenmonhoc.required' => 'Bạn chưa nhập tên môn học!'
        ]);

        $class=monhoc::create($request->all());
        return redirect('/admin/subject/addview')->with('thongbao','Đăng ký thành công');

        }
        else{
            return redirect('/admin/subject/list');
        }
    }

    public function showUpdateView($id,Request $request){
        if(ModelPublic::checkRoleAdmin()) {

            $data=monhoc::find($id);
            return view('admin.page.subject.update')->with('data',$data);

        }
        else{
            return redirect('/admin/subject/list');
        }
    }

    public function update(Request $request){
        if(ModelPublic::checkRoleAdmin()) {

            $this->validate($request,
        [
            'tenmonhoc' => 'required'
        ],
        [
            'tenmonhoc.required' => 'Bạn chưa nhập tên môn học!'
        ]);

        $class=monhoc::find($request->input('id'));
        $class->tenmonhoc=$request->input('tenmonhoc');
        $class->save();
        return redirect('/admin/subject/list');

        }
        else{
            return redirect('/admin/subject/list');
        }
    }
    public function delete($id){
        if(ModelPublic::checkRoleAdmin()) {
            monhoc::destroy($id);

        return redirect('/admin/subject/list');

        }
        else{
            return redirect('/admin/subject/list');}
    }



}
