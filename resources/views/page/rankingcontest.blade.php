@extends('masterPage')
@section('title')
Bảng xếp hạng
@endsection
@section('titlePage')
Bảng xếp hạng
@endsection
@section('content')
<div id="content" class="site-content">
            <div id="primary" class="content-area">
                <main id="main" class="site-main">
                    <div class="main-news-list">
                        <div class="container">
                            <!-- Start: Search Section -->
                          
                            <!-- End: Search Section -->
                            <div class="row">
                                <div class="col-md-12 " style="padding-top:10rem;">
                                    <div class="news-list-detail">
                                        <div class="news-list-box">
                                            <div class="single-news-list">
                                        
                                                <figure>
                                                    <img src="https://png.pngtree.com/thumb_back/fw800/background/20190223/ourmid/pngtree-hand-drawn-prize-border-background-paintedgiftprizeribbonbackground-image_85435.jpg" alt="News &amp; Event">
                                                </figure>
                                                <div class="clearfix"></div>
                                            </div>
                                        </div>
                                        <div class="row" style="padding-bottom: 10rem;">
                                            <div class="col-xs-12 col-sm-12">
                                                <div class="events-calendar">
                                                    <table class="event-table cart">
                                                        <thead>                             
                                                         
                                                            <tr>
                                                                <th class="product-name">STT</th>
                                                                <th class="product-name">Họ Tên</th>
                                                                <th class="product-name">Email</th>
                                                                <th class="product-name">Số câu đúng</th>
                                                                <th class="product-name"> Điểm </th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            @for($i=0;$i<count($data);$i++)
                                                            <tr>
                                                                <td>{{$i+1}}</td>
                                                                <td>{{$data[$i]->name}}</td>
                                                                <td>{{$data[$i]->email}}</td>
                                                                <td>{{$point[$i]}}</td>
                                                                <td>{{$values[$i]}}</td>
                                                            </tr>
                                                        @endfor
                                                        </tbody>
                                                    </table>
                                                    <div class="clear"></div>
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

