@extends('admin.masterAdmin')
@section('content')
<h3><i class="fa fa-angle-right"></i>Danh sách Lớp học</h3>
<div class="row mt">
    <div class="col-md-12">
      <div class="content-panel">
        <table class="table table-striped table-advance table-hover">
          <thead>
            <tr>
              <th>STT</th>
              <th>Tên môn học </th>
              <th>Ảnh</th>
              <th>Thao Tác</th>
            </tr>
          </thead>
          <tbody>
              @foreach ($data as $key=>$item)
              <tr>
              <td >{{$key+1}}</td>
                <td >{{$item->tenmonhoc}}</td>
                <td >{{$item->anh}}</td>
                <td>
                    <a href="/admin/subject/updateview/{{$item->id}}"><button class="btn btn-primary btn-xs"><i class="fa fa-eye"></i></button></a>
                    <a href="/admin/subject/delete/{{$item->id}}"><button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button></a>
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
