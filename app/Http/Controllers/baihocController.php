<?php

namespace App\Http\Controllers;

use App\lophoc;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Session;
class baihocController extends Controller
{


    public function show($id,$id1,Request $request)
    {
        
        if( $request->session()->has('id'))
        {
            
            $check=DB::table('chitietlophoc_monhoc')->where('id_lophoc',$id)->where('id_monhoc',$id1)
            ->join('chitietlop_user','chitietlophoc_monhoc.id','chitietlop_user.id_chitietlophoc_monhoc')
            ->where('chitietlop_user.id_user',session()->get('id'))
            ->where('chitietlop_user.status',1)->get();

            if (count($check)==0) {
                Session::flash('error', 'Bạn chưa được phép vào lớp học này do chưa đăng ký hoặc chưa được chấp nhận');
                return redirect("/lophoc/$id");
            }
            $data1=DB::table('chitietlophoc_monhoc')->where('id_lophoc',$id)->where('id_monhoc',$id1)->first();

            $databaihoc = DB::table('loaibaihoc')
            ->join('baihoc','baihoc.id_loaibai','=','loaibaihoc.id')
            ->where('id_chitietlophoc_monhoc',$data1->id)
            ->where('baihoc.id_loaibai',2)
            ->get();
            $datathi=DB::table('loaibaihoc')
            ->join('baihoc','baihoc.id_loaibai','=','loaibaihoc.id')
            ->where('id_chitietlophoc_monhoc',$data1->id)
            ->where('baihoc.id_loaibai',1)
            ->get();
            return view('page.baihoc')->with('databaihoc',$databaihoc)->with('datathi',$datathi);
        }
        return Redirect('/loginview');



    }


}
