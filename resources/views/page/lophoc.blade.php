@extends('master')
@section('title')
Lớp học
@endsection
@section('content')
<div class="site-breadcrumb">
		<div class="container">
			<a href="#"><i class="fa fa-home"></i> Home</a> <i class="fa fa-angle-right"></i>
			<span>Môn học</span>
		</div>
	</div>
<section class="full-courses-section spad pt-0">
		<div class="container">
			<div class="row">
                <!-- course item -->
                @foreach ($datamonhoc as $item)
                <div class="col-lg-4 col-md-6 course-item">
                        <div class="course-thumb">
                        <a href="/baihoc/{{ $idlophoc }}/{{ $item->id_monhoc }}"><img src="/public/img/course/1.jpg" alt=""></a>
                            <div class="course-cat">
                            <span>{{ $item->tenmonhoc }}</span>
                            </div>
                        </div>

                    </div>
                @endforeach

				<!-- course item -->
			</div>

		</div>
	</section>
	<!-- Courses section end-->


	<!-- Newsletter section -->

@endsection