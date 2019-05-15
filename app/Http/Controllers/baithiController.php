<?php

namespace App\Http\Controllers;

use App\lophoc;
use App\submit;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Carbon\Carbon;
class baithiController extends Controller
{


    public function show($id,Request $request)
    {
        if( $request->session()->has('id'))
        {
            $datathisinh=DB::table('baihoc')
            ->join('chitietlop_user','baihoc.id_chitietlophoc_monhoc','=','chitietlop_user.id_chitietlophoc_monhoc')
            ->where('baihoc.id',$id)
            ->where('chitietlop_user.id_user',$request->session()->get('id'))
            ->get();
            $datacheck=DB::table('chitietbaihoc')
            ->join('submit','chitietbaihoc.id','=','submit.id_chitietbaihoc')
            ->join('users','submit.id_user','=','users.id')
            ->where('id_baihoc',$id)
            ->where('users.id',$request->session()->get('id'))
            ->get();
            if(count($datacheck)>0)
            {
                $datathisinh=DB::table('baihoc')
                ->join('chitietlop_user','baihoc.id_chitietlophoc_monhoc','=','chitietlop_user.id_chitietlophoc_monhoc')
                ->join('users','chitietlop_user.id_user','=','users.id')
                ->where('baihoc.id',$id)->orderby('chitietlop_user.id_user','asc')->get();
                $point;
                $values;
                for($i=0;$i<count($datathisinh)-1;$i++)
                {
                    if($datathisinh[$i]->id_user==$datathisinh[$i+1]->id_user)
                    {
                        $datathisinh[$i]=NULL;
                    }
                    
                    
                }
                for($i=0;$i<count($datathisinh);$i++)
                {
                        if($datathisinh[$i]!=NULL)
                        {
                            $datasub=DB::table('submit')
                            ->join('chitietbaihoc','submit.id_chitietbaihoc','=','chitietbaihoc.id')
                            ->where('id_user',$datathisinh[$i]->id_user)
                            ->where('id_baihoc',$id)->get();
                            $pointi=0;
                            $valuess=0;
                            foreach($datasub as $j)
                            {
                                $pointi+=$j->ketqua;
                                if($j->ketqua==1)
                                {
                                    $valuess+=$j->diem;
                                }
                            }
                            $point[$i]=$pointi;
                            $values[$i]=$valuess;
                        }
                        else 
                        {
                            $point[$i]=0;
                            $values[$i]=0;
                        }
                }
                for($i=0;$i<count($datathisinh);$i++)
                {
                    for($j=$i+1;$j<count($datathisinh);$j++)
                    {
                        if($values[$j]>$values[$i])
                        {
                            $temp1=$point[$i];
                            $point[$i]=$point[$j];
                            $point[$j]=$temp1;
                            $temp2=$datathisinh[$i];
                            $datathisinh[$i]=$datathisinh[$j];
                            $datathisinh[$j]=$temp2;
                            $temp3=$values[$i];
                            $values[$i]=$values[$j];
                            $values[$j]=$temp3;
                        }
                    }
                }
                return view('page.rankingcontest')->with('data',$datathisinh)->with('point',$point)->with('values',$values);
            }
            else if(count($datathisinh)<1)
            {
                return redirect("/");
            }
            else
            {
                
                $data=DB::table('chitietbaihoc')->where('id_baihoc',$id)->get();
                $dataanw;
                $t=count($data);
                for($i=0;$i<count($data);$i++)
                {
                    $dataanw[$i]=DB::table('dapan')->where('id_chitietbaihoc',$data[$i]->id)->get();
                }
                for($i=0;$i<$t;$i++)
                {
                    $s=rand()%$t;
                    $temp1=$data[$i];
                    $data[$i]=$data[$s];
                    $data[$s]=$temp1;
                    $temp2=$dataanw[$i];
                    $dataanw[$i]=$dataanw[$s];
                    $dataanw[$s]=$temp2;
                    $k=count($dataanw[$i]);
                    for($j=0;$j<$k;$j++)
                    {
                        $s=rand()%$k;
                        $temp3=$dataanw[$i][$j];
                        $dataanw[$i][$j]=$dataanw[$i][$s];
                        $dataanw[$i][$s]=$temp3;
                    }

                }
            
                return view('page.baithi')->with('data',$data)->with('dapan',$dataanw);
            }
        }
        else
        {
            return redirect('/loginview');
        }
        

    }
    public function test($id,Request $request)
    {
        if( $request->session()->has('id'))
        {
            $data=DB::table('chitietbaihoc')->where('id_baihoc',$id)->get();
            $check=1;
            $tinh=0;
            for($j=0;$j<count($data);$j++)
            {
                $check=1;
                $dapan=DB::table('dapan')->where('id_chitietbaihoc',$data[$j]->id)->get();
                if($data[$j]->id_loaitracnghiem==1)
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
                        if($request->input("$i->id")==NULL||$request->input("$i->id")!=$i->luachon)
                        {
                            $check=0;
                            break;
                        }

                    }
                }
                $datasub= new submit();
                $datasub->ketqua=$check;
                $datasub->id_chitietbaihoc=$data[$j]->id;
                $datasub->id_user=$request->session()->get('id');
                $datasub->save();
            }
            $datathisinh=DB::table('baihoc')
            ->join('chitietlop_user','baihoc.id_chitietlophoc_monhoc','=','chitietlop_user.id_chitietlophoc_monhoc')
            ->join('users','chitietlop_user.id_user','=','users.id')
            ->where('baihoc.id',$id)->orderby('chitietlop_user.id_user','asc')->get();
            $point;
            $values;
            for($i=0;$i<count($datathisinh)-1;$i++)
            {
                if($datathisinh[$i]->id_user==$datathisinh[$i+1]->id_user)
                {
                    $datathisinh[$i]=NULL;
                }
                
                
            }
            for($i=0;$i<count($datathisinh);$i++)
                {
                        if($datathisinh[$i]!=NULL)
                        {
                            $datasub=DB::table('submit')
                            ->join('chitietbaihoc','submit.id_chitietbaihoc','=','chitietbaihoc.id')
                            ->where('id_user',$datathisinh[$i]->id_user)
                            ->where('id_baihoc',$id)->get();
                            $pointi=0;
                            $valuess=0;
                            foreach($datasub as $j)
                            {
                                $pointi+=$j->ketqua;
                                if($j->ketqua==1)
                                {
                                    $valuess+=$j->diem;
                                }
                            }
                            $point[$i]=$pointi;
                            $values[$i]=$valuess;
                        }
                        else 
                        {
                            $point[$i]=0;
                            $values[$i]=0;
                        }
                }
            for($i=0;$i<count($datathisinh);$i++)
            {
                for($j=$i+1;$j<count($datathisinh);$j++)
                {
                    if($point[$j]>$point[$i])
                    {
                        $temp1=$point[$i];
                        $point[$i]=$point[$j];
                        $point[$j]=$temp1;
                        $temp2=$datathisinh[$i];
                        $datathisinh[$i]=$datathisinh[$j];
                        $datathisinh[$j]=$temp2;
                    }
                }
            }
            return view('page.rankingcontest')->with('data',$datathisinh)->with('point',$point)->with('values',$values);
        }
        else
        {
            return redirect('/login');
        }
        

    }


}
