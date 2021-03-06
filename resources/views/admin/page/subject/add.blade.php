@extends('admin.masterAdmin')
@section('content')
<h3><i class="fa fa-angle-right"></i>Thêm lớp học</h3>
<div class="row mt">
    <div class="col-md-12">

        <div class="form-panel">
            <form role="form" class="form-horizontal style-form"  action="/admin/subject/add" method="POST">
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
                <label class="col-lg-2 control-label">Tên môn học (*)</label>
                <div class="col-lg-10">
                  <input type="text" placeholder="Nhập tên môn học" name="tenmonhoc" class="form-control">
                </div>
                </div>
                <div class="form-group " hidden="true">
                <label class="col-lg-2 control-label">Ảnh</label>
                <div class="col-lg-10">
                  <input type="text" placeholder="Nhập tên môn" name="anh" class="form-control" value='1.jpg'>
                </div>
                </div>
                <div class="form-group">
                <div class="col-lg-offset-2 col-lg-10">
                  <button class="btn btn-theme" type="submit">Thêm môn học</button>
                </div>
              </div>
            </form>
          </div>
    </div>
  </div>
@endsection
