<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\AccountType;
use App\ModelPublic;

class AdminAccountTypeController extends Controller
{

    public function showList(){
        if(ModelPublic::checkRoleAdmin()) {
            $data=AccountType::orderBy('id','asc')->get();
            return view('admin.page.accounttype.list')->with('data',$data);

        }
        else{
            return redirect('/');
        }

    }
    public function showAddView(){
        if(ModelPublic::checkRoleAdmin()) {

            return view('admin.page.accounttype.add');

        }
        else{
            return redirect('/');
        }
    }
    public function add(Request $request){
        if(ModelPublic::checkRoleAdmin()) {

            $this->validate($request,
        [
            'name' => 'required'
        ],
        [
            'name.required' => 'Bạn chưa nhập tên loại tài khoản!'
        ]);

        $data=new AccountType();
        $data->tenloaitk=$request->name;
        $data->save();
        return redirect('/admin/accounttype/addview')->with('thongbao','Thêm mới thành công');

        }
        else{
            return redirect('/admin/accounttype/list');
        }
    }

    public function showUpdateView($id,Request $request){
        if(ModelPublic::checkRoleAdmin()) {

            $data=AccountType::find($id);
            return view('admin.page.accountType.update')->with('data',$data);

        }
        else{
            return redirect('/admin/accounttype/list');
        }
    }

    public function update(Request $request){
        if(ModelPublic::checkRoleAdmin()) {

            $this->validate($request,
        [
            'name' => 'required'
        ],
        [
            'name.required' => 'Bạn chưa nhập tên loại tài khoản!'
        ]);

        $data=AccountType::find($request->input('id'));
        $data->tenloaitk=$request->input('name');
        $data->save();
        return redirect('/admin/accounttype/list');

        }
        else{
            return redirect('/admin/accounttype/list');
        }
    }



}
