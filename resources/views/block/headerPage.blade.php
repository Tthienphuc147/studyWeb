﻿{{-- <div id="preloder">
    <div class="loader"></div>
</div>

<nav class="nav-section">
    <div class="container">
        <div class="nav-right">
            @if (request()->session()->has('id'))

            <div class="dropdown">
                    <button class="dropbtn"><i class="fa fa-user" aria-hidden="true"> {{ request()->session()->get('namelogin') }}</i></button>
                    <div class="dropdown-content">
                    <a href="/regcourse/{{ request()->session()->get('id') }}">Đăng ký lớp học</a>
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
</nav> --}}
<header id="header-v1" class="navbar-wrapper">
            <div class="container">
                <div class="row">
                    <nav class="navbar navbar-default">
                        <div class="row">
                            <div class="col-md-3">
                                <div class="navbar-header">
                                    <div class="navbar-brand">
                                        <h1>
                                            <a href="/">
                                               AI LEARNING
                                            </a>
                                        </h1>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-9">
                                <!-- Header Topbar -->
                                <div class="header-topbar hidden-sm hidden-xs">
                                    <div class="row">
                                        <div class="col-sm-6">
                                        </div>
                                        <div class="col-sm-6">
                                           @if (!request()->session()->has('id'))
                                            <div class="topbar-links">
                                                <a href="/loginview"><i class="fa fa-lock"></i>Đăng nhập</a>
                                                <span>|</span>
                                                <a href="/showregister"><i class="fa fa-lock"></i>Đăng ký</a>
                                            </div>
                                        @endif
                                        </div>
                                    </div>
                                </div>
                                <div class="navbar-collapse hidden-sm hidden-xs">
                                    <ul class="nav navbar-nav">
                                        <li><a href="/">TRANG CHỦ</a></li>
                                        <li><a href="#">LỚP HỌC</a></li>
                                        <li><a href="/ranking">BẢNG XẾP HẠNG</a></li>
                                        <li><a href="#">LIÊN HỆ</a></li>
                                        @if (request()->session()->has('id'))
                                        <li class="dropdown">
                                          <a data-toggle="dropdown" class="dropdown-toggle disabled">   {{ request()->session()->get('namelogin') }}</a>
                                     
                                        <ul class="dropdown-menu">
                                            <li><a href="/regcourse/{{ request()->session()->get('id') }}">Đăng ký lớp học</a></li>
                                            <li><a href="/users/{{ request()->session()->get('id') }}">Tài khoản</a></li>
                                            <li><a href="/editprofile/{{ request()->session()->get('id') }}">Sửa tài khoản</a></li>
                                            <li><a href="/logout">Đăng xuất</a></li>
                                        </ul>
                                        </li>
                                        @endif
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="mobile-menu hidden-lg hidden-md">
                            <a href="#mobile-menu"><i class="fa fa-navicon"></i></a>
                            <div id="mobile-menu">
                                <ul>
                                    <li class="mobile-title">
                                        <h4>menu</h4>
                                        <a href="#" class="close"></a>
                                    </li>
                                    <li><a href="contact.html">TRANG CHỦ</a></li>
                                    <li><a href="contact.html">LỚP HỌC</a></li>
                                    <li><a href="services.html">BẢNG XẾP HẠNG</a></li>
                                    <li><a href="contact.html">LIÊN HỆ</a></li>
                                       @if (request()->session()->has('id'))
                                        <li class="dropdown">
                                          <a data-toggle="dropdown" class="dropdown-toggle disabled">   {{ request()->session()->get('namelogin') }}</a>
                                     
                                        <ul class="dropdown-menu">
                                            <li><a href="/regcourse/{{ request()->session()->get('id') }}">Đăng ký lớp học</a></li>
                                            <li><a href="/users/{{ request()->session()->get('id') }}">Tài khoản</a></li>
                                            <li><a href="/editprofile/{{ request()->session()->get('id') }}">Sửa tài khoản</a></li>
                                            <li><a href="/logout">Đăng xuất</a></li>
                                        </ul>
                                        </li>
                                        @endif
                                </ul>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </header>
           <section class="page-banner services-banner">
            <div class="container">
                <div class="banner-header">
                    <h2>@yield('titlePage')</h2>
                    <span class="underline center"></span>

                </div>
            </div>
        </section>