@extends('admin.masterAdmin')
@section('content')
<h3><i class="fa fa-angle-right"></i>Danh sách đáp án của chi tiết bài học</h3>
<div class="row mt">
    <div class="col-md-12">
      <div class="content-panel">
        <table class="table table-striped table-advance table-hover">
          <thead>
            <tr>
              <th>STT</th>
              <th> Tên bài </th>
              <th>Đúng sai</th>
              <th>Giá trị lựa chọn</th>
              <th>Thao Tác</th>
            </tr>
          </thead>
          <tbody>
              @foreach ($data as $key=>$item)
              <tr>
              <td >{{$key+1}}</td>
                <td >{{$item->ten}}</td>
                <td >{{$item->dapan}}</td>
                <td >{{$item->luachon}}</td>
                <td>
                    <a href="/admin/anwdetaillession/updateview/{{$id_chitiet}}/{{$id_baihoc}}/{{$id_chitietbaihoc}}/{{$item->id}}"><button class="btn btn-primary btn-xs"><i class="fa fa-eye"></i></button></a>
                    <a href="/admin/anwdetaillession/delete/{{$id_chitiet}}/{{$id_baihoc}}/{{$id_chitietbaihoc}}/{{$item->id}}"><button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button></a>
                </td>

              @endforeach
              <button class="btn btn-primary"><a href="/admin/anwdetaillession/addview/{{$id_chitiet}}/{{$id_baihoc}}/{{$id_chitietbaihoc}}" style="color:white">Thêm chi tiết bài học</a></button>
          </tbody>
        </table>
      </div>
      <!-- /content-panel -->
    </div>
    <!-- /col-md-12 -->
  </div>
@endsection
