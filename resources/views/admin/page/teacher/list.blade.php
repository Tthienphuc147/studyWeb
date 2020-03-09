@extends('admin.masterAdmin')
@section('content')
<h3><i class="fa fa-angle-right"></i>Danh sách giáo viên</h3>
<div class="row mt">
    <div class="col-md-12">
      <div class="content-panel">
        <table class="table table-striped table-advance table-hover">
          <thead>
            <tr>
              <th>Họ và tên</th>
              <th class="hidden-phone">Email</th>
              <th></th>
            </tr>
          </thead>
          <tbody>
              @foreach ($data as $item)
              <tr>
                <td >{{$item->name}}</td>
                <td >{{$item->email}}</td>
                <td>
                    <a href="/admin/teacher/updateview/{{$item->id}}"><button class="btn btn-primary btn-xs"><i class="fa fa-eye"></i></button></a>
                    <a href="/admin/teacher/delete/{{$item->id}}"><button class="btn btn-danger btn-xs"><i class="fa fa-trash-o "></i></button></a>
                </td>
              </tr>
              @endforeach

          </tbody>
        </table>
      </div>
      <!-- /content-panel -->
    </div>
    <!-- /col-md-12 -->
  </div>
@endsection
