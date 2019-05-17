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
			<button type="button" class="btn peach-gradient btn-lg" style="padding:10px 5px;width:200px;margin:10px 0px;background: linear-gradient(90deg, rgba(237,177,91,0.9780287114845938) 27%, rgba(218,89,15,0.7259278711484594) 59%, rgba(233,164,51,1) 100%);" ><h5 style="color:white;">{{ $itemmucdo->tenmucdo }}</h5></button>
			<div class="row">
                <!-- course item -->
                    <?php $i=0 ?>
                    @if (request()->session()->get('id_taikhoan')==1)
                        @php
                            $data1=array_splice($data,0,2);

                        @endphp
                    	@foreach ($data1 as $item)
                            @if($itemmucdo->id_mucdo==$item->id_mucdo)
                                <div class="col-lg-4 col-md-6 course-item">
                                    <div class="course-thumb">
                                        <a href="/ctbaihoc/{{ $idbaihoc}}/{{ $i }}/-1"><img src="{{ $item->anh }}" alt=""></a>
                                        <div class="course-cat">
                                        <span>{{ $item->ten }} <br><button class="btn btn-sm btn-light">
                                                @if ($temp[$i]==1)
                                                <p>Accept</p>
                                            @elseif(($temp[$i]==0))
                                            <p>Wrong</p>
                                            @else
                                            Học thử
                                            @endif
                                          </button></span>
                                        </div>


                                    </div>

                                </div>
                            @endif
                        <?php $i++ ?>
                         @endforeach
                         @foreach ($data  as $item)
                         @if($itemmucdo->id_mucdo==$item->id_mucdo)
                             <div class="col-lg-4 col-md-6 course-item">
                                 <div class="course-thumb">
                                     <img src="{{ $item->anh }}" alt="" style="opacity: 0.2">
                                     <div class="course-cat">
                                     <span>{{ $item->ten }} <i class="fa fa-lock" aria-hidden="true"></i></span>
                                     </div>
                                 </div>

                             </div>
                         @endif
                     <?php $i++ ?>
                      @endforeach

                    @else
                        @foreach ($data as $item)
                            @if($itemmucdo->id_mucdo==$item->id_mucdo)
                                <div class="col-lg-4 col-md-6 course-item">
                                    <div class="course-thumb">
                                        <a href="/ctbaihoc/{{ $idbaihoc}}/{{ $i }}/-1"><img src="{{ $item->anh }}" alt=""></a>
                                        <div class="course-cat">
                                                <span>{{ $item->ten }} <br><button class="btn btn-sm btn-light">
                                                        @if ($temp[$i]==1)
                                                        <p>Accept</p>
                                                    @elseif(($temp[$i]==0))
                                                    <p>Wrong</p>
                                                    @else
                                                    Chưa làm
                                                    @endif
                                        </div>
                                    </div>

                                </div>
                            @endif
                            <?php $i++ ?>
                        @endforeach
                    @endif


				<!-- course item -->
			</div>
			@endif
	    @endforeach

		</div>
	</section>
	<!-- Courses section end-->


	<!-- Newsletter section -->

@endsection
