@extends('master')
@section('title')
Đăng nhập
@endsection
@section('content')
<div class="site-breadcrumb">
		<div class="container">
			<a href="#"><i class="fa fa-home"></i> Home</a> <i class="fa fa-angle-right"></i>
			<span>Đăng nhập</span>
		</div>
	</div>
<section class="full-courses-section spad pt-0">
		<div class="container">
			<div class="login-page">
                <h2>ĐĂNG NHẬP TÀI KHOẢN</h2>
                @if(session('message'))
                <div class="alert alert-danger">
                    <strong>{{ session('message') }}</strong>
                </div>
            @endif
                <div class="form">

                  <form class="login-form" action="/login" method="POST">
                    {{ csrf_field() }}
                    <input type="email" placeholder="Tài Khoản" name="email"/>
                    <input type="password" placeholder="Mật khẩu" name="password"/>
                   <button id="login" type="submit" >Đăng nhập </button>
                  </form>
                </div>
              </div>

		</div>
	</section>
	<!-- Courses section end-->


	<!-- Newsletter section -->

@endsection
