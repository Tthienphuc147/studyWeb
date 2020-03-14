@extends('masterPage')
@section('title')
Bảng xếp hạng
@endsection
@section('titlePage')
Bảng xếp hạng
@endsection
@section('content')

<section class="full-courses-section spad pt-0">
		<div class="container">
		<table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Xếp hạng</th>
                            <th>Họ Tên</th>
                            <th>Email</th>
                            <th>Tổng Điểm </th>
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

