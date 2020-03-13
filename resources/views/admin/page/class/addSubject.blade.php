@extends('admin.masterAdmin')
@section('content')
<h3><i class="fa fa-angle-right"></i>Thêm môn học vào lớp học</h3>
<div class="row mt">
    <div class="col-md-12">
        <div class="content-panel">
            <h4>Danh sách môn học hiện tại</h4>
            <table class="table table-striped table-advance table-hover">
              <thead>
                <tr>
                  <th>STT</th>
                  <th>Môn học</th>
                  <th>Ảnh</th>
                </tr>
              </thead>
              <tbody>
                  @foreach ($data as $key=>$item)
                  <tr>
                  <td >{{$key+1}}</td>
                    <td >{{$item->tenmonhoc}}</td>
                    <td >{{$item->anh}}</td>
                  </tr>
                  @endforeach

              </tbody>
            </table>


          </div>
          <br>
          <div class="content-panel ">
            <h4>Danh sách môn học </h4>
              <div class="form-panel ">
                <form role="form" class="form-horizontal style-form"  action="/admin/showaddsubject/add" method="POST">
                    {{ csrf_field() }}
                    <div>
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

                    </div>
                    @if ($dataSubject)
                    <div class="form-group ">
                        <div class="col-lg-6">

                            <select name="subject" id="" class="checkbox-inline " style="width:100%">
                                @foreach ( $dataSubject as $item)
                                    <option value="{{$item->id}}">{{$item->tenmonhoc}}</option>
                                @endforeach
                              </select>


                        </div>
                        <div class="col-lg-6">
                            <button class="btn btn-theme" type="submit">Thêm môn học</button>

                        </div>
                        </div>
                    @else
                        <h4>Lớp học hiện tại đã thêm đầy đủ môn học</h4>
                    @endif


                </form>
              </div>

          </div>
    </div>


  </div>
@endsection
