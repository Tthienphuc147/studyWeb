<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Lession;
use App\DetailClassUser;
use App\TypeLession;
use App\ModelPublic;

class AdminLessionController extends Controller
{
    public function checkTeacherInClass($id)
    {
        $data=DetailClassUser::where('id_user',Request()->session()->get('id'))
        ->where('id_chitietlophoc_monhoc',$id)->get();
        return sizeof($data)>0;
    }
    public function showList($id){
        if(ModelPublic::checkRoleAdmin()||checkTeacherInClass($id)) {
        $data=TypeLession::join('baihoc','baihoc.id_loaibai','=','loaibaihoc.id')
        ->where('id_chitietlophoc_monhoc',$id)
            ->orderBy('baihoc.id','desc')->get();
            return view('admin.page.lession.list')->with('data',$data)->with('id_chitiet',$id);

        }
        else{
            return redirect('/');
        }

    }
    public function showAddView($id){
        if(ModelPublic::checkRoleAdmin()||checkTeacherInClass($id)) {
            $data=TypeLession::all();

            return view('admin.page.lession.add')->with('id_chitiet',$id)->with('data',$data);

        }
        else{
            return redirect('/');
        }
    }
    public function add($id,Request $request){
        if(ModelPublic::checkRoleAdmin()||checkTeacherInClass($id)) {

            $this->validate($request,
        [
            'tenbaihoc' => 'required'
        ],
        [
            'tenbaihoc.required' => 'Bạn chưa nhập tên môn học!'
        ]);
        $class=new Lession();
        $class->id_chitietlophoc_monhoc=$id;
        $class->anh="1.jpg";
        $class->id_loaibai=$request->input('id_loaibaihoc');
        $class->tenbaihoc=$request->input('tenbaihoc');
        $class->created_at=$request->input('created_at');
        $class->thoigian=$request->input('thoigian');
        $class->soluong=$request->input('soluong');
        $class->save();
        return redirect('/admin/lession/list/'.$id);

        }
        else{
            return redirect('/admin/lession/list'.$id);
        }
    }

    public function showUpdateView($id_chitiet,$id_baihoc,Request $request){
        if(ModelPublic::checkRoleAdmin()||checkTeacherInClass($id_chitiet)) {

            $data=Lession::find($id_baihoc);
            return view('admin.page.lession.update')->with('data',$data)->with('id_chitiet',$id_chitiet);

        }
        else{
            return redirect('/');
        }
    }

    public function update($id,Request $request){
        if(ModelPublic::checkRoleAdmin()||checkTeacherInClass($id)) {

            $this->validate($request,
        [
            'tenbaihoc' => 'required'
        ],
        [
            'tenbaihoc.required' => 'Bạn chưa nhập tên môn học!'
        ]);
        $class=Lession::find($request->input('id'));
        $class->tenbaihoc=$request->input('tenbaihoc');
        $class->created_at=$request->input('created_at');
        $class->thoigian=$request->input('thoigian');
        $class->soluong=$request->input('soluong');
        $class->save();
        return redirect('/admin/lession/list/'.$id);

        }
        else{
            return redirect('/admin/lession/list'.$id);
        }
    }
    public function delete($id,$id1){
        if(ModelPublic::checkRoleAdmin()||checkTeacherInClass($id)) {
            Lession::destroy($id1);

        return redirect('/admin/lession/list/'.$id);

        }
        else{
            return redirect('/admin/lession/list/'.$id);}
    }



}
