@extends('admin.masterAdmin')
@section('content')
<h3><i class="fa fa-angle-right"></i>Thêm giáo viên</h3>
<div class="row mt">
    <div class="col-md-12">

        <div class="form-panel">
            <form role="form" class="form-horizontal style-form"  action="/admin/teacher/add" method="POST">
                {{ csrf_field() }}
                <div>
                    @if (count($errors)>0)
                    <div class="alert alert-danger">
                        @foreach ($errors->all() as $err)
                            {{$err}}<br>
                        @endforeach
                    </div>

                    @endif
                    @if (session('thongbao'))
                        <div class="alert alert-success">
                            {{session('thongbao')}}
                        </div>
                    @endif

                </div>
                <div class="form-group ">
                <label class="col-lg-2 control-label">Họ và tên (*)</label>
                <div class="col-lg-10">
                  <input type="text" placeholder="Nhập họ và tên" name="name" class="form-control">
                </div>
                </div>
                <div class="form-group ">
                    <label class="col-lg-2 control-label">Email (*)</label>
                    <div class="col-lg-10">
                      <input type="email" placeholder="Nhập email" name="email" class="form-control">
                    </div>
               </div>
              <div class="form-group ">
                <label class="col-lg-2 control-label">Mật khẩu (*)</label>
                <div class="col-lg-10">
                  <input type="password" placeholder="Nhập mật khẩu" name="password" class="form-control">
                </div>
              </div>
              <div class="form-group">
                <label class="col-lg-2 control-label">Nhập lại mật khẩu (*)</label>
                <div class="col-lg-10">
                  <input type="password" placeholder="Nhập lại mật khẩu" name="passwordRetype" class="form-control">
                </div>
              </div>
              <div class="form-group">
                <label class="col-lg-2 control-label">Số điện thoại (*)</label>
                <div class="col-lg-10">
                  <input ype="text" placeholder="Nhập số điện thoại" name="phone" class="form-control">
                </div>
              </div>
              <div class="form-group">
                <label class="col-lg-2 control-label">Ngày sinh</label>
                <div class="col-lg-10">
                  <input type="date" placeholder="Nhập ngày sinh" name="date" pattern="\m{2}-\d{2}-\y{4}" class="form-control">
                </div>
              </div>
              <div class="form-group">
                <div class="col-lg-offset-2 col-lg-10">
                  <button class="btn btn-theme" type="submit">Thêm giáo viên</button>
                </div>
              </div>
            </form>
          </div>
    </div>
  </div>
@endsection
