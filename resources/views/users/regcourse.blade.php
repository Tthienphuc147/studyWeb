@extends('masterPage')
@section('title')
Đăng ký khóa học
@endsection
@section('titlePage')
Đăng ký khóa học
@endsection
@section('content')
  <div id="content" class="site-content">
            <div id="primary" class="content-area">
                <main id="main" class="site-main">
                    <div class="main-news-list">
                        <div class="container">
                            <!-- Start: Search Section -->
                          
                            <!-- End: Search Section -->
                            <div class="row "  style="padding-bottom:10rem;">
                                <div class="col-md-12 " style="padding-top:10rem;">
                                    <div class="news-list-detail">
                                        <div class="news-list-box">
                                            <div class="single-news-list">
                                        
                                                {{-- <figure>
                                                    <img src="https://img.freepik.com/free-vector/vector-cartoon-background-empty-school-classroom_1441-1838.jpg?size=626&ext=jpg" alt="News &amp; Event">
                                                </figure> --}}
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-5">
                                                <div class="contact-info ">
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
                                                    <h3>Danh sách lớp</h3>
                                                    <span class="underline left"></span>
                                                    <div class="form-group">
                                                        <label>Chọn lớp học đăng ký:</label>
                                                        <div class="events-calendar">
                                                            <table class="event-table cart">
                                                                <thead>                             
                                                                    <tr>
                                                                        <th class="product-name">Lớp học</th>
                                                                        <th class="product-name">Thao tác</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                  @foreach($lop as $i =>$value)
                                                                    <tr>
                                                                        <td>{{$value->tenlophoc}}</td>
                                                                        <td> <a class="dropdown-item" href="/regcourse/{{$id}}/{{$value->id}}"><i class="fa fa-plus "></i></a></td>
                                                                    </tr>
                                                                     @endforeach
                                                                </tbody>
                                                            </table>
                                                            
                                                        </div>
                                                       
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-7">
                                                <div class="events-calendar">
                                                    <h3>Danh sách lớp - môn học chờ xét duyệt</h3>
                                                    <span class="underline left"></span>
                                                    <table class="event-table cart">
                                                         <thead>
                                                            <tr>
                                                                <th class="product-name">STT</th>
                                                                <th class="product-name">Tên Môn Học</th>
                                                                <th class="product-name">Lớp</th>
                                                                <th class="product-name">Hủy Đăng ký</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                          @foreach($pending as $key => $data)
                                                            <tr>
                                                                <td>{{ $key+1 }}</td>
                                                                <td>{{ $data->tenmonhoc }}</td>
                                                                <td>{{ $data->tenlophoc}}</td>
                                                                <td><a href="/regcourse/huy/{{$id}}/{{$data->id}}/">Hủy</a></td>
                                                            </tr>
                                                        @endforeach
                                                        </tbody>
                                                    </table>
                                                    <div class="clear"></div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
@endsection