<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Lession;
use App\mucdo;
use App\DetailLession;
use App\DetailClassUser;
use App\TypeLession;
use App\TypeTracNghiem;
use App\ModelPublic;

class AdminDetailLessionController extends Controller
{
    public function checkTeacherInClass($id)
    {
        $data=DetailClassUser::where('id_user',Request()->session()->get('id'))
        ->where('id_chitietlophoc_monhoc',$id)->get();
        return sizeof($data)>0;
    }
    public function showList($id,$id_baihoc){
        if(ModelPublic::checkRoleAdmin()||checkTeacherInClass($id)) {
        $data=Lession::join('chitietbaihoc','baihoc.id','=','chitietbaihoc.id_baihoc')
        ->where('id_baihoc',$id_baihoc)
            ->orderBy('chitietbaihoc.id','desc')->get();
            return view('admin.page.detaillession.list')->with('data',$data)->with('id_chitiet',$id)->with('id_baihoc',$id_baihoc);

        }
        else{
            return redirect('/');
        }

    }
    public function showAddView($id,$id_baihoc){
        if(ModelPublic::checkRoleAdmin()||checkTeacherInClass($id)) {
            $data=mucdo::all();
            $datatype=TypeTracNghiem::all();

            return view('admin.page.detaillession.add')->with('id_chitiet',$id)->with('data',$data)->with('id_baihoc',$id_baihoc)->with('datatype',$datatype);

        }
        else{
            return redirect('/');
        }
    }
    public function add($id,$id_baihoc,Request $request){
        if(ModelPublic::checkRoleAdmin()||checkTeacherInClass($id)) {
            $class=new DetailLession();
            $class->audio=$request->input('audio');
            $class->video=$request->input('video');
            $class->noidungbaihoc=$request->input('noidung');
            $class->noidungdapan=$request->input('noidungdapan');
            if($class->noidungbaihoc=="")$class->noidungbaihoc="chưa nhập";
            if($class->noidungdapan=="")$class->noidungdapan="chưa nhập";
            $class->id_mucdo=$request->input('id_mucdo');
            $class->id_loaitracnghiem=$request->input('id_loaitracnghiem');
            $class->id_baihoc=$id_baihoc;
            $class->anh='1.jpg';
            $class->ten=$request->input('name');
            $class->diem=$request->input('diem');
            $class->save();
            return redirect('/admin/detaillession/list/'.$id.'/'.$id_baihoc);
    
            }
            else{
                return redirect('/admin/detaillession/list/'.$id.'/'.$id_baihoc);
            }
    }

    public function showUpdateView($id_chitiet,$id_baihoc,$id_chitietbaihoc,Request $request){
        if(ModelPublic::checkRoleAdmin()||checkTeacherInClass($id_chitiet)) {

            $data=DetailLession::find($id_chitietbaihoc);
            return view('admin.page.detaillession.update')->with('data',$data)->with('id_chitiet',$id_chitiet)->with('id_baihoc',$id_baihoc);

        }
        else{
            return redirect('/admin/detaillession/list/'.$id.'/'.$id_baihoc);
        }
    }

    public function update($id,$id_baihoc,Request $request){
        if(ModelPublic::checkRoleAdmin()||checkTeacherInClass($id)) {

        $class=DetailLession::find($request->input('id'));
        $class->audio=$request->input('audio');
        $class->video=$request->input('video');
        $class->noidungbaihoc=$request->input('noidung');
        $class->noidungdapan=$request->input('noidungdapan');
        $class->save();
        return redirect('/admin/detaillession/list/'.$id.'/'.$id_baihoc);

        }
        else{
            return redirect('/admin/detaillession/list/'.$id.'/'.$id_baihoc);
        }
    }
    public function delete($id,$id_baihoc,$id2){
        if(ModelPublic::checkRoleAdmin()||checkTeacherInClass($id)) {
            DetailLession::destroy($id2);

            return redirect('/admin/detaillession/list/'.$id.'/'.$id_baihoc);

        }
        else{
            return redirect('/admin/detaillession/list/'.$id.'/'.$id_baihoc);}
    }



}
