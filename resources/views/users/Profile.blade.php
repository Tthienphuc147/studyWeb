@extends('master')
@section('title')
Thông tin cá nhân	
@endsection
@section('content')
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<style> 
body {
	background-color: #e1e0db;
	background-image: url({{ asset('public/img/bg.jpg') }});
	background-repeat: repeat;
	font-size:13px;
	line-height: 17px;
	color:#000;
}
.name{
	width:500px;
	color:#1b4491;
	margin-bottom:3px;
	clear:both;
	text-shadow: 0.1px 1px 2px black;
}
.name span {
	display:block;
	margin-top:-5px;
	font-size: 25px;
	font-style: italic;
	color:#05003d;
}
.self {
	width:500px;
	float:left;
	padding-top:11px;
	margin-left:0;
	margin-bottom:15px;
	margin-left:38px;
}

.self ul {
	padding-top: 10px;
}

.self ul li {
	background-repeat: no-repeat;
	padding-left:0;
	background-position: 0 .1em;
	height:25px;
	display:block;
	margin-top:-2px;
}
.paper-top {
	width:828px;
	margin:0 auto;
	background-image:url({{ asset('public/img/ptop.jpg') }});
	background-repeat:no-repeat;
	height:126px;
}

#paper-mid {
	width:828px;
	margin:0 auto;
	background-image:url({{ asset('public/img/pmid.jpg') }});
	background-repeat:repeat-y;
	display:block;
	padding:0;
	overflow: hidden;
	padding-bottom:75px;
	padding-top:7px;
}

.paper-bottom {
	width:828px;
	height:18px;
	margin:0 auto;
	background-image:url({{ asset('public/img/pbottom.jpg') }});
	background-repeat:no-repeat;
}
/* SELF INFORMATION */
/* ----------------------------------------- */

.self {
	width:250px;
	float:left;
	padding-top:11px;
	margin-left:38px;
	margin-bottom:15px;
}

.self ul {
	padding-top: 10px;
}

.self ul li.ad {
	background-image:url({{ asset('public/img/icn-ad.gif') }});
}

.self ul li.mail {
	background-image:url({{ asset('public/img/icn-mail.gif') }});
}

.self ul li.tel {
	background-image:url({{ asset('public/img/icn-tel.gif') }});
}

.self ul li.birthday {
	background-image:url({{ asset('public/img/birthday.jpg') }});
}

.self ul li {
	background-repeat: no-repeat;
	padding-left:26px;
	background-position: 0 .1em;
	height:25px;
	display:block;
	margin-top:-2px;
}
img.portrait {
	border:1px solid #000;
	padding:10px;
	margin-left:50px;
	float:left;	
}
.entry {
	width:720px;
	display: block;
	padding-top:55px;
	clear: both;
	margin-left: 6px;
}
.col-1{
	padding-top:20px;
	margin-left: 60px;
	float:left;
}
.col-2 p{
	font-size: 20px;
	margin-left: 0 auto;
	font-family: monospace;
	color: black;
}
</style>
</head>
<body>
    <!-- Begin Paper -->
    <div id="paper">
      <div class="paper-top"></div>
      <div id="paper-mid">
        <div class="entry">
          <!-- Begin Image -->
          <img class="portrait" src="{{ asset('public/img/image.jpg') }}" alt="John Smith" />
          <!-- End Image -->
          <!-- Begin Personal Information -->
          <div class="self">
            <h3 class="name">{{$user -> name}}<br />
              <span>{{ $acctype }}</span></h3>
            <ul>
              <li class="ad">111 Lorem Street, 34785, Ipsum City</li>
              <li class="mail">{{ $user -> email }}</li>
              <li class="tel">0{{ $user -> sdt}}</li>
              <li class="birthday">{{ $user -> ngaysinh }}</li>
            </ul>
          </div>
          <!-- End Personal Information -->
        </div>
        <!-- Begin 1st Row -->
        <div class="col-1">
          <h5 class="name">Tổng điểm</h5>
          <div class="col-2">
          <p>{{ $diem }}</p>
      	</div>
        </div>
        <!-- End 1st Row -->
        <!-- Begin 2nd Row -->
        <div class="col-1">
          <h5 class="name">Xếp hạng</h5>
          <div class="col-2">
          	<p>{{$rank}}</p>
          </div>
        </div>
      </div>
      <div class="clear"></div>
      <div class="paper-bottom"></div>
    </div>
    <!-- End Paper -->
</body>
</html>
@endsection
