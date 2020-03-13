<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\lophoc;
use App\ModelPublic;
use App\monhoc;
use App\DetailClassSubject;

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
             //return dd($data);
        return view('admin.page.subject.listSubject')->with('data',$data)->with('id_lophoc',$id);

        }
        else if(ModelPublic::checkRoleTeacher()) {
            $data=monhoc::join('chitietlophoc_monhoc','chitietlophoc_monhoc.id_monhoc','=','monhoc.id')
            ->join('chitietlop_user','chitietlop_user.id_chitietlophoc_monhoc','=','chitietlophoc_monhoc.id')
            ->join('users','users.id','=','chitietlop_user.id_user')->orderBy('monhoc.id','asc')
            ->where('users.id',request()->session()->get('id'))
            ->where('users.role',3)
            ->where('id_lophoc',$id)->select('chitietlophoc_monhoc.id','users.name','monhoc.tenmonhoc')->get();
            return view('admin.page.subject.listSubject')->with('data',$data)->with('id_lophoc',$id);

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
    //xoa chi tiet monhoc_lophoc
    public function deleteDetailClass($id){
        if(ModelPublic::checkRoleAdmin()) {
            DetailClassSubject::destroy($id);

        return redirect('/admin/class/list');

        }
        else{
            return redirect('/admin/class/list');
        }
    }
    public function showAddSubject($id){
        if(ModelPublic::checkRoleAdmin()) {
            $data=monhoc::join('chitietlophoc_monhoc','monhoc.id','=','chitietlophoc_monhoc.id_monhoc')
            ->where('chitietlophoc_monhoc.id_lophoc',$id)
            ->select('monhoc.*','chitietlophoc_monhoc.id AS id_chitiet')->get();
            //id_chitiet la id cua bang chitietlophoc_monhoc
            $dataSubject=monhoc::select('monhoc.*')->get();
            request()->session()->put('id_lophoc1', $id);

            $data1=array();
            for ($i=0; $i < sizeOf($dataSubject); $i++) {
                $found = false;
                for($j=0;$j<sizeOf($data);$j++){
                    if($dataSubject[$i]['id']==$data[$j]['id']){
                        $found = true;
                        break;
                    }
                }
                if($found==false){
                    array_push($data1,$dataSubject[$i]);
                }
            }
            //return dd($data1);
            return view('admin.page.class.addSubject')->with('data',$data)->with('dataSubject', $data1);

        }
        else{
            return redirect('/admin/class/list');
        }
    }
    public function addSubject(Request $request){
        if(ModelPublic::checkRoleAdmin()) {
        $id=request()->session()->get('id_lophoc1');
        $classDetail=new DetailClassSubject();
        $classDetail->id_monhoc=$request->input('subject');
        $classDetail->id_lophoc=$id;
        $classDetail->save();
        return redirect('/admin/showaddsubject/view/'.$id)->with('thongbao','Thêm môn học thành công');

        }
        else{
            return redirect('/admin/class/list');
        }
    }



}
