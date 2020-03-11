<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\lophoc;
use App\ModelPublic;
use App\monhoc;

class AdminClassController extends Controller
{

    public function showList(){
        if(ModelPublic::checkRoleAdmin()) {
            $data=lophoc::orderBy('id','asc')->get();
            return view('admin.page.class.list')->with('data',$data);

        }
        else if(ModelPublic::checkRoleTeacher()) {
            $data=lophoc::join('chitietlophoc_monhoc','chitietlophoc_monhoc.id_lophoc','=','lophoc.id')
            ->join('chitietlop_user','chitietlop_user.id_chitietlophoc_monhoc','=','chitietlophoc_monhoc.id')
            ->join('users','users.id','=','chitietlop_user.id_user')->orderBy('lophoc.id','asc')
            ->where('users.role',3)
            ->where('users.id',request()->session()->get('id'))
            ->select('lophoc.*')->distinct()->get();
           //return dd($data);
           return view('admin.page.class.list')->with('data',$data);

        }
        return redirect('/');
    }
    public function showListSubject($id){
        if(ModelPublic::checkRoleAdmin()) {
            $data=monhoc::join('chitietlophoc_monhoc','chitietlophoc_monhoc.id_monhoc','=','monhoc.id')
             ->join('chitietlop_user','chitietlop_user.id_chitietlophoc_monhoc','=','chitietlophoc_monhoc.id')->orderBy('monhoc.id','asc')->where('id_lophoc',$id)
             ->join('users','users.id','=','chitietlop_user.id_user')
             ->select('chitietlophoc_monhoc.id','users.name','monhoc.tenmonhoc')->where('id_lophoc',$id)->get();
            return view('admin.page.subject.listSubject')->with('data',$data);

        }
        else if(ModelPublic::checkRoleTeacher()) {
            $data=monhoc::join('chitietlophoc_monhoc','chitietlophoc_monhoc.id_monhoc','=','monhoc.id')
            ->join('chitietlop_user','chitietlop_user.id_chitietlophoc_monhoc','=','chitietlophoc_monhoc.id')
            ->join('users','users.id','=','chitietlop_user.id_user')->orderBy('monhoc.id','asc')
            ->where('users.id',request()->session()->get('id'))
            ->where('users.role',3)
            ->where('id_lophoc',$id)->select('chitietlophoc_monhoc.id','users.name','monhoc.tenmonhoc')->get();
            return view('admin.page.subject.listSubject')->with('data',$data);

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
