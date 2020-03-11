@extends('admin.masterAdmin')
@section('content')

    <?php //Hiển thị thông báo thành công?>
    <div class="page-header"><h4>Quản lý mức độ bài học</h4></div>

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

    <?php //Hiển thị danh sách loại bài học?>
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="table-responsive">
                <p><a class="btn btn-primary" href="{{ url('mucdo/create') }}">Thêm mới</a></p>
                <table id="DataList" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>STT</th>
                            <th>Tên mức độ</th>
                            <th>Sửa</th>
                            <th>Xóa</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php //Khởi tạo vòng lập foreach lấy giá trị vào bảng?>
                    @foreach($list as $key => $mucdo)
                        <tr>
                            <?php //Điền số thứ tự?>
                            <td>{{ $key+1 }}</td>
                            <?php //Lấy tên loại bài học?>
                            <td>{{ $mucdo->tenmucdo }}</td>
                            <?php //Tạo nút sửa loại bài học?>
                            <td><a href="/mucdo/{{ $mucdo->id }}/edit">Sửa</a></td>
                            <?php //Tạo nút xóa loại bài học?>
                            <td><a href="/mucdo/{{ $mucdo->id }}/delete">Xóa</a></td>
                        </tr>
                    <?php //Kết thúc vòng lập foreach?>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection