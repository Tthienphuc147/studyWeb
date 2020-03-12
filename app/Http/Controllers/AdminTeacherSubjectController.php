<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\lophoc;
use App\ModelPublic;
use App\monhoc;
use App\DetailClassSubject;
use App\Account;
use App\DetailClassUser;

class AdminTeacherSubjectController extends Controller
{

    public function showList($id){
        if(ModelPublic::checkRoleAdmin()) {
            $datasubjectinclass=DetailClassSubject::where('id_lophoc',$id)->orderBy('id_monhoc','desc')->get();
            $datasubjectall=monhoc::orderBy('id','desc')->get();
            $datasubject=array();
            for($i=0,$j=0;$i<sizeof($datasubjectinclass)&&$j<sizeof($datasubjectall);){
                if($datasubjectall[$j]->id>$datasubjectinclass[$i]->id_monhoc)$j++;
                else {
                    array_push($datasubject,$datasubjectall[$j]);
                    $i++;
                    $j++;
                }
            }
            $user=Account::where('role',3)->get();
            return view('admin.page.teachersubject.list')->with('data',$datasubject)->with('listuser',$user)
            ->with("id_lophoc",$id);

        }
        else {
            
           return redriect('/admin/class/list');

        }
    }
    
    public function add(Request $request,$id){
        if(ModelPublic::checkRoleAdmin()) {
            $data=new DetailClassSubject();
            $data->id_monhoc=$request->input('monhoc');
            $data->id_lophoc=$id;
            $data->save();
            $data=DetailClassSubject::orderby('id','desc')->first();
            $datatteaclass=new DetailClassUser();
            $datatteaclass->id_chitietlophoc_monhoc=$data->id;
            $datatteaclass->id_user=$request->input('teacher');
            $datatteaclass->save();
           
        return redirect('/admin/class/showlistsubject/'.$id);

        }
        else{
            return redirect('/admin/class/list');
        }
    }

    



}
