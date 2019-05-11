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
		@foreach ($mucdo as $itemmucdo)
			@if($itemmucdo!=NULL)
			<h1>{{ $itemmucdo->tenmucdo }}</h1>
			<div class="row">
                <!-- course item -->
					<?php $i=0 ?>
						@foreach ($data as $item)
							@if($itemmucdo->id_mucdo==$item->id_mucdo)
								<div class="col-lg-4 col-md-6 course-item">
									<div class="course-thumb">
										<a href="/ctbaihoc/{{ $idbaihoc}}/{{ $i }}/-1"><img src="{{ $item->anh }}" alt=""></a>
										<div class="course-cat">
										<span>{{ $item->ten }}</span>
										</div>
									</div>

								</div>
							@endif
							<?php $i++ ?>
						@endforeach
					

				<!-- course item -->
			</div>
			@endif
			@endforeach

		</div>
	</section>
	<!-- Courses section end-->


	<!-- Newsletter section -->

@endsection
