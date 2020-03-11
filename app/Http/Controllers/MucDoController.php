<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Session;
class MucDoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    { 
       
        if( !$request->session()->has('id') || $request->session()->get('role')!='2' )
            return redirect('/showadmin');
  
        $getData = DB::table('mucdo')->select('id','tenmucdo')->get();
        return view('admin.page.mucdo.list')->with('list',$getData);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        if( !$request->session()->has('id') || $request->session()->get('role')!='2' )
            return redirect('/showadmin');
        return view('admin.page.mucdo.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if( !$request->session()->has('id') || $request->session()->get('role')!='2' )
            return redirect('/showadmin');
        date_default_timezone_set("Asia/Ho_Chi_Minh");
        $dataInsertToDatabase = array(
            'tenmucdo'  => $request->get('tenmucdo'),
            'created_at' => date('Y-m-d H:i:s'),
		    'updated_at' => date('Y-m-d H:i:s'),
        );
        $insertData = DB::table('mucdo')->insert($dataInsertToDatabase);
	
        //Kiểm tra Insert để trả về một thông báo
        if ($insertData) {
            Session::flash('success', 'Thêm mới mức độ thành công!');
        }else {                        
            Session::flash('error', 'Thêm thất bại!');
        }
        return redirect('mucdo/create');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id, Request $request)
    {
        if( !$request->session()->has('id') || $request->session()->get('role')!='2' )
            return redirect('/showadmin');
        $getData = DB::table('mucdo')->select('id','tenmucdo')->where('id',$id)->get();
        return view('admin.page.mucdo.edit')->with('data',$getData);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        if( !$request->session()->has('id') || $request->session()->get('role')!='2' )
            return redirect('/showadmin');
        date_default_timezone_set("Asia/Ho_Chi_Minh");
        $updateData = DB::table('mucdo')->where('id', $request->id)->update([
            'tenmucdo' => $request->tenmucdo,
		    'updated_at' => date('Y-m-d H:i:s'),
        ]);
        
        //Kiểm tra lệnh update để trả về một thông báo
        if ($updateData) {
            Session::flash('success', 'Sửa mức độ thành công!');
        }else {                        
            Session::flash('error', 'Sửa thất bại!');
        }
        
        //Thực hiện chuyển trang
        return redirect('mucdo');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id, Request $request)
    {
        if( !$request->session()->has('id') || $request->session()->get('role')!='2' )
            return redirect('/showadmin');
        $deleteData = DB::table('mucdo')->where('id', '=', $id)->delete();
            
        if ($deleteData) {
            Session::flash('success', 'Xóa mức độ thành công!');
        }else {                        
            Session::flash('error', 'Xóa thất bại!');
        }
        
        return redirect('mucdo');
    }
}