@extends('admin.masterAdmin')
@section('content')
<h3><i class="fa fa-angle-right"></i>Danh sách bài học</h3>
<div class="row mt">
    <div class="col-md-12">
      <div class="content-panel">
        <table class="table table-striped table-advance table-hover">
          <thead>
            <tr>
              <th>STT</th>
              <th>Tên bài học </th>
              <th>Thời gian bắt đầu</th>
              <th>Thời gian kết thúc</th>
              <th> Số lượng bài giới hạn</th>
              <th>Tên loại bài học</th>
              <th>Ảnh</th>
              <th>Thao Tác</th>
              <th>Quản lý chi tiết bài học</th>
            </tr>
          </thead>
          <tbody>
              @foreach ($data as $key=>$item)
              <tr>
              <td >{{$key+1}}</td>
                <td >{{$item->tenbaihoc}}</td>
                <td >{{$item->created_at}}</td>
                <td >{{$item->thoigian}}</td>
                <td >{{$item->soluong}}</td>
                <td >{{$item->tenloaibaihoc}}</td>
                <td >{{$item->id}}</td>
                <td>
                    <a href="/admin/lession/updateview/{{$id_chitiet}}/{{$item->id}}"><button class="btn btn-primary btn-xs"><i class="fa fa-eye"></i></button></a>
                    <a href="/admin/lession/delete/{{$id_chitiet}}/{{$item->id}}"><button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button></a>
                </td>
                <td>
                <a href="/admin/detaillession/list/{{$id_chitiet}}/{{$item->id}}"><button class="btn btn-primary btn-xs"><i class="fa fa-eye"></i></button></a>
                </td>

              @endforeach
              <button class="btn btn-primary"><a href="/admin/lession/addview/{{$id_chitiet}}" style="color:white">Thêm bài học</a></button>
          </tbody>
        </table>
      </div>
      <!-- /content-panel -->
    </div>
    <!-- /col-md-12 -->
  </div>
@endsection
