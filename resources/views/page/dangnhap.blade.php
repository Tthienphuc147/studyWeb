@extends('masterPage')
@section('title')
Đăng nhập
@endsection
@section('titlePage')
Đăng nhập
@endsection
@section('content')
 <div id="content" class="site-content">
            <div id="primary" class="content-area">
                <main id="main" class="site-main">
                    <div class="signin-main">
                        <div class="container">
                            <div class="woocommerce">
                                <div class="woocommerce-login">
                                    <div class="company-info signin-register">
                            
                                            <div class="row" style="display: flex;justify-content: center;">
                                                <div class="col-md-8">
                                                    <div class="company-detail bg-dark ">
                                                        <div class="signin-head">
                                                            <h2>ĐĂNG NHẬP TÀI KHOẢN</h2>
                                                            <span class="underline left"></span>
                                                        </div>
                                                        @if(session('message'))
                                                        <div class="alert alert-danger">
                                                            <strong>{{ session('message') }}</strong>
                                                        </div>
                                                    @endif
                                                        <form class="login" action="/login" method="POST">
                                                           {{ csrf_field() }} 
                                                            <p class="form-row form-row-first input-required">
                                                                <input type="email" placeholder="Nhập email"  name="email" class="input-text">
                                                             </p>
                                                            <p class="form-row form-row-last input-required">
                                                                <input type="password" placeholder="Nhập mật khẩu"  name="password" class="input-text">
                                                            </p>
                                                            <div class="clear"></div>

                                                            <input type="submit" value="đăng nhập" name="login" class="button btn btn-default">
                                                            <div class="clear"></div>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                  

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>

@endsection
