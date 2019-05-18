<?php

namespace App\Http\Controllers;

use App\lophoc;
use App\submit;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class chitietbaihocController extends Controller
{


    public function show($id,Request $request)
    {
        if( $request->session()->has('id'))
        {
        $data=DB::table('chitietbaihoc')->where('id_baihoc',$id)->get()->toArray();
        $mucdo=DB::table('mucdo')
        ->leftjoin('chitietbaihoc', 'mucdo.id', '=', 'chitietbaihoc.id_mucdo')
        ->where('id_baihoc',$id)
        ->orderby('id_mucdo','asc')
        ->get();
        $temp2;
        $datasubmit=DB::table('submit')->where('id_user',request()->session()->get('id'))->orderBy('id_chitietbaihoc')->where('ketqua',1)->get();
        for($i=0;$i<count($data);$i++){
            $temp=DB::table('submit')->where('id_user',request()->session()->get('id'))->where('id_chitietbaihoc',$data[$i]->id)
            ->where('ketqua',1)->get();
            if(count($temp)<1){
                $temp1=DB::table('submit')->where('id_user',request()->session()->get('id'))->where('id_chitietbaihoc',$data[$i]->id)
                ->where('ketqua',0)->get();
                if(count($temp1)<1){
                    $temp2[$i]=-1;
                }
                else{
                    $temp2[$i]=0;
                }


            }
            else{
                $temp2[$i]=1;
            }
        }



        for($i=1;$i<count($mucdo);$i++)
        {

            if($mucdo[$i]->id_mucdo==$mucdo[$i-1]->id_mucdo)
            {
                $mucdo[$i-1]=NULL;

            }
        }
        $tieude=DB::table('baihoc')->where('id',$id)->first();

        return view('page.baihoccuthe')->with('data',$data)->with('tieude',$tieude)->with('idbaihoc',$id)->with('mucdo',$mucdo)->with('temp',$temp2);
    }
    return Redirect('/loginview');

    }
    public function showbaichitiet($id,$idb,$tinh,Request $request)
    {
        if( $request->session()->has('id'))
        {
        $tinh++;
        $data=DB::table('chitietbaihoc')->where('id_baihoc',$id)->get();
        $tieude=DB::table('baihoc')->where('id',$id)->first();
        $dapan=DB::table('dapan')->where('id_chitietbaihoc',$data[$idb]->id)->get();
        return view('page.chitietbaihoc')->with('data',$data[$idb])->with('tieude',$tieude)
        ->with('dapan',$dapan)->with('anw',0)->with('idb',$idb)->with('tinh',$tinh);
        }
        return Redirect('/loginview');
    }
    public function check($id,$idb,$tinh,Request $request){
        if( $request->session()->has('id'))
        {
        $data=DB::table('chitietbaihoc')->where('id_baihoc',$id)->get();
        $tieude=DB::table('baihoc')->where('id',$data[$idb]->id_baihoc)->first();
        $dapan=DB::table('dapan')->where('id_chitietbaihoc',$data[$idb]->id)->get();
        $check=1;
        $tinh++;
        if($data[$idb]->id_loaitracnghiem==1)
            {


                foreach ($dapan as $i) {

                    if(($request->input("$i->id")==NULL&&$i->dapan==1)||($request->input("$i->id")!=NULL&&$i->dapan==0))
                    {
                        $check=0;
                        break;
                    }
                }
            }
        else
            {
                foreach ($dapan as $i) {
                    if($request->input("$i->id")==NULL||strtoupper($request->input("$i->id"))!=strtoupper($i->luachon))
                    {
                        $check=0;
                        break;
                    }

                }
            }
        $datasub= new submit();
        $datasub->ketqua=$check;
        $datasub->id_chitietbaihoc=$data[$idb]->id;
        $datasub->id_user=$request->session()->get('id');
        $datasub->save();
        if($check==1)
        {
            if($idb<count($data)-1)
            {
                $idb++;
                $tinh=0;
                if(request()->session()->get('id_taikhoan')==1 && $idb>1){

                        return  redirect("/ctbaihoc/$id");
                }
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
    return Redirect('/loginview');
    }



}
