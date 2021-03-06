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
              <th>Xóa môn</th>
              <th>Quản lý bài học</th>
              <th> Quản lý học viên<th>
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
                <td>
                <a href="/admin/lession/list/{{$item->id}}"><button class="btn btn-success btn-xs"><i class="fa fa-eye "></i></button></a>
                </td>
                <td>
                <a href="/admin/usersubject/list/{{$item->id}}"><button class="btn btn-success btn-xs"><i class="fa fa-eye "></i></button></a>
                </td>
              @endforeach

          </tbody>
          
        </table>
        <button class="btn btn-primary"><a href="/admin/addteachersubject/show/{{$id_lophoc}}" style="color:white">Thêm giáo viên và môn học</a></button>
      </div>
      <!-- /content-panel -->
    </div>
    <!-- /col-md-12 -->
  </div>
@endsection
