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

class AdminUserSubjectController extends Controller
{
    public function checkTeacherInClass($id)
    {
        $data=DetailClassUser::where('id_user',Request()->session()->get('id'))
        ->where('id_chitietlophoc_monhoc',$id)->get();
        return sizeof($data)>0;
    }
    public function showList($id){
        if(ModelPublic::checkRoleAdmin()||checkTeacherInClass($id)) {
            $datasubjectinclassac=DetailClassUser::join('users','chitietlop_user.id_user','=','users.id')
            ->where('role',1)->where('chitietlop_user.status',1)
            ->where('chitietlop_user.id_chitietlophoc_monhoc',$id)
            ->orderBy('id_user','desc')->get();
            $datasubjectinclassde=DetailClassUser::join('users','chitietlop_user.id_user','=','users.id')
            ->where('role',1) ->where('chitietlop_user.status',0)
            ->where('chitietlop_user.id_chitietlophoc_monhoc',$id)
            ->orderBy('id_user','desc')->get();
            $datasubjectinclass=DetailClassUser::join('users','chitietlop_user.id_user','=','users.id')
            ->where('role',1) 
            ->where('chitietlop_user.id_chitietlophoc_monhoc',$id)->orderBy('id_user','desc')->get();
            $datasubjectall=Account::where('role',1)->orderBy('id','desc')->get();
            $datasubjectnot=array();
            for($i=0,$j=0;$i<sizeof($datasubjectinclass)&&$j<sizeof($datasubjectall);){
                if($datasubjectall[$j]->id>$datasubjectinclass[$i]->id_user){
                    array_push($datasubjectnot,$datasubjectall[$j]);
                    $j++;
                }
                else if($datasubjectall[$j]->id<$datasubjectinclass[$i]->id_user){
                    
                    $i++;
                }
                else{
                    $i++;$j++;
                }
            }
            while($j<sizeof($datasubjectall)){
                array_push($datasubjectnot,$datasubjectall[$j]);
                    $j++;
            }
            return view('admin.page.usersubject.list')->with('dataac',$datasubjectinclassac)
            ->with('datade',$datasubjectinclassde)
            ->with('datanot',$datasubjectnot)
            ->with('id_chitiet',$id);

        }
        else {
            
           return redriect('/admin/class/list');

        }
    }
    
    public function add($id,$id1,Request $request){
        if(ModelPublic::checkRoleAdmin()) {
            $data=DetailClassUser::where('id_user',$id1)->where('id_chitietlophoc_monhoc',$id)->first();
            $data->status=1;
            $data->save();
           
        return redirect('/admin/usersubject/list/'.$id);

        }
        else{
            return redirect('/admin/usersubject/list/'.$id);
        }
    }
    public function addac($id,$id1,Request $request){
        if(ModelPublic::checkRoleAdmin()) {
            $data=new DetailClassUser();
            $data->status=1;
            $data->id_user=$id1;
            $data->id_chitietlophoc_monhoc=$id;
            $data->save();
           
        return redirect('/admin/usersubject/list/'.$id);

        }
        else{
            return redirect('/admin/usersubject/list/'.$id);
        }
    }
    public function delete($id,$id1,Request $request){
        if(ModelPublic::checkRoleAdmin()) {
            $data=DetailClassUser::where('id_user',$id1)->where('id_chitietlophoc_monhoc',$id)->first();;
            $data->delete();
           
        return redirect('/admin/usersubject/list/'.$id);

        }
        else{
            return redirect('/admin/usersubject/list/'.$id);
        }
    }
    

    



}
