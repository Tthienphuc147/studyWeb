@extends('masterPage')
@section('title')
Đăng ký
@endsection
@section('titlePage')
Đăng ký
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
                                                            <h2>ĐĂNG KÝ TÀI KHOẢN</h2>
                                                            <span class="underline left"></span>
                                                        </div>
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
                                                    
                                                        <form class="login"  action="/register" method="POST">
                                                            <{{ csrf_field() }} 
                                                            <p class="form-row form-row-first input-required">
                                                                
                                                                <input type="text" placeholder="Họ và tên (*)" name="name" class="input-text">
                                                             </p>
                                                            <p class="form-row form-row-last input-required">
                                                               <input type="hidden" name="_token" value={{csrf_token()}}> 
                                                               
                                                                <input type="email" placeholder="Email (*)"  name="email" class="input-text">
                                                            </p>
                                                            <p class="form-row form-row-first input-required">
                                                               
                                                                <input type="password" placeholder="Mật khẩu (*)"  name="password" class="input-text">
                                                             </p>
                                                            <p class="form-row form-row-last input-required">
                                                               
                                                                <input type="password" placeholder="Nhập lại mật khẩu (*)"  name="passwordRetype" class="input-text">
                                                            </p>
                                                            <p class="form-row form-row-first input-required">
                                                              
                                                                <input type="tel" placeholder="Số điện thoại (*)"  name="phone" class="input-text">
                                                             </p>
                                                            <p class="form-row form-row-last input-required">
                                                              
                                                                <input type="date"  name="ngaysinh" class="input-text">
                                                            </p>
                                                            <div class="clear"></div>

                                                            <input type="submit" value="đăng ký" name="login" class="button btn btn-default">
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
