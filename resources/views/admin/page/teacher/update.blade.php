@extends('admin.masterAdmin')
@section('content')
<h3><i class="fa fa-angle-right"></i>Thông tin giáo viên</h3>
<div class="row mt">
    <div class="col-md-12">

        <div class="form-panel">
            <form role="form" class="form-horizontal style-form"  action="/admin/teacher/update" method="POST">
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

                    <input type="hidden"  value={{$data->id}} name="uId"  class="form-control">

                  <input type="text" placeholder="Nhập họ và tên" value={{$data->name}} name="name" class="form-control">
                </div>
                </div>
                <div class="form-group ">
                    <label class="col-lg-2 control-label">Email (*)</label>
                    <div class="col-lg-10">
                      <input type="email" placeholder="Nhập email" value={{$data->email}} name="email"  class="form-control">
                    </div>
               </div>
              <div class="form-group">
                <label class="col-lg-2 control-label">Số điện thoại (*)</label>
                <div class="col-lg-10">
                  <input ype="text" placeholder="Nhập số điện thoại" value={{$data->sdt}} name="phone" class="form-control">
                </div>
              </div>
              <div class="form-group">
                <label class="col-lg-2 control-label">Ngày sinh</label>
                <div class="col-lg-10">
                  <input type="date" placeholder="Nhập ngày sinh" value={{$data->date}} name="date" pattern="\m{2}-\d{2}-\y{4}" class="form-control">
                </div>
              </div>
              <div class="form-group">
                <div class="col-lg-offset-2 col-lg-10">
                  <button class="btn btn-theme" type="submit">Cập nhật thông tin</button>
                </div>
              </div>
            </form>
          </div>
    </div>
  </div>
@endsection
