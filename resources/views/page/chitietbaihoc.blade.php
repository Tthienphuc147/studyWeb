<style>
    .container1 {
  min-height: 50vh;
}
.content--right{
    padding-top:69px;
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




@extends('masterPageWork')
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
                        <div class="fluid-container">
                            <div class="row">
                                <div class="col-sm-8">
                                    <div class="blog-page">
                                        <div class="blog-section">
                                            <article>
                                                <div class="blog-detail">
                                                    <div class="post-thumbnail">
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

                                                                    <div class="inputGroup">
                                                                        <input id="{{ $item->id }}" name="{{ $item->id }}" value="{{ $item->id }}" type="radio"/>
                                                                        <label for="{{ $item->id }}">{{ $item->luachon }}</label>
                                                                      </div>
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
                                                   <button type="submit" class="btn" style="
                                                   background-color: #25579c;color:white;margin-top: 20px;width:20rem;border:1px solid #25579c;border-radius:20px;font-weight:bold">
                                                   KIỂM TRA
                                                </button>
                                                   <br/>
                                                   @if($anw==1)
                                                   <label>Rất tiếc câu trả lời của bạn không đúng.
                                                   @if($tinh<4)Bạn có muốn xem hướng dẫn giải không?
                                                   </label><br/>
                                                   <button type="submit" class="btn btn-submit" style="background-color:#67e667;color:white;margin-top: 20px; width:20rem;border:1px solid #67e667;border-radius:20px;font-weight:bold">XEM NGAY</button>
                                                   @if($tinh<2) <a href="/ctbaihoc/{{ $data->id_baihoc }}/{{ $idb }}/{{$tinh}}"><button  class="btn" style="background-color:#e3c986;color:white;margin-top: 20px; width:20rem;border:1px solid #e3c986;border-radius:20px;font-weight:bold">TIẾP TỤC LÀM</button></a>
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
                                <div class="col-sm-4">
                                    <div class="entry-content content--right">
                                       <div class="bar">
                                        Điểm
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
