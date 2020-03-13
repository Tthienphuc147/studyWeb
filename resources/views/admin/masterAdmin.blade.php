<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="Dashboard">
  <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
  <title>Trang quản lý học tập trực tuyến</title>

  <!-- Favicons -->
  <!-- Bootstrap core CSS -->
  <link href="{{ asset('public/admin/lib/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <!--external css-->
  <link href="{{ asset('public/admin/lib/font-awesome/css/font-awesome.css') }}" rel="stylesheet" />
  <!-- Custom styles for this template -->
  <link href="{{ asset('public/admin/css/style.css') }}" rel="stylesheet">
  <link href="{{ asset('public/admin/css/style-responsive.css') }}" rel="stylesheet">
  <script src="{{ asset('public/ckeditor/ckeditor.js') }}"></script>

</head>

<body>
  <section id="container">
    @include('admin.component.header')
    <aside>
      <div id="sidebar" class="nav-collapse ">
        <!-- sidebar menu start-->

     @include('admin.component.sidebar')
      </div>
    </aside>
    <section id="main-content">
      <section class="wrapper site-min-height">
        <div class="row mt">
          <div class="col-lg-12">
          @yield('content')
          </div>
        </div>
      </section>
    </section>
  @include('admin.component.footer')

  </section>  <script src="{{ asset('public/admin/lib/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('public/admin/lib/bootstrap/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('public/admin/lib/jquery-ui-1.9.2.custom.min.js') }}"></script>
  <script src="{{ asset('public/admin/lib/jquery.ui.touch-punch.min.js') }}"></script>
  <script class="include" type="text/javascript" src="{{ asset('public/admin/lib/jquery.dcjqaccordion.2.7.js') }}"></script>
  <script src="{{ asset('public/admin/lib/jquery.scrollTo.min.js') }}"></script>
  <script src="{{ asset('public/admin/lib/jquery.nicescroll.js') }}" type="text/javascript"></script>
  <script src="{{ asset('public/admin/lib/common-scripts.js') }}"></script>

</body>

</html>
