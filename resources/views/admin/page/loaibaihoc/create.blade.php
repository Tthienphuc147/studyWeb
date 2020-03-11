@extends('admin.masterAdmin')
@section('content')
<div class="page-header"><h4>Quản lý loại bài học</h4></div>

<?php //Hiển thị thông báo thành công?>
@if ( Session::has('success') )
	<div class="alert alert-success alert-dismissible" role="alert">
		<strong>{{ Session::get('success') }}</strong>
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
			<span class="sr-only">Close</span>
		</button>
	</div>
@endif

<?php //Hiển thị thông báo lỗi?>
@if ( Session::has('error') )
	<div class="alert alert-danger alert-dismissible" role="alert">
		<strong>{{ Session::get('error') }}</strong>
		<button type="button" class="close" data-dismiss="alert" aria-label="Close">
			<span aria-hidden="true">&times;</span>
			<span class="sr-only">Close</span>
		</button>
	</div>
@endif

<?php //Form thêm mới?>
<p><a class="btn btn-primary" href="{{ url('/loaibaihoc') }}">Về danh sách</a></p>
<div class="col-xs-4 col-xs-offset-4">
	<center><h4>Thêm loại bài học</h4></center>
	<form action="{{url('/loaibaihoc/create') }}" method="post">
		<input type="hidden" id="_token" name="_token" value="{{ csrf_token() }}"/>
		<div class="form-group">
			<label for="tenloaibaihoc">Tên loại bài học</label>
			<input type="text" class="form-control" id="tenloaibaihoc" name="tenloaibaihoc" placeholder="Tên loại bài học" maxlength="255" required />
		</div>	
		<center><button type="submit" class="btn btn-primary">Thêm</button></center>
	</form>
</div>

@endsection