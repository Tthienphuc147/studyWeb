@extends('admin.masterAdmin')
@section('content')
<h3><i class="fa fa-angle-right"></i>Thông tin giáo viên</h3>
<div class="row mt">
    <div class="col-md-12">

        <div class="form-panel">
            <form role="form" class="form-horizontal style-form"  action="/admin/teacher/changePassword" method="POST">
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
              <div class="form-group">
                <label class="col-lg-2 control-label">Mật khẩu cũ</label>
                <div class="col-lg-10">
                <input type="hidden" value={{md5($data->password)}} name="pass"  class="form-control">
                  <input type="password" placeholder="Nhập mật khẩu cũ" name="oldPass"  class="form-control">
                </div>
              </div>
              <div class="form-group">
                <label class="col-lg-2 control-label">Mật khẩu mới</label>
                <div class="col-lg-10">
                  <input type="password" placeholder="Nhập mật khẩu mới" name="newPass"  class="form-control">
                </div>
              </div>
              <div class="form-group">
                <label class="col-lg-2 control-label">Nhập lại mật khẩu mới</label>
                <div class="col-lg-10">
                  <input type="password" placeholder="Nhập lại mật khẩu mới" name="newRePass"  class="form-control">
                </div>
              </div>
              <div class="form-group">
                <div class="col-lg-offset-2 col-lg-10">
                  <button class="btn btn-theme" type="submit">Cập nhật mật khẩu</button>
                </div>
              </div>
            </form>
          </div>
    </div>
  </div>
@endsection
