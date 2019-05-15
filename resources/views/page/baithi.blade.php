<style>
        #qid {
    padding: 10px 15px;
    -moz-border-radius: 50px;
    -webkit-border-radius: 50px;
    border-radius: 20px;
    }
    .container-fluid{
        background-color: #f6783a;
    }
    label.btn {
        padding: 18px 60px;
        white-space: normal;
        -webkit-transform: scale(1.0);
        -moz-transform: scale(1.0);
        -o-transform: scale(1.0);
        -webkit-transition-duration: .3s;
        -moz-transition-duration: .3s;
        -o-transition-duration: .3s
    }

    label.btn:hover {
        text-shadow: 0 3px 2px rgba(0,0,0,0.4);
        -webkit-transform: scale(1.1);
        -moz-transform: scale(1.1);
        -o-transform: scale(1.1)
    }
    label.btn-block {
        text-align: left;
        position: relative
    }

    label .btn-label {
        position: absolute;
        left: 0;
        top: 0;
        display: inline-block;
        padding: 0 10px;
        background: rgba(0,0,0,.15);
        height: 100%
    }

    label .glyphicon {
        top: 34%
    }
    .element-animation1 {
        animation: animationFrames ease .8s;
        animation-iteration-count: 1;
        transform-origin: 50% 50%;
        -webkit-animation: animationFrames ease .8s;
        -webkit-animation-iteration-count: 1;
        -webkit-transform-origin: 50% 50%;
        -ms-animation: animationFrames ease .8s;
        -ms-animation-iteration-count: 1;
        -ms-transform-origin: 50% 50%
    }
    .element-animation2 {
        animation: animationFrames ease 1s;
        animation-iteration-count: 1;
        transform-origin: 50% 50%;
        -webkit-animation: animationFrames ease 1s;
        -webkit-animation-iteration-count: 1;
        -webkit-transform-origin: 50% 50%;
        -ms-animation: animationFrames ease 1s;
        -ms-animation-iteration-count: 1;
        -ms-transform-origin: 50% 50%
    }
    .element-animation3 {
        animation: animationFrames ease 1.2s;
        animation-iteration-count: 1;
        transform-origin: 50% 50%;
        -webkit-animation: animationFrames ease 1.2s;
        -webkit-animation-iteration-count: 1;
        -webkit-transform-origin: 50% 50%;
        -ms-animation: animationFrames ease 1.2s;
        -ms-animation-iteration-count: 1;
        -ms-transform-origin: 50% 50%
    }
    .element-animation4 {
        animation: animationFrames ease 1.4s;
        animation-iteration-count: 1;
        transform-origin: 50% 50%;
        -webkit-animation: animationFrames ease 1.4s;
        -webkit-animation-iteration-count: 1;
        -webkit-transform-origin: 50% 50%;
        -ms-animation: animationFrames ease 1.4s;
        -ms-animation-iteration-count: 1;
        -ms-transform-origin: 50% 50%
    }
    @keyframes animationFrames {
        0% {
            opacity: 0;
            transform: translate(-1500px,0px)
        }

        60% {
            opacity: 1;
            transform: translate(30px,0px)
        }

        80% {
            transform: translate(-10px,0px)
        }

        100% {
            opacity: 1;
            transform: translate(0px,0px)
        }
    }

    @-webkit-keyframes animationFrames {
        0% {
            opacity: 0;
            -webkit-transform: translate(-1500px,0px)
        }
        60% {
            opacity: 1;
            -webkit-transform: translate(30px,0px)
        }

        80% {
            -webkit-transform: translate(-10px,0px)
        }

        100% {
            opacity: 1;
            -webkit-transform: translate(0px,0px)
        }
    }

    @-ms-keyframes animationFrames {
        0% {
            opacity: 0;
            -ms-transform: translate(-1500px,0px)
        }

        60% {
            opacity: 1;
            -ms-transform: translate(30px,0px)
        }
        80% {
            -ms-transform: translate(-10px,0px)
        }

        100% {
            opacity: 1;
            -ms-transform: translate(0px,0px)
        }
    }

    .modal-header {
        background-color: transparent;
        color: inherit
    }

    .modal-body {
        min-height: 205px
    }
    #loadbar {
        position: absolute;
        width: 62px;
        height: 77px;
        top: 2em
    }
    .blockG {
        position: absolute;
        background-color: #FFF;
        width: 10px;
        height: 24px;
        -moz-border-radius: 8px 8px 0 0;
        -moz-transform: scale(0.4);
        -moz-animation-name: fadeG;
        -moz-animation-duration: .8800000000000001s;
        -moz-animation-iteration-count: infinite;
        -moz-animation-direction: linear;
        -webkit-border-radius: 8px 8px 0 0;
        -webkit-transform: scale(0.4);
        -webkit-animation-name: fadeG;
        -webkit-animation-duration: .8800000000000001s;
        -webkit-animation-iteration-count: infinite;
        -webkit-animation-direction: linear;
        -ms-border-radius: 8px 8px 0 0;
        -ms-transform: scale(0.4);
        -ms-animation-name: fadeG;
        -ms-animation-duration: .8800000000000001s;
        -ms-animation-iteration-count: infinite;
        -ms-animation-direction: linear;
        -o-border-radius: 8px 8px 0 0;
        -o-transform: scale(0.4);
        -o-animation-name: fadeG;
        -o-animation-duration: .8800000000000001s;
        -o-animation-iteration-count: infinite;
        -o-animation-direction: linear;
        border-radius: 8px 8px 0 0;
        transform: scale(0.4);
        animation-name: fadeG;
        animation-duration: .8800000000000001s;
        animation-iteration-count: infinite;
        animation-direction: linear
    }
    #rotateG_01 {
        left: 0;
        top: 28px;
        -moz-animation-delay: .33s;
        -moz-transform: rotate(-90deg);
        -webkit-animation-delay: .33s;
        -webkit-transform: rotate(-90deg);
        -ms-animation-delay: .33s;
        -ms-transform: rotate(-90deg);
        -o-animation-delay: .33s;
        -o-transform: rotate(-90deg);
        animation-delay: .33s;
        transform: rotate(-90deg)
    }
    #rotateG_02 {
        left: 8px;
        top: 10px;
        -moz-animation-delay: .44000000000000006s;
        -moz-transform: rotate(-45deg);
        -webkit-animation-delay: .44000000000000006s;
        -webkit-transform: rotate(-45deg);
        -ms-animation-delay: .44000000000000006s;
        -ms-transform: rotate(-45deg);
        -o-animation-delay: .44000000000000006s;
        -o-transform: rotate(-45deg);
        animation-delay: .44000000000000006s;
        transform: rotate(-45deg)
    }
    #rotateG_03 {
        left: 26px;
        top: 3px;
        -moz-animation-delay: .55s;
        -moz-transform: rotate(0deg);
        -webkit-animation-delay: .55s;
        -webkit-transform: rotate(0deg);
        -ms-animation-delay: .55s;
        -ms-transform: rotate(0deg);
        -o-animation-delay: .55s;
        -o-transform: rotate(0deg);
        animation-delay: .55s;
        transform: rotate(0deg)
    }
    #rotateG_04 {
        right: 8px;
        top: 10px;
        -moz-animation-delay: .66s;
        -moz-transform: rotate(45deg);
        -webkit-animation-delay: .66s;
        -webkit-transform: rotate(45deg);
        -ms-animation-delay: .66s;
        -ms-transform: rotate(45deg);
        -o-animation-delay: .66s;
        -o-transform: rotate(45deg);
        animation-delay: .66s;
        transform: rotate(45deg)
    }
    #rotateG_05 {
        right: 0;
        top: 28px;
        -moz-animation-delay: .7700000000000001s;
        -moz-transform: rotate(90deg);
        -webkit-animation-delay: .7700000000000001s;
        -webkit-transform: rotate(90deg);
        -ms-animation-delay: .7700000000000001s;
        -ms-transform: rotate(90deg);
        -o-animation-delay: .7700000000000001s;
        -o-transform: rotate(90deg);
        animation-delay: .7700000000000001s;
        transform: rotate(90deg)
    }
    #rotateG_06 {
        right: 8px;
        bottom: 7px;
        -moz-animation-delay: .8800000000000001s;
        -moz-transform: rotate(135deg);
        -webkit-animation-delay: .8800000000000001s;
        -webkit-transform: rotate(135deg);
        -ms-animation-delay: .8800000000000001s;
        -ms-transform: rotate(135deg);
        -o-animation-delay: .8800000000000001s;
        -o-transform: rotate(135deg);
        animation-delay: .8800000000000001s;
        transform: rotate(135deg)
    }
    #rotateG_07 {
        bottom: 0;
        left: 26px;
        -moz-animation-delay: .99s;
        -moz-transform: rotate(180deg);
        -webkit-animation-delay: .99s;
        -webkit-transform: rotate(180deg);
        -ms-animation-delay: .99s;
        -ms-transform: rotate(180deg);
        -o-animation-delay: .99s;
        -o-transform: rotate(180deg);
        animation-delay: .99s;
        transform: rotate(180deg)
    }
    #rotateG_08 {
        left: 8px;
        bottom: 7px;
        -moz-animation-delay: 1.1s;
        -moz-transform: rotate(-135deg);
        -webkit-animation-delay: 1.1s;
        -webkit-transform: rotate(-135deg);
        -ms-animation-delay: 1.1s;
        -ms-transform: rotate(-135deg);
        -o-animation-delay: 1.1s;
        -o-transform: rotate(-135deg);
        animation-delay: 1.1s;
        transform: rotate(-135deg)
    }
    @-moz-keyframes fadeG {
        0% {
            background-color: #000
        }

        100% {
            background-color: #FFF
        }
    }

    @-webkit-keyframes fadeG {
        0% {
            background-color: #000
        }

        100% {
            background-color: #FFF
        }
    }

    @-ms-keyframes fadeG {
        0% {
            background-color: #000
        }

        100% {
            background-color: #FFF
        }
    }

    @-o-keyframes fadeG {
        0% {
            background-color: #000
        }
        100% {
            background-color: #FFF
        }
    }

    @keyframes fadeG {
        0% {
            background-color: #000
        }

        100% {
            background-color: #FFF
        }
    }

</style>





@extends('master')
@section('title')
Bài học
@endsection
@section('content')

<div class="site-breadcrumb">
		<div class="container">
			<a href="#"><i class="fa fa-home"></i> Home</a> <i class="fa fa-angle-right"></i>
        <span>THI</span>
		</div>
	</div>
	<!-- Breadcrumb section end -->


	<!-- Blog page section  -->
	<section class="blog-page-section spad pt-0">
		<div class="container">
			<div class="row">
				<div class="col-md-8">
                <button type="button" class="btn peach-gradient btn-lg" 
		style="padding:10px 5px;width:400px;margin:10px 0px;background: linear-gradient(90deg, rgba(237,177,91,0.9780287114845938) 27%, rgba(218,89,15,0.7259278711484594) 59%, rgba(233,164,51,1) 100%);" >
					<div countdown="" data-date="{{$dem->thoigian}}"style="color:#BB3300;">
					Time End: <span data-days="">00</span> ngày 
								<span data-hours="">00</span> giờ 
								<span data-minutes="">00</span> phút 
								<span data-seconds="">00</span> giây
					</div>
					</button>
						<div class="container-fluid ">
								<div class="modal-dialog">
                                
								  <div class="modal-content">
									 <div class="modal-header">
                                     
                                     <?php $i=0;?>
									</div>
									<div class="modal-body">
<form action=<?php if(count($data)>0){?>"/checkbaithi/{{ $data[0]->id_baihoc }}"<?php };$i=0;?> method="POST">

									    <div class="quiz" id="quiz" data-toggle="buttons">
                                                {{ csrf_field() }}
                                            @foreach($data as $itemm)
                                            <h3>{!! $itemm->noidungbaihoc !!}</h3>
                                            @if($itemm->id_loaitracnghiem==1)    
                                                @foreach ($dapan[$i] as $item)
                                                <label class="element-animation1 btn btn-lg btn-block" style="background-color: #f6783a;color:white"><span class="btn-label"><i class="glyphicon glyphicon-chevron-right"></i></span> <input type="checkbox" name="{{ $item->id }}"  > {{ $item->luachon }}</label>

                                                @endforeach
                                            @else

                                               
                                                <label class="element-animation1 btn btn-lg btn-block" 
                                                style="background-color: #f6783a;color:white"><span class="btn-label">
                                                <i class="glyphicon glyphicon-chevron-right"></i></span> 
                                                @foreach ($dapan[$i] as $item)
                                                <input type="text" name="{{ $item->id }}"  >
                                                @endforeach
                                                 </label>

                                                

                                            @endif
                                            <?php $i++;?>
                                            @endforeach
                                               <button type="submit" class="btn" style="background-color: #f9996a;color:white;margin-top: 20px">NỘP BÀI</button><br/>
                                               
                                        </form>



								        </div>
                                    </div>
                                    
							   <div class="modal-footer text-muted">
								<span id="answer"></span>
							</div>
							</div>
							</div>
							</div>


				</div>
				<!-- sidebar -->
				<div class="col-sm-8 col-md-5 col-lg-4 col-xl-3 offset-xl-1 offset-0 pl-xl-0 sidebar">
					<!-- widget -->
					<div class="widget">
						<form class="search-widget">
							<input type="text" placeholder="Search...">
							<button><i class="ti-search"></i></button>
						</form>
					</div>
					<!-- widget -->
					<div class="widget">
						<h5 class="widget-title">Recent News</h5>
						<div class="recent-post-widget">
							<!-- recent post -->
							<!-- <div class="rp-item">
								<div class="rp-thumb set-bg" ><img src="public/img/blog/1.jpg"/></div>
								<div class="rp-content">
									<h6>Snackable study:How to break up your master's degree</h6>
									<p><i class="fa fa-clock-o"></i> 24 Mar 2018</p>
								</div>
							</div> -->
							<!-- recent post -->
							
						</div>
					</div>
					<!-- widget -->
					
					<!-- widget -->
					<!-- <div class="widget">
						<img src="img/ad.jpg" alt="">
					</div> -->
				</div>
			</div>
		</div>
	</section>

@endsection
