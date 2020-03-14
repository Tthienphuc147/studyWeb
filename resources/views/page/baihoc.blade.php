@extends('masterPage')
@section('title')
Bài học
@endsection
@section('titlePage')
Bài học
@endsection
@section('content')
<div id="content" class="site-content">
            <div id="primary" class="content-area">
                <main id="main" class="site-main">
                    <div class="books-media-list">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-9 col-md-push-3">
                                    <div class="books-list">
									     @foreach ($databaihoc as $item)
                                        <article> 
                                            <div class="single-book-box">                                                
                                                <div class="post-thumbnail">
                                                    <div class="book-list-icon yellow-icon"></div>
                                                    <a href="/ctbaihoc/{{ $item->id }}" ><img alt="Book" src="https://sachcuatui.net/wp-content/uploads/2019/06/Sach-giao-khoa-toan-lop-1.jpg" height="10px"/></a>                                                                 </div>
                                                <div class="post-detail">
                                           
                                                  
                                                    <header class="entry-header">
                                                        <div class="row">
                                                            <div class="col-sm-6">
                                                                <h3 class="entry-title">
                                                                    <a href="books-media-detail-v1.html">{{ $item->tenbaihoc }}</a>
                                                                </h3>
                                                          
                                                            </div>
                                                        </div>
                                                    </header>
                                                    <div class="entry-content">
                                                        <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable.</p>
                                                    </div>
                                                    <footer class="entry-footer">
                                                        <a class="btn btn-dark-gray" href="/ctbaihoc/{{ $item->id }}">Làm bài</a>
                                                    </footer>
                                                </div>
                                                <div class="clear"></div>
                                            </div>
                                        </article>
                                     @endforeach
                                    </div>
                                   
                                </div>
                                <div class="col-md-3 col-md-pull-9">
                                    <aside id="secondary" class="sidebar widget-area" data-accordion-group>                                      
                                    @if(count($datathi)>0)
                                        <div class="widget widget_recent_entries" >
                                            <h4 class="widget-title">{{ $datathi[0]->tenloaibaihoc }}</h4>
                                            <ul>
													<?php $mytime1=Carbon\Carbon::now();?>
               								 @foreach ($datathi as $item)
                                                <li>
                                                    <figure>
                                                        <a href=<?php if($item->thoigian>$mytime1 && $item->created_at<$mytime1  ){?>"/baithi/{{ $item->id }}"<?php }?>><img src="https://png.pngtree.com/thumb_back/fw800/back_our/20190621/ourmid/pngtree-knowledge-contest-poster-image_190636.jpg" width="100px" height="100px" alt="product" /></a>
                                                    </figure>
                                                    <a href="#"></a>
                                                    <span class="price"><strong>{{ $item->tenbaihoc }}</strong></span>
                                                    <span><strong>Thời gian bắt đầu:</strong></span>
                                                    <span><strong>{{$item->created_at}}</strong></span>
                                                    
                                                    <span><strong>Thời gian kết thúc:</strong></span>
                                                    <span><strong>{{$item->thoigian}}</strong></span>
                                                    
                                                    
                                                    <div class="clearfix"></div>
															{{-- @if($item->created_at>$mytime1)
																	<button type="button" class="btn peach-gradient btn-lg"
																	style="padding:10px 5px;width:300px;margin:10px 0px;background: linear-gradient(90deg, rgba(237,177,91,0.9780287114845938) 27%, rgba(218,89,15,0.7259278711484594) 59%, rgba(233,164,51,1) 100%);" >
																		<div countdown="" data-date="{{$item->created_at}}"style="color:#BB3300;">
																		<span data-days="">00</span> ngày
																					<span data-hours="">00</span> giờ
																					<span data-minutes="">00</span> phút
																					<span data-seconds="">00</span> giây
																		</div>
																	</button>
															@elseif($item->thoigian>$mytime1)
																	<button type="button" class="btn peach-gradient btn-lg"
																	style="padding:10px 5px;width:300px;margin:10px 0px;background: linear-gradient(90deg, rgba(237,177,91,0.9780287114845938) 27%, rgba(218,89,15,0.7259278711484594) 59%, rgba(233,164,51,1) 100%);" >
																		<div countdown="" data-date="{{$item->thoigian}}" style="color:#CCFFCC;" >
																		<span data-days="">00</span> ngày
																					<span data-hours="">00</span> giờ
																					<span data-minutes="">00</span> phút
																					<span data-seconds="">00</span> giây

																		</div>
																	</button>
															@endif --}}
                                                </li>
                                        
                                         @endforeach
                                            </ul>
                                            <div class="clearfix"></div>
                                        </div>
									@endif
                                    </aside>
                                    
                                </div>
                            </div>
                        </div>
                        
                        <!-- Start: Staff Picks -->
                      
                        <!-- End: Staff Picks -->
                    </div>
                </main>
            </div>
        </div>
@endsection

