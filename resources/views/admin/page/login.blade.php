<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title>Đăng nhập</title>
  <!-- Favicons -->
  <!-- Bootstrap core CSS -->
  <link href="{{ asset('public/admin/lib/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <!--external css-->
  <link href="{{ asset('public/admin/lib/font-awesome/css/font-awesome.css') }}" rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="{{ asset('public/admin/css/style.css') }}" rel="stylesheet">
  <link href="{{ asset('public/admin/css/style-responsive.css') }}" rel="stylesheet">
</head>

<body>

  <div id="login-page">
    <div class="container">
      <form action="/showAdmin/loginAdmin" class="form-login" method="POST">
        {{ csrf_field() }}
        <h2 class="form-login-heading">QUẢN LÝ HỌC TẬP TRỰC TUYẾN</h2>
        <div class="login-wrap">
          <input type="text" class="form-control" placeholder="Nhập email" name="email" autofocus>
          <br>
          <input type="password" class="form-control" placeholder="Nhập mật khẩu" name="password">

          <button class="btn btn-theme btn-block"  type="submit"><i class="fa fa-lock"></i> ĐĂNG NHẬP</button>

      </form>
    </div>
  </div>
  <script src="{{ asset('public/admin/lib/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('public/admin/lib/bootstrap/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('public/admin/lib/jquery-ui-1.9.2.custom.min.js') }}"></script>
  <script src="{{ asset('public/admin/lib/jquery.ui.touch-punch.min.js') }}"></script>
  <script class="include" type="text/javascript" src="{{ asset('public/admin/lib/jquery.dcjqaccordion.2.7.js') }}"></script>
  <script src="{{ asset('public/admin/lib/jquery.scrollTo.min.js') }}"></script>
  <script src="{{ asset('public/admin/lib/jquery.nicescroll.js') }}" type="text/javascript"></script>
  <script src="{{ asset('public/admin/lib/common-scripts.js') }}"></script>
</body>

</html>
