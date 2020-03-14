@extends('masterPage')
@section('title')
Thông tin cá nhân	
@endsection
@section('titlePage')
Thông tin cá nhân	
@endsection
@section('content')
<div id="content" class="site-content">
            <div id="primary" class="content-area">
                <main id="main" class="site-main">
                    <div class="main-news-list">
                        <div class="container">
                            <!-- Start: Search Section -->
                          
                            <!-- End: Search Section -->
                            <div class="row">
                                <div class="col-md-12 " style="padding-top:10rem;">
                                    <div class="news-list-detail">
                                        <div class="row" style="padding: 3rem 0;">
                                            <div class="col-xs-12 col-sm-12">
                                                <div class="contact-info ">
                                                    <h3>Thông tin tài khoản</h3>
                                                    <span class="underline left"></span>
                                                    <div class="row">
													  <div class="col-xs-12 col-sm-4">
                                                          <img class="portrait" src="{{ asset('public/img/image.jpg') }}" alt="John Smith" />
                                                        </div>
													  
                                                        <div class="col-xs-12 col-sm-4">
                                                            
                                                            <p>Họ và tên: {{$user -> name}}</h5>
                                                            <p>Địa chỉ: Đà Nẵng</p>
                                                            <p>Email: {{ $user -> email }}</p>
                                                            <p>Số điện thoại: 0{{ $user -> sdt}}</p>
															<p>Ngày sinh: {{ $user -> ngaysinh }}</p>
                                                        </div>
                                                        <div class="col-xs-12 col-sm-4">
                                                            
                                                            <p>Tổng điểm: {{ $diem }}</h5>
                                                            <p>Xếp hạng:{{$rank}}</p>
                                                        </div>
                                                    </div>
                                                  
                                                    <br>
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
