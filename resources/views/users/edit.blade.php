@extends('master')
@section('title')
Cập nhật thông tin cá nhân	
@endsection
@section('content')
	@if(Session::has('message'))
		<p>{{Session::get('message')}}</p>
	@endif
	<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="UTF-8">
	<style>
	.col-25{
    float:left;
    width: 30%;
    margin-top: 6px;
	}
	.col-75{
    	float: left;
    	width: 70%;
    	margin-top: 6px;
	}
	#update-info{
		margin-top:50px;
		margin-left: 0 auto;
	}
	form input:focus, form textarea:focus { outline: none; }

	.txt{
		display: inline-block;
  	padding: 8px 9px;
  	padding-right: 30px;
  	width: 240px;
  	font-family: 'Oxygen', sans-serif;
  	font-size: 1em;
  	font-weight: normal;
  	color: #898989;
  	background-color: #f0f0f0;
  	background-position: 110% center;
  	background-repeat: no-repeat;
  	border: 1px solid #ccc;
  	text-shadow: 0 1px 0 rgba(255,255,255,0.75);
  	-webkit-box-sizing: content-box;
  	-moz-box-sizing: content-box;
  	box-sizing: content-box;
  	-webkit-border-radius: 3px;
  	-moz-border-radius: 3px;
  	border-radius: 3px;
  	-webkit-box-shadow: 0 1px 2px rgba(25, 25, 25, 0.25) inset, -1px 1px #fff;
  	-moz-box-shadow: 0 1px 2px rgba(25, 25, 25, 0.25) inset, -1px 1px #fff;
  	box-shadow: 0 1px 2px rgba(25, 25, 25, 0.25) inset, -1px 1px #fff;
  	-webkit-transition: all 0.3s linear;
  	-moz-transition: all 0.3s linear;
  	transition: all 0.3s linear;
	}
form .txt:focus, form .txtarea:focus {
  width: 300px;
  color: #545454;
  background-color: #fff;
  background-position: 110% center;
  background-repeat: no-repeat;
  border-color: #059;
  -webkit-box-shadow: 0 1px 4px -1px #a8a8a8 inset, 0 1px rgba(255, 255, 255, 0.6), 0 0 11px rgba(70, 100, 200, 0.7);
  -moz-box-shadow: 0 1px 4px -1px #a8a8a8 inset, 0 1px rgba(255, 255, 255, 0.6), 0 0 11px rgba(70, 100, 200, 0.7);
  box-shadow: 0 1px 4px -1px #a8a8a8 inset, 0 1px rgba(255, 255, 255, 0.6), 0 0 11px rgba(70, 100, 200, 0.7);
}
form .txtarea:focus {
  width: 375px;
  background-position: 110% 4%;
}
 .form-info{
		width: 700px;
		height: auto;
		padding-top: 100px;
		padding-bottom: 100px;
		text-align: center;
		border:2px ridge lightgrey;
		margin:0 auto;
		background: white;
	}
	body{
		background:#e3edec;
	}
	</style>
	</head>
	<body>
		<div class="paper">
		<div class="form-info">
		<form method="post" action="{{route('users.update',$user)}}">
   		 	{{ csrf_field() }}
    		{{ method_field('patch') }}
    		<div class="col-25">
    			Họ và tên
    		</div>
    		<div class="col-75">
    			<input type="text" name="name"  class="txt" value="{{ $user->name }}" required>
    		</div>
    		<div class="col-25">
    			Số điện thoại
    		</div>
    		<div class="col-75">
    			<input type="number" name="sdt"  class="txt" value="{{ $user->sdt }}" required>
    		</div>
    		<div class="col-25">
    			Ngày sinh
    		</div>
    		<div class="col-75">
    			<input type="date" name="ngaysinh"  class="txt" value="{{ $user->ngaysinh }}" required>
    		</div>
    		<div class="col-25">
    			Mật khẩu
    		</div>
    		<div class="col-75">
    			<input type="password" name="password"  class="txt" value="{{ $user->password }}" required>
    		</div>
    		<button id="update-info" class="btn btn-default" type="submit">Cập nhật thông tin</button>
		</form>
		</div>
		</div>
	</body>
	</html>
@endsection
