@extends('admin.masterAdmin')
@section('content')
<h3><i class="fa fa-angle-right"></i>Danh sách môn học thuộc lớp học</h3>
<div class="row mt">
    <div class="col-md-12">
      <div class="content-panel">
        <table class="table table-striped table-advance table-hover">
          <thead>
            <tr>
              <th>STT</th>
              <th>Tên môn học </th>
              <th>Giáo viên quản lý</th>
              <th>Ảnh</th>
              <th>Thao Tác</th>
            </tr>
          </thead>
          <tbody>
              @foreach ($data as $key=>$item)
              <tr>
              <td >{{$key+1}}</td>
                <td >{{$item->tenmonhoc}}</td>
                <td>{{$item->name}}</td>
                <td >{{$item->anh}}</td>
                <td>
                    <a href="/admin/classsubject/delete/{{$item->id}}"><button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button></a>
                </td>

              @endforeach

          </tbody>
        </table>
      </div>
      <!-- /content-panel -->
    </div>
    <!-- /col-md-12 -->
  </div>
@endsection
