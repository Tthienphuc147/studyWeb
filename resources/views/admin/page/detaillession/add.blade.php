@extends('admin.masterAdmin')
@section('content')
<h3><i class="fa fa-angle-right"></i>Thêm chi tiết bài học</h3>
<div class="row mt">
    <div class="col-md-12">

        <div class="form-panel">
            <form role="form" class="form-horizontal style-form"  action="/admin/detaillession/add/{{$id_chitiet}}/{{$id_baihoc}}" method="POST">
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
                  <input type="text" placeholder="Link Video" name="video" class="form-control" required>
                </div>
                </div>

                <div class="form-group ">
                <label class="col-lg-2 control-label">Tên (*)</label>
                <div class="col-lg-10">
                  <input type="text"  name="name" class="form-control" placeholder="Tên" required>
                </div>
                </div>


                <div class="form-group ">
                <label class="col-lg-2 control-label">Điểm (*)</label>
                <div class="col-lg-10">
                  <input type="number"  name="diem" class="form-control" placeholder="Điểm" required>
                </div>
                </div>

                <div class="form-group ">
                <label class="col-lg-2 control-label">Link audio (*)</label>
                <div class="col-lg-10">
                  <input type="text"  name="audio" class="form-control" placeholder="Link Audio" required>
                </div>
                </div>

                <div class="form-group ">
                <label class="col-lg-2 control-label">nội dung bài học (*)</label>
                <div class="col-lg-10">
                <textarea name="noidung"  class="form-control" rows="3" id="demo" required></textarea>
                </div>
                </div>

                <div class="form-group ">
                <label class="col-lg-2 control-label">Nội dung đáp án giải thích (*)</label>
                <div class="col-lg-10">
                <textarea name="noidungdapan"  class="form-control" rows="3" id="demo1" required></textarea>
                </div>
                </div>
                <div class="form-group ">
                <label class="col-lg-2 control-label">Mức độ (*)</label>
                <div class="col-lg-10">
                  <select name="id_mucdo" style="min-width:200px">
                  @foreach ($data as $key=>$item)
                    <option value="{{$item->id}}">{{$item->tenmucdo}}</option>
                    @endforeach
                    
                  </select>
                </div>
                </div>
                <div class="form-group ">
                <label class="col-lg-2 control-label">Loại trắc nghiệm (*)</label>
                <div class="col-lg-10">
                  <select name="id_loaitracnghiem" style="min-width:200px">
                  @foreach ($datatype as $key=>$item)
                    <option value="{{$item->id}}">{{$item->tenloai}}</option>
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
                  <button class="btn btn-theme" type="submit">Thêm chi tiết bài học</button>
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
