<?php

namespace App\Http\Controllers;

use App\lophoc;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class chitietbaihocController extends Controller
{


    public function show($id)
    {
        $data=DB::table('chitietbaihoc')->where('id_baihoc',$id)->get();
        $mucdo=DB::table('mucdo')
        ->leftjoin('chitietbaihoc', 'mucdo.id', '=', 'chitietbaihoc.id_mucdo')
        ->where('id_baihoc',$id)
        ->orderby('id_mucdo','asc')
        ->get();
        for($i=1;$i<count($mucdo);$i++)
        {
            
            if($mucdo[$i]->id_mucdo==$mucdo[$i-1]->id_mucdo)
            {
                $mucdo[$i-1]=NULL;
                
            }
        }
        $tieude=DB::table('baihoc')->where('id',$id)->first();
        
        return view('page.baihoccuthe')->with('data',$data)->with('tieude',$tieude)->with('idbaihoc',$id)->with('mucdo',$mucdo);

    }
    public function showbaichitiet($id,$idb,$tinh)
    {
        $tinh++;
        $data=DB::table('chitietbaihoc')->where('id_baihoc',$id)->get();
        $tieude=DB::table('baihoc')->where('id',$id)->first();
        $dapan=DB::table('dapan')->where('id_chitietbaihoc',$data[$idb]->id)->get();
        return view('page.chitietbaihoc')->with('data',$data[$idb])->with('tieude',$tieude)
        ->with('dapan',$dapan)->with('anw',0)->with('idb',$idb)->with('tinh',$tinh);
    }
    public function check($id,$idb,$tinh,Request $request){
        $data=DB::table('chitietbaihoc')->where('id_baihoc',$id)->get();
        $tieude=DB::table('baihoc')->where('id',$data[$idb]->id_baihoc)->first();
        $dapan=DB::table('dapan')->where('id_chitietbaihoc',$data[$idb]->id)->get();
        $check=0;
        $tinh++;
        if($data[$idb]->id_loaitracnghiem==1)
        {
          
            
            foreach ($dapan as $i) {
               
                if(($request->input("$i->id")==NULL&&$i->dapan==1)||($request->input("$i->id")!=NULL&&$i->dapan==0))
                {
                    $check=1;
                    break;
                }
            }
        }
        else
        {
            foreach ($dapan as $i) {
                if($request->input("$i->id")==NULL||$request->input("$i->id")!=$i->luachon)
                {
                    $check=1;
                    break;
                }

            }
        }
        if($check==0)
        {
            if($idb<count($data)-1)
            {
                $idb++;
                $tinh=0;
                $dapan=DB::table('dapan')->where('id_chitietbaihoc',$data[$idb]->id)->get();
                return view('page.chitietbaihoc')->with('data',$data[$idb])->with('tieude',$tieude)
                ->with('dapan',$dapan)->with('anw',0)->with('idb',$idb)->with('tinh',$tinh);

            }
            else
            {
               return  redirect("/ctbaihoc/$id");
            }
        }
        else {
           return view('page.chitietbaihoc')->with('idb',$idb)->with('data',$data[$idb])->with('tieude',$tieude)
           ->with('dapan',$dapan)->with('anw',1)->with('tinh',$tinh);
        
        }
    }



}
