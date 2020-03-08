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

            <div class="dropdown">
                    <button class="dropbtn"><i class="fa fa-user" aria-hidden="true"> {{ request()->session()->get('namelogin') }}</i></button>
                    <div class="dropdown-content">
                    <a href="/users/{{ request()->session()->get('id') }}">Tài khoản</a>
                    <a href="/editprofile/{{ request()->session()->get('id') }}">Sửa tài khoản</a>
                    <a href="/logout">Đăng xuất</a>
                    </div>
                  </div>
            @else
            <a href="/showRegister"><button class="btn btn-sm login">Đăng ký</button></a>
            <a href="/loginview"><button class="btn btn-sm login">Đăng nhập</button></a>
            @endif


        </div>
        <ul class="main-menu">
            <li class="active"><a href="/">Trang chủ</a></li>
            <li><a href="/">Lớp học</a></li>
            <li><a href="/">Kiểm tra</a></li>
            <li><a href="/">Liên hệ</a></li>
            <li><a href="/ranking">Bảng xếp hạng</a></li>


        </ul>
    </div>
</nav>
