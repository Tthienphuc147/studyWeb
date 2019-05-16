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
		@if(count($databaihoc)>0)
		<button type="button" class="btn peach-gradient btn-lg" 
		style="padding:10px 5px;width:200px;margin:10px 0px;background: linear-gradient(90deg, rgba(237,177,91,0.9780287114845938) 27%, rgba(218,89,15,0.7259278711484594) 59%, rgba(233,164,51,1) 100%);" >
		<h5 style="color:white;">{{ $databaihoc[0]->tenloaibaihoc }}</h5></button>
			<div class="row">
                <!-- course item -->
                @foreach ($databaihoc as $item)
                <div class="col-lg-4 col-md-6 course-item">
                        <div class="course-thumb">
                            <a href="/ctbaihoc/{{ $item->id }}"><img src="{{$item->anh}}" alt=""></a>
                            <div class="course-cat">
                            <span>{{ $item->tenbaihoc }}</span>
                            </div>
                        </div>

                    </div>
                @endforeach
			
				<!-- course item -->
			</div>
			@endif	
			@if(count($datathi)>0)
			<button type="button" class="btn peach-gradient btn-lg" 
		style="padding:10px 5px;width:200px;margin:10px 0px;background: linear-gradient(90deg, rgba(237,177,91,0.9780287114845938) 27%, rgba(218,89,15,0.7259278711484594) 59%, rgba(233,164,51,1) 100%);" >
		<h5 style="color:white;">{{ $datathi[0]->tenloaibaihoc }}</h5></button>
			<div class="row">
                <!-- course item -->
				<?php $mytime1=Carbon\Carbon::now();?>
                @foreach ($datathi as $item)
                <div class="col-lg-4 col-md-6 course-item">
                        <div class="course-thumb">
<a href=<?php if($item->thoigian>$mytime1 && $item->created_at<$mytime1  ){?>"/baithi/{{ $item->id }}"<?php }?>><img src="{{$item->anh}}" alt=""></a>
                            <div class="course-cat">
                            <span>{{ $item->tenbaihoc }}</span>
                            </div>
                        </div>
					
					<h5>Time Begin: {{$item->created_at}}</h5>
					<h5>Time  End  : {{$item->thoigian}}</h5>
					@if($item->created_at>$mytime1)
					<button type="button" class="btn peach-gradient btn-lg" 
		style="padding:10px 5px;width:300px;margin:10px 0px;background: linear-gradient(90deg, rgba(237,177,91,0.9780287114845938) 27%, rgba(218,89,15,0.7259278711484594) 59%, rgba(233,164,51,1) 100%);" >
					<div countdown="" data-date="{{$item->created_at}}"style="color:#BB3300;">
					<span data-days="">00</span> ngày 
								<span data-hours="">00</span> giờ 
								<span data-minutes="">00</span> phút 
								<span data-seconds="">00</span> giây
					</div>
					</button>
					@elseif($item->thoigian>$mytime1)
					<button type="button" class="btn peach-gradient btn-lg" 
		style="padding:10px 5px;width:300px;margin:10px 0px;background: linear-gradient(90deg, rgba(237,177,91,0.9780287114845938) 27%, rgba(218,89,15,0.7259278711484594) 59%, rgba(233,164,51,1) 100%);" >
					<div countdown="" data-date="{{$item->thoigian}}" style="color:#CCFFCC;" >
					 <span data-days="">00</span> ngày 
								<span data-hours="">00</span> giờ 
								<span data-minutes="">00</span> phút 
								<span data-seconds="">00</span> giây
					
					</div></button>
					@endif
					

                    </div>
                @endforeach
				
			
				<!-- course item -->
			</div>
			@endif
		</div>
	</section>
	<!-- Courses section end-->


	<!-- Newsletter section -->

@endsection

