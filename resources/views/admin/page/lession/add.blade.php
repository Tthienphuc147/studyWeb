@extends('admin.masterAdmin')
@section('content')
<h3><i class="fa fa-angle-right"></i>Thêm bài học</h3>
<div class="row mt">
    <div class="col-md-12">

        <div class="form-panel">
            <form role="form" class="form-horizontal style-form"  action="/admin/lession/add/{{$id_chitiet}}" method="POST">
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
                <label class="col-lg-2 control-label">Tên bai học (*)</label>
                <div class="col-lg-10">
                  <input type="text" placeholder="Tên bài học" name="tenbaihoc" class="form-control" required>
                </div>
                </div>

                <div class="form-group ">
                <label class="col-lg-2 control-label">Thời gian bắt đầu (*)</label>
                <div class="col-lg-10">
                  <input type="datetime-local"  name="created_at" class="form-control" required>
                </div>
                </div>

                <div class="form-group ">
                <label class="col-lg-2 control-label">Thời gian kết thúc (*)</label>
                <div class="col-lg-10">
                  <input type="datetime-local"  name="thoigian" class="form-control" required>
                </div>
                </div>

                <div class="form-group ">
                <label class="col-lg-2 control-label">Số lượng (*)</label>
                <div class="col-lg-10">
                  <input type="number"  name="soluong" class="form-control" required>
                </div>
                </div>

                <div class="form-group ">
                <label class="col-lg-2 control-label">Loại bài (*)</label>
                <div class="col-lg-10">
                  <select name="id_loaibaihoc" style="min-width:200px">
                  @foreach ($data as $key=>$item)
                    <option value="{{$item->id}}">{{$item->tenloaibaihoc}}</option>
                    @endforeach
                    
                  </select>
                </div>
                </div>

                
                <div class="form-group " hidden="true">
                <label class="col-lg-2 control-label">Ảnh</label>
                <div class="col-lg-10">
                  <input type="text"  name="anh" class="form-control" value='1.jpg'>
                </div>
                </div>
                
                <div class="form-group">
                <div class="col-lg-offset-2 col-lg-10">
                  <button class="btn btn-theme" type="submit">Thêm bài học</button>
                </div>
              </div>
            </form>
          </div>
    </div>
  </div>
@endsection
