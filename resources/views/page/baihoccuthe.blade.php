@extends('masterPage')
@section('title')
Bài tập
@endsection
@section('titlePage')
Bài tập
@endsection
@section('content')

  <div id="content" class="site-content">
  		@foreach ($mucdo as $itemmucdo)
			@if($itemmucdo!=NULL)
                <section class="search-filters">
                    <div class="filter-box">
                        <h3>MỨC ĐỘ: {{ $itemmucdo->tenmucdo }}</h3>
                    </div>
                    <div class="clear"></div>
                </section>
                <div id="primary" class="content-area">
                    <main id="main" class="site-main">
                        <div class="books-full-width">
                            <div class="container">
                        
                                <div class="booksmedia-fullwidth">
                                    <ul>
                                      <?php $i=0 ?>
                    @if (request()->session()->get('id_taikhoan')==1)
                        @php
                            $data1=array_splice($data,0,2);

                        @endphp
                    	@foreach ($data1 as $item)
                         @if($itemmucdo->id_mucdo==$item->id_mucdo)
                                        <li>
                                            <div class="book-list-icon blue-icon"></div>
                                            <figure style="height: 35rem;">
                                                <a href="books-media-detail-v2.html"><img src="https://i.ytimg.com/vi/-q8pqqbkzbs/maxresdefault.jpg"  alt="Book"></a>
                                                <figcaption>
                                                    <header>
                                                     @if ($temp[$i]==1)
                                                        <h4>{{ $item->ten }} </h4>
                                                           
                                                            <h4>
                                                            Đã hoàn thành
                                                            </h4>
                                                     @elseif($temp[$i]==0)
                                                      <h4>{{ $item->ten }} </h4>
                                                       <h4>
                                                            Bạn hãy hoàn thành bài tập này
                                                            </h4>
                                                    </header>
                                                    <a href="/ctbaihoc/{{ $idbaihoc}}/{{ $i }}/-1">
                                                        <div class="actions">
                                                            Vào học <i class="fa fa-long-arrow-right"></i>
                                                        </div>
                                                    </a>
                                                     @else
                                                      <header>
                                                 
                                                        <h4>{{ $item->ten }} </h4>
                                                  <a href="/ctbaihoc/{{ $idbaihoc}}/{{ $i }}/-1">
                                                        <div class="actions">
                                                            Vào học <i class="fa fa-long-arrow-right"></i>
                                                        </div>
                                                    </a>
                                                    </header>
                                                     @endif
                                                
                                                </figcaption>
                                            </figure>                                                
                                        </li>
                        @endif
                          <?php $i++ ?>
                         @endforeach
                          @foreach ($data  as $item)
                          @if($itemmucdo->id_mucdo==$item->id_mucdo)
                                <li>
                                            <div class="book-list-icon blue-icon"></div>
                                            <figure style="height: 35rem;">
                                                <a href="books-media-detail-v2.html"><img src="https://i.ytimg.com/vi/-q8pqqbkzbs/maxresdefault.jpg"  alt="Book"></a>
                                                <figcaption>

                                                      <header>
                                                 
                                                        <h4>{{ $item->ten }} </h4>
                                                  <a href="/ctbaihoc/{{ $idbaihoc}}/{{ $i }}/-1">
                                                        <div class="actions">
                                                            Bài tập này đang khóa <i class="fa fa-lock"></i>
                                                        </div>
                                                    </a>
                                                    </header>

                                                </figcaption>
                                            </figure>                                                
                                </li>
                           @endif
                     <?php $i++ ?>
                      @endforeach
                          @else
                    @foreach ($data as $item)
                    @if($itemmucdo->id_mucdo==$item->id_mucdo)
                      <li>
                                            <div class="book-list-icon blue-icon"></div>
                                            <figure style="height: 35rem;">
                                                <a href="books-media-detail-v2.html"><img src="https://i.ytimg.com/vi/-q8pqqbkzbs/maxresdefault.jpg"  alt="Book"></a>
                                                <figcaption>
                                                    <header>
                                                     @if ($temp[$i]==1)
                                                        <h4>{{ $item->ten }} </h4>
                                                           
                                                            <h4>
                                                            Đã hoàn thành
                                                            </h4>
                                                     @elseif($temp[$i]==0)
                                                      <h4>{{ $item->ten }} </h4>
                                                       <h4>
                                                            Bạn hãy hoàn thành bài tập này
                                                            </h4>
                                                    </header>
                                                    <a href="/ctbaihoc/{{ $idbaihoc}}/{{ $i }}/-1">
                                                        <div class="actions">
                                                            Vào học <i class="fa fa-long-arrow-right"></i>
                                                        </div>
                                                    </a>
                                                     @else
                                                      <header>
                                                 
                                                        <h4>{{ $item->ten }} </h4>
                                                  <a href="/ctbaihoc/{{ $idbaihoc}}/{{ $i }}/-1">
                                                        <div class="actions">
                                                            Vào học <i class="fa fa-long-arrow-right"></i>
                                                        </div>
                                                    </a>
                                                    </header>
                                                     @endif
                                                
                                                </figcaption>
                                            </figure>                                                
                     </li>
                       @endif
                <?php $i++ ?>
                 @endforeach
                    @endif
                                    
                                    </ul>
                                </div>
                                
                            </div>
                        
                        </div>
                    </main>
                </div>
        	@endif
	    @endforeach
            
        </div>
@endsection
