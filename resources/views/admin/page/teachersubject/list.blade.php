@extends('admin.masterAdmin')
@section('content')
<h3><i class="fa fa-angle-right"></i>Chọn môn học và giáo viên muốn add vào</h3>
<div class="row mt">
    <div class="col-md-12">
      <div class="content-panel">
      <form role="form" class="form-horizontal style-form"  action="/admin/addteachersubject/add/{{$id_lophoc}}" method="POST">
                {{ csrf_field() }}
      <select name="monhoc" style="min-width:200px">
      @foreach ($data as $key=>$item)
        <option value="{{$item->id}}">{{$item->tenmonhoc}}</option>
        @endforeach
        
      </select>
      <select name="teacher" style="min-width:200px">
      @foreach ($listuser as $key=>$item)
        <option value="{{$item->id}}">{{$item->name}}</option>
        @endforeach
        
      </select>
      <button class="btn btn-primary" type="submit">Thêm giáo viên và môn học</button>
        </form>
      </div>
      <!-- /content-panel -->
    </div>
    <!-- /col-md-12 -->
  </div>
@endsection
