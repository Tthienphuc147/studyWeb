<?php

namespace App\Http\Controllers;

use App\lophoc;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class LophocController extends Controller
{


    public function show($id,Request $request)
    {
        if( $request->session()->has('id'))
        {
        $datamonhoc = DB::table('monhoc')
            ->join('chitietlophoc_monhoc', 'monhoc.id', '=', 'chitietlophoc_monhoc.id_monhoc')
            ->join('lophoc', 'lophoc.id', '=', 'chitietlophoc_monhoc.id_lophoc')
            ->select('*')
            ->where('lophoc.id',$id)
            ->get();
        return view('page.lophoc')->with('datamonhoc',$datamonhoc)->with('idlophoc',$id);
        }
        return Redirect('/loginview');

    }


}
