@extends('master')
@section('title')
Danh sách khóa học
@endsection
@section('content')
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<div class="container">

<h2>Danh sách lớp</h2>
<p>Danh sách lớp có thể đăng ký</p>       
@if ( Session::has('success') )
        <div class="alert alert-success alert-dismissible" role="alert">
            <strong>{{ Session::get('success') }}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                <span class="sr-only">Close</span>
            </button>
        </div>
    @endif

    <?php //Hiển thị thông báo lỗi?>
    @if ( Session::has('error') )
        <div class="alert alert-danger alert-dismissible" role="alert">
            <strong>{{ Session::get('error') }}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                <span class="sr-only">Close</span>
            </button>
        </div>
    @endif                                  
  <div class="dropdown">
    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
      Chọn lớp
    </button>
    <div class="dropdown-menu">
    @foreach($lop as $i =>$value)
      <a class="dropdown-item" href="/regcourse/{{$id}}/{{$value->id}}">{{$value->tenlophoc}}</a>
    @endforeach
    </div>
  </div>
</div>
<div class="container">
<h4>Danh sách lớp - môn học chờ xét duyệt</h4>
<div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="table-responsive">
                <table id="DataList" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>STT</th>
                            <th>Tên Môn Học</th>
                            <th>Lớp</th>
                            <th>Hủy Đăng ký</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php //Khởi tạo vòng lập foreach lấy giá trị vào bảng?>
                    @foreach($pending as $key => $data)
                        <tr>
                            <td>{{ $key+1 }}</td>
                            <td>{{ $data->tenmonhoc }}</td>
                            <td>{{ $data->tenlophoc}}</td>
                            <td><a href="/regcourse/huy/{{$id}}/{{$data->id}}/">Hủy</a></td>
                        </tr>
                    <?php //Kết thúc vòng lập foreach?>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection