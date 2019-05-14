<div id="preloder">
    <div class="loader"></div>
</div>

<!-- header section -->
{{-- <header class="header-section">
   <div class="container">
        <!-- logo -->
        <a href="/" class="site-logo"></a>

    </div>
</header> --}}
<!-- header section end-->


<!-- Header section  -->
<nav class="nav-section">
    <div class="container">
        <div class="nav-right">
            @if (request()->session()->has('id'))
            <a href="/logout"><button class="btn">Đăng Xuất</button></a>
            @else
            <a href="/loginview"><button class="btn">Đăng nhập</button></a>
            @endif


        </div>
        <ul class="main-menu">
            <li class="active"><a href="/">Trang chủ</a></li>
            <li><a href="/">Lớp học</a></li>
            <li><a href="/">Kiểm tra</a></li>
            <li><a href="/">Liên hệ</a></li>

        </ul>
    </div>
</nav>
