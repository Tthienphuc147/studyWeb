<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Session;
class RegCourseController extends Controller
{
  
    public function index($id)
    {
       $lop=DB::table('lophoc')->select('id','tenlophoc')->get();  
       $pending=DB::table('chitietlop_user')->where('chitietlop_user.id_user',$id)->where('status',0)
       ->join('chitietlophoc_monhoc','id_chitietlophoc_monhoc','chitietlophoc_monhoc.id')
       ->join('monhoc','chitietlophoc_monhoc.id_monhoc','monhoc.id')
       ->join('lophoc','chitietlophoc_monhoc.id_lophoc','lophoc.id')
       ->select('chitietlop_user.id','monhoc.tenmonhoc','lophoc.tenlophoc')->get();
       return view('users.regcourse')->with('lop',$lop)->with('id',$id)->with('pending',$pending);     
    }
    public function showmon($id, $id2){
        $lop=DB::table('lophoc')->select('id','tenlophoc')->get();   

        $list=DB::table('chitietlop_user')->where('id_user',$id)->get();
       $arr[0]=0;
       foreach($list as $i =>$value){
           $arr[$i]=$value->id_chitietlophoc_monhoc;
       }
        $data=DB::table('chitietlophoc_monhoc')->where('id_lophoc',$id2)
        ->join('monhoc','chitietlophoc_monhoc.id_monhoc','=','monhoc.id')
        ->whereNotIn('chitietlophoc_monhoc.id',$arr)
        ->select('chitietlophoc_monhoc.id','monhoc.tenmonhoc')->get();

        $pending=DB::table('chitietlop_user')->where('chitietlop_user.id_user',$id)->where('status',0)
        ->join('chitietlophoc_monhoc','id_chitietlophoc_monhoc','chitietlophoc_monhoc.id')
        ->join('monhoc','chitietlophoc_monhoc.id_monhoc','monhoc.id')
        ->join('lophoc','chitietlophoc_monhoc.id_lophoc','lophoc.id') 
        ->select('chitietlop_user.id','monhoc.tenmonhoc','lophoc.tenlophoc')->get();       
        $tenlop=DB::table('lophoc')->where('id',$id2)->get();
       return view('users.show')->with('monhoc',$data)->with('lop',$lop)->with('id',$id)->with('pending',$pending)->with('tenlop',$tenlop[0]->tenlophoc); 
       
    }
    public function register($id,$id2)
    {
        $dataInsertToDatabase = array(
            'id_user'  => $id,
            'id_chitietlophoc_monhoc' => $id2,
            'status' => 0
        );
        $insertData = DB::table('chitietlop_user')->insert($dataInsertToDatabase);
	
        //Kiểm tra Insert để trả về một thông báo
        if ($insertData) {
            Session::flash('success', 'Đăng ký thành công!');
        }else {                        
            Session::flash('error', 'Đăng ký thất bại!');
        }
        return redirect("/regcourse/$id");
    }
    public function destroy($id, $id2)
    {
        $deleteData = DB::table('chitietlop_user')->where('id', '=', $id2)->delete();
        if ($deleteData) {
            Session::flash('success', 'Hủy đăng ký thành công!');
        }else {                        
            Session::flash('error', 'Hủy thất bại!');
        }
        return redirect("/regcourse/$id");;
    }
}
