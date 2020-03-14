<style>
    .container1 {
  min-height: 50vh;
  width: 100%;
  display: flex;
}

.quiz {
  margin: auto;
  width: 100%;
  max-width: 50em;
  display: grid;
  grid-auto-rows: auto;
  grid-columns: 1fr;
  padding: 2em;
  grid-gap: 1em;
  border: 1px;
  box-shadow: 0px 5px 8px rgba(0, 14, 27, 0.06);
  background-color: #ecececbe;
}

.quiz-title {
  font-size: 2em;
}

.quiz-question {
  font-size: 1.15em;
}

.quiz-answer {
  position: relative;
  display: flex;
  flex-flow: row nowrap;
  align-items: center;
  justify-content: flex-start;
  user-select: none;
  background: linear-gradient(#fafafc, rgb(235, 231, 231));
  box-shadow: 0px 2px 2px 1px rgba(0, 10, 20, 0.07);
}

.quiz-answer p {
  z-index: 1000;
}

.circle {
  position: relative;
  height: 1em;
  width: 1em;
  margin-left: 1em;
  flex: 0 0 auto;
  border-radius: 50%;
  border: 0.3em solid #666677;
  background-color: #fff;
}

.quiz-answer p {
  display: block;
  margin: 1em;
  z-index: 10;
}

.feedback {
  position: absolute;
  top: 0px;
  right: 0px;
  background-color: #dd0077;
  color: white;
  min-height: 100%;
  max-width: 88.6%;
  padding: 1em 1em 1em 2em;
  z-index: 100;
  opacity: 1;
  visibility: hidden;
  clip-path: polygon(1.25em 0, 100% 0, 100% 100%, 1.25em 100%, 0 50%);
}

.correct .feedback {
  background-color: #00ccaa;
}

input {
  display: none;
}

.highlight {
  position: absolute;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
}

input:hover ~ .highlight {
  background-color: #fafafc;
}

input:checked ~ .highlight {
  background-color: #f1bc7f;
}



@keyframes feedbackfade {
  from {
    opacity: 1;
  }
  to {
    opacity: 0;
  }
}
</style>




@extends('masterPage')
@section('title')
Bài tập
@endsection
@section('titlePage')
{{ $tieude->tenbaihoc }}
@endsection
@section('content')
   <div id="content" class="site-content">
            <div id="primary" class="content-area">
                <main id="main" class="site-main">
                    <div class="blog-detail-main">
                        <div class="container">
                            <div class="row">
                                <div class="blog-page">
                                    <div class="blog-section">
                                        <article>
                                            <div class="blog-detail">
                                                <div class="post-thumbnail">
                                                    <figure>
                                                        <img alt="blog" src="https://png.pngtree.com/thumb_back/fw800/back_our/20190625/ourmid/pngtree-blue-homework-tutorial-cartoon-education-banner-background-image_254905.jpg" />
                                                    </figure>
                                                </div>
                                                 <form action="/check/{{ $data->id_baihoc }}/{{ $idb }}/{{$tinh}}" method="POST">
                                                  {{ csrf_field() }}
                                                <div class="post-detail">
                                                    <div class="post-detail-head">
                                                        {{-- <div class="post-share">
                                                            <a href="#."><i class="fa fa-question"></i> Câu hỏi: 1</a>
                                                            <a href="#."><i class="fa fa-clock-o"></i> Thời gian: 1p</a>
                                                            <a href="#."><i class="fa fa-star"></i> Điểm: 10</a>
                                                        </div> --}}
                                                        <div class="clearfix"></div>
                                                    </div>
                                                    <div class="entry-content">
                                                            <div class="container1">

                                                                <div class="quiz">
                                                            
                                                                <div class="quiz-title">{{ $tieude->tenbaihoc }}</div>
                                                            
                                                                <div class="quiz-question">{!! $data->noidungbaihoc !!}</div>
                                                              @if($data->id_loaitracnghiem==1)    
                                                @foreach ($dapan as $item)
                                               
                                                                <label class="quiz-answer">
                                                                    <input type="radio" name="{{ $item->id }}" id="answer1">
                                                                    <div class="highlight"></div>
                                                                    <div class="circle"></div>
                                                                    <p>{{ $item->luachon }}</p>
                                                                </label>
                                                @endforeach
                                            @else
                                            <label class="element-animation1 btn btn-lg btn-block" 
                                                style="background-color: #f6783a;color:white"><span class="btn-label">
                                                <i class="glyphicon glyphicon-chevron-right"></i></span> 
                                                @foreach ($dapan as $item)
                                                <input type="text" name="{{ $item->id }}"  >
                                                @endforeach
                                                 </label>

                                                

                                            @endif
                                               <button type="submit" class="btn" style="background-color: #f9996a;color:white;margin-top: 20px">KIỂM TRA</button><br/>
                                               @if($anw==1)
                                               <label>Rất tiếc câu trả lời của bạn không đúng. 
                                               @if($tinh<4)Bạn có muốn xem hướng dẫn giải không?
                                               </label><br/>
                                               <button type="submit" class="btn" style="background-color: #990033;color:white;margin-top: 20px">XEM NGAY</button>
                                               @if($tinh<2) <a href="/ctbaihoc/{{ $data->id_baihoc }}/{{ $idb }}/{{$tinh}}"><button  class="btn" style="background-color: #990033;color:white;margin-top: 20px">TIẾP TỤC LÀM</button></a>
                                               @endif
                                               @endif
                                               @endif
                                                                
                                                            
                                                            @if($anw==1&&$tinh>3)
                                    <div class="modal-header">
                                        <label>Lời giải</label>
										<h3>{!! $data->noidungdapan !!}</h3>
									</div>
                                    <div style="display:flex;justify-content:center">
                                            
                                                
                                               {!! $data->video !!}
                                               
                                        </div>
                                        @endif
                                      
                                                                </div>
                                                                
                                                            </div>
                                                        
                                                    </div>
                                                </div>
                                                
                                                 </form>
                                                 
                                            </div>
                                            
                                        </article>
                                          
                                      
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>

@endsection
