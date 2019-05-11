<?php

namespace App\Http\Controllers;

use App\lophoc;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class chitietbaihocController extends Controller
{


    public function show($id)
    {
        $data=DB::table('chitietbaihoc')->where('id_baihoc',$id)->first();
        $dapan=DB::table('dapan')->where('id_chitietbaihoc',$data->id)->get();

        $tieude=DB::table('baihoc')->where('id',$id)->first();
        return view('page.chitietbaihoc')->with('data',$data)->with('tieude',$tieude)->with('dapan',$dapan)->with('anw',0)->with('idb',0);

    }
    public function check($id,$idb,Request $request){
        $data=DB::table('chitietbaihoc')->where('id_baihoc',$id)->get();
        $tieude=DB::table('baihoc')->where('id',$data[$idb]->id_baihoc)->first();
        $dapan=DB::table('dapan')->where('id_chitietbaihoc',$data[$idb]->id)->get();
        $check=0;
        foreach ($dapan as $i) {
            if(($request->input("$i->id")==NULL&&$i->dapan==1)||($request->input("$i->id")!=NULL&&$i->dapan==0))
            {
                $check=1;
                break;
            }
        }
        if($check==0)
        {
            if($idb<count($data)-1)
            {
                $idb++;
                $dapan=DB::table('dapan')->where('id_chitietbaihoc',$data[$idb]->id)->get();
                return view('page.chitietbaihoc')->with('data',$data[$idb])->with('tieude',$tieude)->with('dapan',$dapan)->with('anw',0)->with('idb',$idb);

            }
            else
            {
                return var_dump("Trả lời đúng toàn bộ rồi demo hết bài rồi!!!");
            }
        }
        else {
           return view('page.chitietbaihoc')->with('idb',$idb)->with('data',$data[$idb])->with('tieude',$tieude)->with('dapan',$dapan)->with('anw',1);
        
        }
    }



}
