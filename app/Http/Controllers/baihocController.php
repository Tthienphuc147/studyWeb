<?php

namespace App\Http\Controllers;

use App\lophoc;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Carbon\Carbon;
class baihocController extends Controller
{


    public function show($id,$id1,Request $request)
    {
        if( $request->session()->has('id'))
        {
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
