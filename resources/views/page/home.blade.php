@extends('master')
@section('title')
Trang chủ
@endsection
@section('content')
	<div class="layout-v2">
        <section class="features">
            <div class="container">
                <ul>
                    <li class="yellow-hover">
                        <div class="feature-box">
                            <i class="yellow"></i>
                            <h3>lớp học</h3>
                            <p>Hệ thống lớp học toàn diện từ bậc tiểu học đến đại học.</p>
                            <a class="yellow" href="#">
                                Xem chi tiết <i class="fa fa-long-arrow-right"></i>
                            </a>
                        </div>
                    </li>
                    <li class="light-green-hover">
                        <div class="feature-box">
                            <i class="light-green"></i>
                            <h3>bài học</h3>
                            <p>Hệ thống bài học cung cấp những bài học chất lượng.</p>
                            <a class="light-green" href="#">
                                Xem chi tiết <i class="fa fa-long-arrow-right"></i>
                            </a>
                        </div>
                    </li>
                    <li class="blue-hover">
                        <div class="feature-box">
                            <i class="blue"></i>
                            <h3>bài tập</h3>
                            <p>Hệ thống bài tập chất lượng được xây dựng khoa học.</p>
                            <a class="blue" href="#">
                                Xem chi tiết <i class="fa fa-long-arrow-right"></i>
                            </a>
                        </div>
                    </li>
                    <li class="red-hover">
                        <div class="feature-box">
                            <i class="red"></i>
                            <h3>Học viên</h3>
                            <p>Hệ thống xây dựng xung quanh học viên,mang đến những trải nghiệm tốt nhất cho học viên.</p>
                            <a class="red" href="#">
                                Xem chi tiết <i class="fa fa-long-arrow-right"></i>
                            </a>
                        </div>
                    </li>
                    <li class="violet-hover">
                        <div class="feature-box">
                            <i class="violet"></i>
                            <h3>Giáo viên</h3>
                            <p>Hệ thống lựa chọn những giáo viên có kiến thức chuyên môn tốt,cung cấp những kiến thức bổ ích cho học viên.</p>
                            <a class="violet" href="#">
                                Xem chi tiết <i class="fa fa-long-arrow-right"></i>
                            </a>
                        </div>
                    </li>
                    <li class="green-hover">
                        <div class="feature-box">
                            <i class="green"></i>
                            <h3>Hình thức học</h3>
                            <p>Hệ thống xây dựng hình thức học một cách khoa học cho các học viên,từ đó giúp các học viên hiểu rõ được bản chất.</p>
                            <a class="green" href="#">
                                Xem chi tiết <i class="fa fa-long-arrow-right"></i>
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
        <!-- End: Features -->

        <!-- Start: Category Filter -->
        <section class="category-filter section-padding">
            <div class="container">
                <div class="row">
				 @if (request()->session()->has('id'))
					 <div class="center-content">
                        <h2 class="section-title">Danh sách lớp học được học</h2>
                        <span class="underline center"></span>
                        <p class="lead">Đây là danh sách lớp học mà bạn đã đủ điều kiện đăng ký để học.</p>
                    </div>
				@else
					   <div class="center-content">
                        <h2 class="section-title">hệ thống lớp học</h2>
                        <span class="underline center"></span>
                        <p class="lead">Danh sách các lớp học của hệ thống</p>
                    </div>
				@endif
                 
					 @if (request()->session()->has('id'))
                    <div id="category-filter">
                        <ul class="category-list">
						   @foreach ($datalophoc as $key=>$item)
                        <li class="category-item adults">
 							@if (request()->session()->has('id'))
                                <figure>
                                    <img src="https://images.all-free-download.com/images/graphiclarge/student_graduation_background_boy_education_design_elements_icons_6837816.jpg" alt="New Releaase" />
                                    <figcaption class="bg-yellow">
                                        <div class="diamond">
                                            <i class="book"></i>
                                        </div>
                                        <div class="info-block">
                                            <h2>{{ $item['tenlophoc'] }}</h2>
                                            <br>
                                            <a href="/lophoc/{{$item['id']}}" class="info-sub-block">Vào lớp <i class="fa fa-long-arrow-right"></i></a>
                                        </div>
                                    </figcaption>
                                </figure>
								  @php
                                $key++
								@endphp
									@if ($key>=request()->session()->get('id_lophoc'))
									@break
									@endif

							@endif
                        </li>
                        @endforeach

                            
                         
                        </ul>
                        <div class="clearfix"></div>
                    </div>
					{{-- <div id="category-filter">
                        <ul class="category-list">
						 @php
                            $data=array_splice($datalophoc,request()->session()->get('id_lophoc'),count($datalophoc));
                        @endphp
						   @foreach ($datalophoc as $key=>$item)
                        <li class="category-item adults">
                                <figure style="opacity:0.2">
                                    <img src="https://images.all-free-download.com/images/graphiclarge/student_graduation_background_boy_education_design_elements_icons_6837816.jpg" alt="New Releaase" />
                                    <figcaption class="bg-yellow">
                                        <div class="diamond">
                                            <i class="book"></i>
                                        </div>
                                        <div class="info-block">
                                            <h2>{{ $item['tenlophoc'] }}</h2>
                                            <br>
                                        </div>
                                    </figcaption>
                                </figure>
                        </li>
                        @endforeach

                            
                         
                        </ul>
                        <div class="clearfix"></div>
                    </div> --}}

					
					 @else
               	<div id="category-filter">
                        <ul class="category-list">
						   @foreach ($datalophoc as $key=>$item)
                        <li class="category-item adults">
                          <figure>
                                    <img src="https://images.all-free-download.com/images/graphiclarge/student_graduation_background_boy_education_design_elements_icons_6837816.jpg" alt="New Releaase" />
                                    <figcaption class="bg-yellow">
                                        <div class="diamond">
                                            <i class="book"></i>
                                        </div>
                                        <div class="info-block">
                                            <h2>{{ $item['tenlophoc'] }}</h2>
                                            <br>
                                            <a href="/loginview" class="info-sub-block">Vào lớp <i class="fa fa-long-arrow-right"></i></a>
                                        </div>
                                    </figcaption>
                                </figure>


                        </li>
                           
                        @endforeach

                            
                         
                        </ul>
                        <div class="clearfix"></div>
                    </div>

            @endif
                </div>
            </div>
        </section>
        <!-- Start: Category Filter -->

        <!-- Start: Welcome Section -->
        <section class="welcome-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="welcome-wrap">
                            <div class="welcome-text">
                                <h2 class="section-title">Hệ thống học trực tuyến</h2>
                                <h2 class="section-title">AI Learning</h2>
                                <span class="underline left"></span>
                                <p>Hệ thống học trực tuyến AI Learning là môi trường học trực tuyến lý tưởng.Hệ thống toàn diện từ cấp Tiểu học đến bậc Đại học.Cung cấp các bài tập và bài học đầy đủ và chi tiết được biên soạn bởi các giáo viên đã được hệ thống tuyển chọn.Hệ thống mang đến tính tương tác cho người học từ đó tạo nên sự thú vị trong quá trình học.</p>
                                <a class="btn btn-primary" href="#">Đọc thêm</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="welcome-image">
                            <img src="images/wellcome-image.jpg" class="algin-right" alt="" />
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End: Welcome Section -->

        <!-- Start: Facts Counter -->
        <div class="layout-v2-counter">
            <div class="facts-counter">
                <div class="container">
                    <div class="row">
                        <ul>
                            <li class="color-light-green">
                                <div class="fact-item">
                                    <div class="fact-icon">
                                        <i class="ebook"></i>
                                    </div>
                                    <span>Giảng viên<strong class="fact-counter">45780</strong></span>
                                </div>
                            </li>
                            <li class="color-green">
                                <div class="fact-item">
                                    <div class="fact-icon">
                                        <i class="eaudio"></i>
                                    </div>
                                    <span>Học viên<strong class="fact-counter">32450</strong></span>
                                </div>
                            </li>
                            <li class="color-red">
                                <div class="fact-item">
                                    <div class="fact-icon">
                                        <i class="magazine"></i>
                                    </div>
                                    <span>Lớp học<strong class="fact-counter">14450</strong></span>
                                </div>
                            </li>
                            <li class="color-blue">
                                <div class="fact-item">
                                    <div class="fact-icon">
                                        <i class="videos"></i>
                                    </div>
                                    <span>Bài học<strong class="fact-counter">32450</strong></span>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- End: Facts Counter -->

        <!-- Start: Footer -->
    </div>
@endsection
