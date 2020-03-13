<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Lession;
use App\mucdo;
use App\Anwser;
use App\DetailLession;
use App\DetailClassUser;
use App\TypeLession;
use App\TypeTracNghiem;
use App\ModelPublic;

class AdminAnwDetailLessionController extends Controller
{
    public function checkTeacherInClass($id)
    {
        $data=DetailClassUser::where('id_user',Request()->session()->get('id'))
        ->where('id_chitietlophoc_monhoc',$id)->get();
        return sizeof($data)>0;
    }
    public function showList($id,$id_baihoc,$id_chitietbaihoc){
        if(ModelPublic::checkRoleAdmin()||checkTeacherInClass($id)) {
        $data=DetailLession::join('dapan','dapan.id_chitietbaihoc','=','chitietbaihoc.id')
        ->where('id_chitietbaihoc',$id_chitietbaihoc)
            ->orderBy('dapan.id','desc')->get();
            return view('admin.page.anwdetaillession.list')->with('data',$data)->with('id_chitiet',$id)
            ->with('id_baihoc',$id_baihoc)
            ->with('id_chitietbaihoc',$id_chitietbaihoc);

        }
        else{
            return redirect('/');
        }

    }
    public function showAddView($id,$id_baihoc,$id_chitietbaihoc){
        if(ModelPublic::checkRoleAdmin()||checkTeacherInClass($id)) {
            

            return view('admin.page.anwdetaillession.add')->with('id_chitiet',$id)->with('id_baihoc',$id_baihoc)
            ->with('id_chitietbaihoc',$id_chitietbaihoc);

        }
        else{
            return redirect('/admin/anwdetaillession/list/'.$id.'/'.$id_baihoc.'/'.$id_chitietbaihoc);
        }
    }
    public function add($id,$id_baihoc,$id_chitietbaihoc,Request $request){
        if(ModelPublic::checkRoleAdmin()||checkTeacherInClass($id)) {
            $class=new Anwser();
        $class->dapan=$request->input('dapan');
        $class->luachon=$request->input('luachon');
        $class->id_chitietbaihoc=$id_chitietbaihoc;
        $class->save();
        return redirect('/admin/anwdetaillession/list/'.$id.'/'.$id_baihoc.'/'.$id_chitietbaihoc);

        }
        else{
            return redirect('/admin/anwdetaillession/list/'.$id.'/'.$id_baihoc.'/'.$id_chitietbaihoc);
        }
    }

    public function showUpdateView($id_chitiet,$id_baihoc,$id_chitietbaihoc,$id_dapan,Request $request){
        if(ModelPublic::checkRoleAdmin()||checkTeacherInClass($id_chitiet)) {

            $data=Anwser::find($id_dapan);
            return view('admin.page.anwdetaillession.update')->with('data',$data)->with('id_chitiet',$id_chitiet)
            ->with('id_baihoc',$id_baihoc)->with('id_chitietbaihoc',$id_chitietbaihoc);

        }
        else{
            return redirect('/admin/anwdetaillession/list/'.$id.'/'.$id_baihoc.'/'.$id_chitietbaihoc);
        }
    }

    public function update($id,$id_baihoc,$id_chitietbaihoc,Request $request){
        if(ModelPublic::checkRoleAdmin()||checkTeacherInClass($id)) {

        $class=Anwser::find($request->input('id'));
        $class->dapan=$request->input('dapan');
        $class->luachon=$request->input('luachon');
        $class->save();
        return redirect('/admin/anwdetaillession/list/'.$id.'/'.$id_baihoc.'/'.$id_chitietbaihoc);

        }
        else{
            return redirect('/admin/anwdetaillession/list/'.$id.'/'.$id_baihoc.'/'.$id_chitietbaihoc);
        }
    }
    public function delete($id,$id_baihoc,$id_chitietbaihoc,$id2){
        if(ModelPublic::checkRoleAdmin()||checkTeacherInClass($id)) {
            Anwser::destroy($id2);

            return redirect('/admin/anwdetaillession/list/'.$id.'/'.$id_baihoc.'/'.$id_chitietbaihoc);

        }
        else{
            return redirect('/admin/anwdetaillession/list/'.$id.'/'.$id_baihoc.'/'.$id_chitietbaihoc);}
    }



}
