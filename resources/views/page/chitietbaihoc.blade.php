@extends('master')
@section('title')
Bài học
@endsection
@section('content')

<div class="site-breadcrumb">
		<div class="container">
			<a href="#"><i class="fa fa-home"></i> Home</a> <i class="fa fa-angle-right"></i>
        <span>{{ $tieude->tenbaihoc }}</span>
		</div>
	</div>
	<!-- Breadcrumb section end -->


	<!-- Blog page section  -->
	<section class="blog-page-section spad pt-0">
		<div class="container">
			<div class="row">
				<div class="col-md-8">
					<div class="post-item post-details">
                    <h1>{!! $data->noidungbaihoc !!}</h1>
                    </div>
                    <div style="">
                    <form action="/check/{{ $data->id }}/{{ $idb }}" method="POST">
                        {{ csrf_field() }}
                                @foreach ($dapan as $item)
                                <input type="checkbox" name="{{ $item->id }}" id=""> {{ $item->luachon }}
                                @endforeach

                               <input type="submit" value="Kiểm tra">
                        </form>

                    </div>
                    <div>
                        @if($anw==1)
                           {!! $data->video !!}
                           @endif
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
							<div class="rp-item">
								<div class="rp-thumb set-bg" data-setbg="img/blog/recent-post/1.jpg"></div>
								<div class="rp-content">
									<h6>Snackable study:How to break up your master's degree</h6>
									<p><i class="fa fa-clock-o"></i> 24 Mar 2018</p>
								</div>
							</div>
							<!-- recent post -->
							<div class="rp-item">
								<div class="rp-thumb set-bg" data-setbg="img/blog/recent-post/2.jpg"></div>
								<div class="rp-content">
									<h6>Op en University plans major ts to number of staff</h6>
									<p><i class="fa fa-clock-o"></i> 24 Mar 2018</p>
								</div>
							</div>
							<!-- recent post -->
							<div class="rp-item">
								<div class="rp-thumb set-bg" data-setbg="img/blog/recent-post/3.jpg"></div>
								<div class="rp-content">
									<h6>My postgrad: ‘I worked on essays as giraffes walked by’</h6>
									<p><i class="fa fa-clock-o"></i> 24 Mar 2018</p>
								</div>
							</div>
							<!-- recent post -->
							<div class="rp-item">
								<div class="rp-thumb set-bg" data-setbg="img/blog/recent-post/4.jpg"></div>
								<div class="rp-content">
									<h6>How to use the Guardian University Guide</h6>
									<p><i class="fa fa-clock-o"></i> 24 Mar 2018</p>
								</div>
							</div>
							<!-- recent post -->
							<div class="rp-item">
								<div class="rp-thumb set-bg" data-setbg="img/blog/recent-post/5.jpg"></div>
								<div class="rp-content">
									<h6>My MBA experience: ‘It was an eye opener’</h6>
									<p><i class="fa fa-clock-o"></i> 24 Mar 2018</p>
								</div>
							</div>
							<!-- recent post -->
							<div class="rp-item">
								<div class="rp-thumb set-bg" data-setbg="img/blog/recent-post/6.jpg"></div>
								<div class="rp-content">
									<h6>My MBA experience: ‘It was an eye opener’</h6>
									<p><i class="fa fa-clock-o"></i> 24 Mar 2018</p>
								</div>
							</div>
						</div>
					</div>
					<!-- widget -->
					<div class="widget">
						<h4 class="widget-title">Tags</h4>
						<div class="tags">
							<a href="#">DEVELOPMENT</a>
							<a href="#">BUSINESS</a>
							<a href="#">PROJECTS</a>
							<a href="#">GOOGLE ADWORDS</a>
							<a href="#">SQL DATABASE</a>
							<a href="#">MARKETING</a>
							<a href="#">DESIGN</a>
						</div>
					</div>
					<!-- widget -->
					<div class="widget">
						<h4 class="widget-title">Categories</h4>
						<ul>
							<li><a href="">Business</a></li>
							<li><a href="">Design</a></li>
							<li><a href="">Management</a></li>
							<li><a href="">Marketing Plans</a></li>
							<li><a href="">Construction</a></li>
							<li><a href="">Honored</a></li>
							<li><a href="">Program development</a></li>
							<li><a href="">My SQL database</a></li>
							<li><a href="">Google Adwords</a></li>
							<li><a href="">Education</a></li>
						</ul>
					</div>
					<!-- widget -->
					<div class="widget">
						<img src="img/ad.jpg" alt="">
					</div>
				</div>
			</div>
		</div>
	</section>

@endsection
