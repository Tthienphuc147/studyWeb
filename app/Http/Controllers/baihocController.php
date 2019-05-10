<?php

namespace App\Http\Controllers;

use App\lophoc;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class baihocController extends Controller
{


    public function show($id,$id1)
    {
        $data1=DB::table('chitietlophoc_monhoc')->where('id_lophoc',$id)->where('id_monhoc',$id1)->first();
        $databaihoc = DB::table('baihoc')
            ->where('id_chitietlophoc_monhoc',$data1->id)
            ->get();
            //var_dump($data1);
        return view('page.baihoc')->with('databaihoc',$databaihoc);

    }


}
