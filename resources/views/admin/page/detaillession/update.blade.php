@extends('admin.masterAdmin')
@section('content')
<h3><i class="fa fa-angle-right"></i>Sửa chi tiết bài học</h3>
<div class="row mt">
    <div class="col-md-12">

        <div class="form-panel">
            <form role="form" class="form-horizontal style-form"  action="/admin/detaillession/update/{{$id_chitiet}}/{{$id_baihoc}}" method="POST">
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
                <label class="col-lg-2 control-label">Link video (*)</label>
                <div class="col-lg-10">
                  <input type="text" placeholder="{{$data->video}}" name="video" class="form-control" required>
                </div>
                </div>

                <div class="form-group ">
                <label class="col-lg-2 control-label">Link audio (*)</label>
                <div class="col-lg-10">
                  <input type="text"  name="audio" class="form-control" placeholder="{{$data->audio}}" required>
                </div>
                </div>

                <div class="form-group ">
                <label class="col-lg-2 control-label">nội dung bài học (*)</label>
                <div class="col-lg-10">
                <textarea name="noidung"  class="form-control" rows="3" id="demo" >{{$data->noidungbaihoc}}</textarea>
                </div>
                </div>

                <div class="form-group ">
                <label class="col-lg-2 control-label">Nội dung đáp án (*)</label>
                <div class="col-lg-10">
                <textarea name="noidungdapan"  class="form-control" rows="3" id="demo1" >{{$data->noidungdapan}}</textarea>
                </div>
                </div>

                
                <div class="form-group " hidden="true">
                <label class="col-lg-2 control-label">Ảnh</label>
                <div class="col-lg-10">
                  <input type="text"  name="anh" class="form-control" value='1.jpg'>
                </div>
                </div>
                <div class="form-group " hidden="true">
                <label class="col-lg-2 control-label">id</label>
                <div class="col-lg-10">
                  <input type="text"  name="id" class="form-control" value='{{$data->id}}'>
                </div>
                </div>
                <div class="form-group">
                <div class="col-lg-offset-2 col-lg-10">
                  <button class="btn btn-theme" type="submit">Sửa chi tiết bài học</button>
                </div>
              </div>
            </form>
          </div>
    </div>
  </div>
  <script>
                            CKEDITOR.replace('demo', {
                                language: 'vi',
                                filebrowserBrowseUrl: '../../../public/ckfinder/ckfinder.html',
                                filebrowserImageBrowseUrl: '../../../public/ckfinder/ckfinder.html?type=Images',
                                filebrowserFlashBrowseUrl: '../../../public/ckfinder/ckfinder.html?type=Flash',
                                filebrowserUploadUrl: '../../../public/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
                                filebrowserImageUploadUrl: '../../../public/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
                                filebrowserFlashUploadUrl: '../../../public/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash'
                            });
                </script>
                <script>
                            CKEDITOR.replace('demo1', {
                                language: 'vi',
                                filebrowserBrowseUrl: '../../../public/ckfinder/ckfinder.html',
                                filebrowserImageBrowseUrl: '../../../public/ckfinder/ckfinder.html?type=Images',
                                filebrowserFlashBrowseUrl: '../../../public/ckfinder/ckfinder.html?type=Flash',
                                filebrowserUploadUrl: '../../../public/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
                                filebrowserImageUploadUrl: '../../../public/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
                                filebrowserFlashUploadUrl: '../../../public/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash'
                            });
                </script>
@endsection
