<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\RoleGroup;
use App\ModelPublic;

class AdminRoleController extends Controller
{
    
    public function showList(){
        if(ModelPublic::checkRoleAdmin()) {
            $data=RoleGroup::orderBy('id','asc')->get();
            return view('admin.page.role.list')->with('data',$data);

        }
        else{
            return redirect('/');
        }

    }
    public function showAddView(){
        if(ModelPublic::checkRoleAdmin()) {

            return view('admin.page.role.add');

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
            'name.required' => 'Bạn chưa nhập tên loại phân quyền!'
        ]);

        $data=new RoleGroup();
        $data->phanquyen=$request->name;
        $data->save();
        return redirect('/admin/role/addview')->with('thongbao','Thêm mới thành công');

        }
        else{
            return redirect('/admin/role/list');
        }
    }

    public function showUpdateView($id,Request $request){
        if(ModelPublic::checkRoleAdmin()) {

            $data=RoleGroup::find($id);
            return view('admin.page.role.update')->with('data',$data);

        }
        else{
            return redirect('/admin/role/list');
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

        $data=RoleGroup::find($request->input('id'));
        $data->phanquyen=$request->input('name');
        $data->save();
        return redirect('/admin/role/list');

        }
        else{
            return redirect('/admin/role/list');
        }
    }



}
