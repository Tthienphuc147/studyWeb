@extends('admin.masterAdmin')
@section('content')
<h3><i class="fa fa-angle-right"></i>Đáp án</h3>
<div class="row mt">
    <div class="col-md-12">

        <div class="form-panel">
            <form role="form" class="form-horizontal style-form"  action="/admin/anwdetaillession/update/{{$id_chitiet}}/{{$id_baihoc}}/{{$id_chitietbaihoc}}" method="POST">
                {{ csrf_field() }}
                
                <div class="form-group ">
                <label class="col-lg-2 control-label">Đúng sai(*)</label>
                <div class="col-lg-10">
                <select name="dapan" style="min-width:200px">
                 
                    <option value="0">Sai</option>
                    <option value="1">Đúng</option>
                    
                    
                  </select>
                </div>
                </div>

                <div class="form-group ">
                <label class="col-lg-2 control-label">Giá trị lựa chọn (*)</label>
                <div class="col-lg-10">
                  <input type="text"  name="luachon" class="form-control" placeholder="{{$data->luachon}}" required>
                </div>
                </div>
                <div class="form-group " hidden="true">
                <label class="col-lg-2 control-label">Id</label>
                <div class="col-lg-10">
                  <input type="text"  name="id" class="form-control" value="{{$data->id}}">
                </div>
                </div>

                
                <div class="form-group">
                <div class="col-lg-offset-2 col-lg-10">
                  <button class="btn btn-theme" type="submit">Sửa đáp án chi tiết bài học</button>
                </div>
              </div>
            </form>
          </div>
    </div>
  </div>
  
@endsection
