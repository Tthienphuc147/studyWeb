@extends('master')
@section('title')
Đăng ký
@endsection
@section('content')
<div class="site-breadcrumb">
		<div class="container">
			<a href="#"><i class="fa fa-home"></i> Home</a> <i class="fa fa-angle-right"></i>
			<span>Đăng ký</span>
		</div>
	</div>
<section class="full-courses-section spad pt-0">
		<div class="container">
			<div class="login-page">
                <h2>ĐĂNG KÝ TÀI KHOẢN HỌC VIÊN</h2>

                <div class="form register-form">
                    @if (count($errors)>0)
                    <div class="alert alert-danger">
                        @foreach ($errors->all() as $err)
                            {{$err}}<br>
                        @endforeach
                    </div>

                    @endif
                    @if (session('thongbao'))
                        <div class="alert alert-success">
                            {{session('thongbao')}}
                        </div>
                    @endif


                  <form  action="/register" method="POST">
                    {{ csrf_field() }}
                    <div class="row">
                        <input type="hidden" name="_token" value={{csrf_token()}}>
                        <div class="col-4 text-left">
                            Họ và tên (*)
                        </div>
                        <div class="col-8">
                            <input type="text" placeholder="Nhập họ và tên" name="name"/>
                        </div>
                    </div>
                    <div class="row">
                        <input type="hidden" name="_token" value={{csrf_token()}}>
                        <div class="col-4 text-left">
                            Email (*)
                        </div>
                        <div class="col-8">
                            <input type="email" placeholder="Nhập email" name="email"/>
                        </div>
                    </div>
                    <div class="row">
                        <input type="hidden" name="_token" value={{csrf_token()}}>
                        <div class="col-4 text-left">
                            Mật khẩu (*)
                        </div>
                        <div class="col-8">
                            <input type="password" placeholder="Nhập mật khẩu" name="password"/>
                        </div>
                    </div>
                    <div class="row">
                        <input type="hidden" name="_token" value={{csrf_token()}}>
                        <div class="col-4 text-left">
                            Nhập lại mật khẩu (*)
                        </div>
                        <div class="col-8">
                            <input type="password" placeholder="Nhập lại mật khẩu" name="passwordRetype"/>
                        </div>
                    </div>
                    <div class="row">
                        <input type="hidden" name="_token" value={{csrf_token()}}>
                        <div class="col-4 text-left">
                            Số điện thoại (*)
                        </div>
                        <div class="col-8">
                            <input type="text" placeholder="Nhập số điện thoại" name="phone"/>
                        </div>
                    </div>
                    <div class="row">
                        <input type="hidden" name="_token" value={{csrf_token()}}>
                        <div class="col-4 text-left">
                            Ngày sinh
                        </div>
                        <div class="col-8">
                            <input type="date" placeholder="Nhập ngày sinh" name="date" pattern="\m{2}-\d{2}-\y{4}"/>
                        </div>
                    </div>








                   <button id="register" type="submit" >Đăng ký </button>
                  </form>
                </div>
              </div>

		</div>
	</section>
	<!-- Courses section end-->


	<!-- Newsletter section -->

@endsection
