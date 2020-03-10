<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Session;
class loaibaihocController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    { 
       // echo $request->session()->has('id');
       
        if( !$request->session()->has('id') || $request->session()->get('role')!='2' )
            return redirect('/showadmin');
  
        $getData = DB::table('loaibaihoc')->select('id','tenloaibaihoc')->get();
        return view('admin.page.loaibaihoc.list')->with('list',$getData);
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
        return view('admin.page.loaibaihoc.create');
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
        $dataInsertToDatabase = array(
            'tenloaibaihoc'  => $request->get('tenloaibaihoc')
        );
        $insertData = DB::table('loaibaihoc')->insert($dataInsertToDatabase);
	
        //Kiểm tra Insert để trả về một thông báo
        if ($insertData) {
            Session::flash('success', 'Thêm mới loại bài học thành công!');
        }else {                        
            Session::flash('error', 'Thêm thất bại!');
        }
        return redirect('loaibaihoc/create');
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
        $getData = DB::table('loaibaihoc')->select('id','tenloaibaihoc')->where('id',$id)->get();
        return view('admin.page.loaibaihoc.edit')->with('data',$getData);
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
        $updateData = DB::table('loaibaihoc')->where('id', $request->id)->update([
            'tenloaibaihoc' => $request->tenloaibaihoc
        ]);
        
        //Kiểm tra lệnh update để trả về một thông báo
        if ($updateData) {
            Session::flash('success', 'Sửa loại bài học thành công!');
        }else {                        
            Session::flash('error', 'Sửa thất bại!');
        }
        
        //Thực hiện chuyển trang
        return redirect('loaibaihoc');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        if( !$request->session()->has('id') || $request->session()->get('role')!='2' )
            return redirect('/showadmin');
        $deleteData = DB::table('loaibaihoc')->where('id', '=', $id)->delete();
            
        if ($deleteData) {
            Session::flash('success', 'Xóa loại bài học thành công!');
        }else {                        
            Session::flash('error', 'Xóa thất bại!');
        }
        
        return redirect('loaibaihoc');
    }
}
