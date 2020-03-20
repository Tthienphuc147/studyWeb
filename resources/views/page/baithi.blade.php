<style>
    .container1 {
  min-height: 50vh;
  width: 100%;
  display: flex;
}

.quiz {
    display: grid;
    grid-auto-rows: auto;
    grid-columns: 1fr;
    padding: 2em;
    grid-gap: 1em;
    border: 1px;
    background: #b7cdea;
    box-shadow: 0px 5px 8px rgba(0, 14, 27, 0.06);
    color: #fff;
    font-weight: bold;
    font-size: 2rem;
}

.quiz-title {
  font-size: 2em;
}

.quiz-question {
  font-size: 1.15em;
}


.bar{
    background-color:#B7CDEA;
    color:white;
    width:50rem;
    border:1px solid #B7CDEA;
    border-radius:20px;
    font-weight:bold;
    padding: 15px;
    margin-bottom: 30px;
}
.inputGroup {
  background-color: #fff;
  display: block;
  margin: 10px 0;
  position: relative;
  width: 70rem;
  font-size: 2rem;
}
.inputGroup label {
  padding: 20px 30px;
  width: 70rem;
  display: block;
  text-align: left;
  color: #3C454C;
  cursor: pointer;
  position: relative;
  z-index: 2;
  transition: color 200ms ease-in;
  overflow: hidden;
  margin: 0;
}
.inputGroup label:before {
width: 100%;
    height: 100%;
  border-radius: 50%;
  content: "";
  background-color: #5562eb;
  position: absolute;
  left: 50%;
  top: 50%;
  transform: translate(-50%, -50%) scale3d(1, 1, 1);
  transition: all 300ms cubic-bezier(0.4, 0, 0.2, 1);
  opacity: 0;
  z-index: -1;
}
.inputGroup label:after {
  width: 32px;
  height: 32px;
  content: "";
  border: 2px solid #D1D7DC;
  background-color: #fff;
  background-image: url("data:image/svg+xml,%3Csvg width='32' height='32' viewBox='0 0 32 32' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M5.414 11L4 12.414l5.414 5.414L20.828 6.414 19.414 5l-10 10z' fill='%23fff' fill-rule='nonzero'/%3E%3C/svg%3E ");
  background-repeat: no-repeat;
  background-position: 2px 3px;
  border-radius: 50%;
  z-index: 2;
  position: absolute;
  right: 30px;
  top: 50%;
  transform: translateY(-50%);
  cursor: pointer;
  transition: all 200ms ease-in;
}
.inputGroup input:checked ~ label {
  color: #fff;
}
.inputGroup input:checked ~ label:before {
  transform: translate(-50%, -50%) scale3d(56, 56, 1);
  opacity: 1;
}
.inputGroup input:checked ~ label:after {
  background-color: #54E0C7;
  border-color: #54E0C7;
}
.inputGroup input {
  width: 32px;
  height: 32px;
  order: 1;
  z-index: 2;
  position: absolute;
  right: 30px;
  top: 50%;
  transform: translateY(-50%);
  cursor: pointer;
  visibility: hidden;
}
</style>





@extends('master')
@section('title')
Bài học
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
                                                 <form name="quiz"action=<?php if(count($data)>0){?>"/checkbaithi/{{ $data[0]->id_baihoc }}"<?php };$i=0;?> method="POST">
                                                  {{ csrf_field() }}
                                                <div class="post-detail">
                                                    <div class="post-detail-head">
                                                        {{-- <div class="post-share">
                                                            <a href="#."><i class="fa fa-question"></i> Câu hỏi: 1</a>
                                                            <a href="#."><i class="fa fa-clock-o"></i> Thời gian: 1p</a>
                                                            <a href="#."><i class="fa fa-star"></i> Điểm: 10</a>
                                                        </div> --}}
                                                          <button type="submit" class="btn" style="background-color: #f9996a;color:white;margin-top: 20px">NỘP BÀI</button><br/>
                                                        <div class="clearfix"></div>
                                                    </div>
                                                    @foreach($data as $itemm)
                                                    <div class="entry-content">
                                                            <div class="container1">

                                                                <div class="quiz">

                                                                <div class="quiz-question">Câu {{$i+1}}: {!! $itemm->noidungbaihoc !!}</div>
                                                             @if($itemm->id_loaitracnghiem==1)
                                                                 @foreach ($dapan[$i] as $item)

                                                                        <div class="inputGroup">
                                                                            <input id="{{ $item->id }}" name="{{ $item->id }}" type="radio"/>
                                                                            <label for="{{ $item->id }}">{{ $item->luachon }}</label>
                                                                          </div>
                                                                 @endforeach
                                                            @else
                                                                <label class="element-animation1 btn btn-lg btn-block"
                                                                    style="background-color: #f6783a;color:white"><span class="btn-label">
                                                                    <i class="glyphicon glyphicon-chevron-right"></i></span>
                                                                    @foreach ($dapan[$i] as $item)
                                                                    <input type="text" name="{{ $item->id }}"  >
                                                                    @endforeach
                                                                </label>



                                                            @endif



                                                                </div>

                                                            </div>

                                                    </div>

                                            <?php $i++;?>
                                        @endforeach

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
