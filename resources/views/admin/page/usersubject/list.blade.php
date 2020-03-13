@extends('admin.masterAdmin')
@section('content')
<h3><i class="fa fa-angle-right"></i>Danh sách User trong môn học</h3>
<div class="row mt">
    <div class="col-md-12">
      <div class="content-panel">
        <table class="table table-striped table-advance table-hover">
          <thead>
            <tr>
              <th>STT</th>
              <th>Tên</th>
              <th>Gmail</th>
              <th>Thao Tác</th>
            </tr>
          </thead>
          <tbody>
              @foreach ($dataac as $key=>$item)
              <tr>
              <td >{{$key+1}}</td>
                <td >{{$item->name}}</td>
                <td >{{$item->email}}</td>
                <td>
                    <a href="/admin/usersubject/delete/{{$id_chitiet}}/{{$item->id_user}}"><button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button></a>
                </td>

              @endforeach
              
          </tbody>
        </table>
      </div>
      <!-- /content-panel -->
    </div>
    <!-- /col-md-12 -->
  </div>



  <h3><i class="fa fa-angle-right"></i>Danh sách User đang chờ vào trong môn học</h3>
<div class="row mt">
    <div class="col-md-12">
      <div class="content-panel">
        <table class="table table-striped table-advance table-hover">
          <thead>
            <tr>
              <th>STT</th>
              <th>Tên</th>
              <th>Gmail</th>
              <th>Thao Tác</th>
            </tr>
          </thead>
          <tbody>
              @foreach ($datade as $key=>$item)
              <tr>
              <td >{{$key+1}}</td>
                <td >{{$item->id_user}}</td>
                <td >{{$item->email}}</td>
                <td>
                    <a href="/admin/usersubject/add/{{$id_chitiet}}/{{$item->id_user}}"><button class="btn btn-primary btn-xs"><i class="fa fa-check"></i></button></a>
                </td>

              @endforeach
              
          </tbody>
        </table>
      </div>
      <!-- /content-panel -->
    </div>
    <!-- /col-md-12 -->
  </div>


  <h3><i class="fa fa-angle-right"></i>Danh sách User không trong môn học</h3>
<div class="row mt">
    <div class="col-md-12">
      <div class="content-panel">
        <table class="table table-striped table-advance table-hover">
          <thead>
            <tr>
              <th>STT</th>
              <th>Tên</th>
              <th>Gmail</th>
              <th>Thao Tác</th>
            </tr>
          </thead>
          <tbody>
              @foreach ($datanot as $key=>$item)
              <tr>
              <td >{{$key+1}}</td>
                <td >{{$item->name}}</td>
                <td >{{$item->email}}</td>
                <td>
                <a href="/admin/usersubject/addac/{{$id_chitiet}}/{{$item->id}}"><button class="btn btn-primary btn-xs"><i class="fa fa-check"></i></button></a>
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
