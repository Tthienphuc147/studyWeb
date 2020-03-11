@extends('admin.masterAdmin')
@section('content')

<div class="page-header"><h4>Quản lý mức độ bài học</h4></div>

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

<?php //Hiển thị form sửa mức độ bài học?>
<p><a class="btn btn-primary" href="{{ url('/mucdo') }}">Về danh sách</a></p>
<div class="col-xs-4 col-xs-offset-4">
	<center><h4>Sửa mức độ</h4></center>
	<form action="{{ url('/mucdo/update') }}" method="post">
		<input type="hidden" id="_token" name="_token" value="{!! csrf_token() !!}" />
		<input type="hidden" id="id" name="id" value="{!! $data[0]->id !!}" />
		<div class="form-group">
			<label for="tenmucdo">Tên mức độ</label>
			<input type="text" class="form-control" id="tenmucdo" name="tenmucdo" placeholder="Tên mức độ" maxlength="255" value="{{ $data[0]->tenmucdo}}" required />
		</div>
		<center><button type="submit" class="btn btn-primary">Lưu lại</button></center>
	</form>
</div>

@endsection