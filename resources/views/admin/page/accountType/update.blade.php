@extends('admin.masterAdmin')
@section('content')
<h3><i class="fa fa-angle-right"></i>Sửa loại tài khoản</h3>
<div class="row mt">
    <div class="col-md-12">

        <div class="form-panel">
            <form role="form" class="form-horizontal style-form"  action="/admin/accounttype/update" method="POST">
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
                <label class="col-lg-2 control-label">Tên loại tài khoản (*)</label>
                <div class="col-lg-10">
                  <input type="text" value="{{$data->tenloaitk}}" name="name" class="form-control">
                </div>
                </div>
                <div class="col-lg-10">
                  <input type="hidden" placeholder="" name="id" class="form-control" value='{{$data->id}}'>
                </div>
                </div>
                <div class="form-group">
                <div class="col-lg-offset-2 col-lg-10">
                  <button class="btn btn-theme" type="submit">Sửa loại tài khoản</button>
                </div>
              </div>
            </form>
          </div>
    </div>
  </div>
@endsection
