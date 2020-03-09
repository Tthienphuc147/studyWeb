@extends('admin.masterAdmin')
@section('content')
<h3><i class="fa fa-angle-right"></i>Thông tin tài khoản</h3>
<div class="row mt">
    <div class="col-md-12">
        <div class="row content-panel">
            <div class="col-md-8 profile-text">
              <h3>{{$data->name}}</h3>
              <p>Email:{{$data->email}}</p>
              <p>Số điện thoại:{{$data->sdt}}</p>
              <p>Ngày sinh:{{$data->ngaysinh}}</p>
              <br>
              <a href="/admin/teacher/updateprofileview"><button class="btn btn-theme">Cập nhật thông tin</button></a>
              <a href="/admin/teacher/changepasswordview"><button class="btn btn-theme">Thay đổi mật khẩu</button></a>

            </div>
          </div>
  </div>
@endsection
