@extends('admin.masterAdmin')
@section('content')
<h3><i class="fa fa-angle-right"></i>Danh sách chi tiết bài học</h3>
<div class="row mt">
    <div class="col-md-12">
      <div class="content-panel">
        <table class="table table-striped table-advance table-hover">
          <thead>
            <tr>
              <th>STT</th>
              <th>Link video </th>
              <th>Link audio</th>
              <th>Id mức độ</th>
              <th> Id loại trắc nghiệm</th>
              <th>Nội dung</th>
              <th>Nội dung đáp án giải thích</th>
              <th>Thao Tác</th>
              <th>Quản lý đáp án chi tiết bài học</th>
            </tr>
          </thead>
          <tbody>
              @foreach ($data as $key=>$item)
              <tr>
              <td >{{$key+1}}</td>
                <td >{{$item->video}}</td>
                <td >{{$item->audio}}</td>
                <td >{{$item->id_mucdo}}</td>
                <td >{{$item->id_loaitracnghiem}}</td>
                <td >...</td>
                <td >...</td>
                <td>
                    <a href="/admin/detaillession/updateview/{{$id_chitiet}}/{{$id_baihoc}}/{{$item->id}}"><button class="btn btn-primary btn-xs"><i class="fa fa-eye"></i></button></a>
                    <a href="/admin/detaillession/delete/{{$id_chitiet}}/{{$id_baihoc}}/{{$item->id}}"><button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button></a>
                </td>
                <td>
                <a href="/admin/anwdetaillession/list/{{$id_chitiet}}/{{$id_baihoc}}/{{$item->id}}"><button class="btn btn-primary btn-xs"><i class="fa fa-eye"></i></button></a>
                </td>

              @endforeach
              <button class="btn btn-primary"><a href="/admin/detaillession/addview/{{$id_chitiet}}/{{$id_baihoc}}" style="color:white">Thêm chi tiết bài học</a></button>
          </tbody>
        </table>
      </div>
      <!-- /content-panel -->
    </div>
    <!-- /col-md-12 -->
  </div>
@endsection
