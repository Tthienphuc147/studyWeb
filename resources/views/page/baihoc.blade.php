@extends('master')
@section('title')
Lớp học
@endsection
@section('content')
<div class="site-breadcrumb">
		<div class="container">
			<a href="#"><i class="fa fa-home"></i> Home</a> <i class="fa fa-angle-right"></i>
			<span>Bài học</span>
		</div>
	</div>
<section class="full-courses-section spad pt-0">
		<div class="container">
			<div class="row">
                <!-- course item -->
                @foreach ($databaihoc as $item)
                <div class="col-lg-4 col-md-6 course-item">
                        <div class="course-thumb">
                            <a href="/ctbaihoc/{{ $item->id }}"><img src="/public/img/course/1.jpg" alt=""></a>
                            <div class="course-cat">
                            <span>{{ $item->tenbaihoc }}</span>
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
