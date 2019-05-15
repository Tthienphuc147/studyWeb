@extends('master')
@section('title')
Lớp học
@endsection
@section('content')
<div class="site-breadcrumb">
		<div class="container">
			<a href="#"><i class="fa fa-home"></i> Home</a> <i class="fa fa-angle-right"></i>
			<span>Raking Contest</span>
		</div>
	</div>
<section class="full-courses-section spad pt-0">
		<div class="container">
		<table class="table table-striped">
                    <thead>
                        <tr>
                            <th>STT</th>
                            <th>Họ Tên</th>
                            <th>Email</th>
                            <th>Số câu đúng</th>
                        </tr>
                    </thead>
                    <tbody>
						@for($i=0;$i<count($data);$i++)
                        <tr>
                            <td>{{$i+1}}</td>
                            <td>{{$data[$i]->name}}</td>
                            <td>{{$data[$i]->email}}</td>
                            <td>{{$point[$i]}}</td>
                        </tr>
                       @endfor
                    </tbody>
                </table>
			
		</div>
	</section>
	<!-- Courses section end-->


	<!-- Newsletter section -->

@endsection

