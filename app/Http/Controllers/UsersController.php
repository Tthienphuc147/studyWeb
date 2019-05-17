<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class UsersController extends Controller
{
     public function tong($a,$b){
        return $a+$b;
     }
     public function edit($id,Request $request){
        if( $request->session()->has('id'))
        {
        if ($request->session()->get('id')==$id){
        	$user = User::find($id);    
    	   return view('users.edit')->with('user',$user);
            }
            else return Redirect('/');
        }
        return Redirect('/loginview');
    }
    public function update(Request $request, $id) { 
    	$user = User::find($id); 
    	$user->update([ 
    		'name' => $request->get('name'), 
			'sdt' => $request->get('sdt'), 
			'ngaysinh' => $request->get('ngaysinh'), 
			'password' => $request->get('password')
    	]); 
    	return \Redirect::route('users.edit',array($user->id))->with('message','Thông tin người dùng đã được cập nhật!'); 
    }
    public function showranking(){
        $user=DB::table('users')->get();
        for($j=0;$j<count($user);$j++){
            $id=$user[$j]->id;
            $data= DB::table('users')
            -> where('users.id',$id)
            -> join('submit','users.id','=','submit.id_user')
            -> join('chitietbaihoc','submit.id_chitietbaihoc','=','chitietbaihoc.id')
            -> join('baihoc','chitietbaihoc.id_baihoc','=','baihoc.id')
            -> where('baihoc.id_loaibai',2)->get();
            $chitietbaihoc= DB::table('chitietbaihoc')->get();
            $t=count($chitietbaihoc);
            for($i=1;$i<=$t;$i++) $baihoc[$i]=0;
            for($i=0;$i<count($data);$i++){
                $baihoc[$data[$i]->id_chitietbaihoc]++;
            }
            $diem[$j]=0;
            $sub=DB::table('users')
            -> where('users.id',$id)
            -> join('submit','users.id','=','submit.id_user')
            -> join('chitietbaihoc','submit.id_chitietbaihoc','=','chitietbaihoc.id')
            -> join('baihoc','chitietbaihoc.id_baihoc','=','baihoc.id')
            -> where('baihoc.id_loaibai',2)
            -> where('submit.ketqua',1)->get();
            for($i=0;$i<count($sub);$i++) 
            $diem[$j]+=$sub[$i]->diem-($baihoc[$sub[$i]->id_chitietbaihoc]-1)*5;
        }
        for($i=0;$i<count($user);$i++)
            for($j=0;$j<$i;$j++)
            if ($diem[$j]<$diem[$i]){
                $temp=$diem[$j];
                $diem[$j]=$diem[$i];
                $diem[$i]=$temp;
                $temp2=$user[$j];
                $user[$j]=$user[$i];
                $user[$i]=$temp2;
            }
        return view('users.ranking')->with('data',$user)->with('point',$diem);
    }
    public function show($id)
    {   
        $acctype=DB::table('users')
        -> where('users.id',$id)
        -> join('taikhoan','users.id_taikhoan','=','taikhoan.id')->get();
        $at=$acctype[0]->tenloaitk;
        $user=DB::table('users')->get();
        for($j=0;$j<count($user);$j++){
            $Index=$user[$j]->id;
            $data= DB::table('users')
            -> where('users.id',$Index)
            -> join('submit','users.id','=','submit.id_user')
            -> join('chitietbaihoc','submit.id_chitietbaihoc','=','chitietbaihoc.id')
            -> join('baihoc','chitietbaihoc.id_baihoc','=','baihoc.id')
            -> where('baihoc.id_loaibai',2)->get();
             $chitietbaihoc= DB::table('chitietbaihoc')->get();
            $t=count($chitietbaihoc);
            for($i=1;$i<=$t;$i++) $baihoc[$i]=0;
            for($i=0;$i<count($data);$i++){
                $baihoc[$data[$i]->id_chitietbaihoc]++;
            }
            $diem[$j]=0;
            $sub=DB::table('users')
            -> where('users.id',$Index)
            -> join('submit','users.id','=','submit.id_user')
            -> join('chitietbaihoc','submit.id_chitietbaihoc','=','chitietbaihoc.id')
            -> join('baihoc','chitietbaihoc.id_baihoc','=','baihoc.id')
            -> where('baihoc.id_loaibai',2)
            -> where('submit.ketqua',1)->get();
            for($i=0;$i<count($sub);$i++) 
                $diem[$j]+=$sub[$i]->diem-($baihoc[$sub[$i]->id_chitietbaihoc]-1)*5;
        }
        $rank=1;
        for($i=0;$i<count($diem);$i++)
            if ($diem[$i]>$diem[$id-1]) $rank++;
        return view('users.profile', ['user' => User::findOrFail($id)])->with('diem',$diem[$id-1])->with('acctype',$at)->with('rank',$rank);
    }
    
}
